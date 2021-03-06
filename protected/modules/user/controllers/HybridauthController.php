<?php

class HybridauthController extends Controller{
 
    public $defaultAction='authenticate';
    public $debugMode=true;
 
    // important! all providers will access this action, is the route of 'base_url' in config
    public function actionEndpoint(){
        Yii::app()->hybridAuth->endPoint();
    }
 
    public function actionAuthenticate($provider='Facebook'){
        if(!Yii::app()->user->isGuest || !Yii::app()->hybridAuth->isAllowedProvider($provider))
            $this->redirect(Yii::app()->homeUrl);
 
        if($this->debugMode)
            Yii::app()->hybridAuth->showError=true;
 
        if(Yii::app()->hybridAuth->isAdapterUserConnected($provider)){
            $socialUser = Yii::app()->hybridAuth->getAdapterUserProfile($provider);
            if(isset($socialUser)){
                // find user from db model with social user info
                $user = Users::model()->findBySocial($provider, $socialUser->identifier, $socialUser->email);
                if(empty($user)){ 
                	$user_socialmedia=new UsersSocialmedia;
                	$user_socialmedia->user_socialmedia_provider=$provider;
                	$user_socialmedia->user_socialmedia_identifier=$socialUser->identifier;
                	if($user_socialmedia->save())
                	{
                		$users=new Users;
                		$users->user_socialmedia_id=$user_socialmedia->user_socialmedia_id;
                		
						$user_details=new UsersDetails;
						$user_details->user_details_firstname=$socialUser->firstName;
						$user_details->user_details_lastname=$socialUser->lastName;
						$user_details->user_details_email=$socialUser->email;
						$user_details->user_details_avatar=$socialUser->photoURL;
						$time=new CTimestamp;
						$value=$time->getDate();
						$user_details->user_details_created_date=$value[0];
						if($socialUser->gender=='male')
                    	$user_details->user_details_gender=1;
                    	else
                    	$user_details->user_details_gender=2;
                    	$bday = strtotime($socialUser->birthYear.'-'.$socialUser->birthMonth.'-'.$socialUser->birthDay);
						$user_details->user_details_dob = date( "Y-m-d", $bday);
						
						$user_locations=new UsersLocation;
						$user_locations->user_location_city=$socialUser->city;
						$user_locations->user_location_country=$socialUser->country;
						$user_locations->save();
						$users->user_location_id=$user_locations->user_location_id;
						
						$users->save();
						$user_details->user_id=$users->user_id;
						
						if($user_details->save())
						{
						$updateusers=Users::model()->findByPk($users->user_id);
						$updateusers->user_details_id=$user_details->user_details_id;
						$updateusers->save();
						}

						
						
					}
                   	
                       $user=$users; 
                  }
 
                if($user){
                	$identity = new UserIdentity($provider, $socialUser->identifier);
                   // $identity = new UserIdentity($user->social_info1, $user->social_info2);
                    $identity->authenticate('social');
                    switch ($identity->errorCode) {

                      case UserIdentity::ERROR_NONE:
                           Yii::app()->user->login($identity);
                           $path=$this->createAbsoluteUrl('/registration/settings');
                           $this->redirect($path);
                           break;

                    }
                }
            }
        }
        $this->redirect(Yii::app()->homeUrl);
    }
    
   public function actionLogout(){
 
        if(Yii::app()->hybridAuth->getConnectedProviders()){
            Yii::app()->hybridAuth->logoutAllProviders();
        }
 
        Yii::app()->user->logout();    
    }
 
}

?>