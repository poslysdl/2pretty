<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>Posly</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/2prettyicon/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />

<!-- custom demo style -->

<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-2pretty.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/cropper.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->

<div class="header navbar navbar-inverse navbar-fixed-top"> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="header-inner"> 
    
    <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
    <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/menu-toggler.png" alt="" /> </a> 
    <!-- END RESPONSIVE MENU TOGGLER --> 
    
       <!-- BEGIN LOGO -->
    <?php echo CHtml::link('<div class="fs1" aria-hidden="true" data-icon="&#xe18d;"></div>',array('site/index'), array('class'=>'navbar-brand')); ?> 
    <!-- END LOGO --> 
    <!--TOP MENU-->
    <ul class="nav navbar-nav pull-left hidden-xs hidden-small">
      <li> <?php echo CHtml::link('Home',array('site/index'), array('class'=>'menu')); ?></li>
      <li><a class="menu" href="#">Pretty-Blog</a></li>
      <li><a class="menu" href="#">About</a></li>
    </ul>
    <!--END TOP MENU--> 
    
    <!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="nav navbar-nav pull-right">
    <?php
    	if(Yii::app()->user->isGuest)
    	{ ?>
    	      <!-- BEGIN SIGNIN DROPDOWN -->
      <li class="dropdown" > <a href="#" class="dropdown-toggle sign-inhead" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true"> Sign in</a>
        <ul class="dropdown-menu signup">
          <li><span>Sign in with</span></li>
          <li>
           <?php echo CHtml::link('Facebook',array('user/hybridauth/authenticate',
                                         'provider'=>'Facebook'), array('class'=>'btn faceS')); ?>
          </li>
          <li>
          <button type="button" class="btn meoS checkmsg" data-toggle="modal" href="#loginModal">Email</button>
          </li>
        </ul>
      </li>
      <!-- END SIGNIN DROPDOWN --> 
      <!-- BEGIN SIGN UP DROPDOWN -->
      <li class="dropdown user"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
       <button type="button" class="btn meoS" data-toggle="modal" href="#sign-up">Sign Up</button>
        </a>

      </li>
      <!-- END USER LOGIN DROPDOWN --> 
      
      <?php } 
      else 
      { ?>
      
      <!-- BEGIN INBOX DROPDOWN -->
      <li class="dropdown" id="header_inbox_bar"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true"> <i class="icon-envelope"></i> <span class="badge">5</span> </a>
        <ul class="dropdown-menu extended inbox">
          <li>
            <ul class="dropdown-menu-list scroller" style="height: 205px;">
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">Lisa Wong</span> <span class="time">Just Now</span> </span> <span class="message"> Vivamus sed auctor nibh nibh auctor nibh congue </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.jpg" alt=""/></span> <span class="subject"> <span class="from">Richard Doe</span> <span class="time">16 mins</span> </span> <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar1.jpg" alt=""/></span> <span class="subject"> <span class="from">NY Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">NY Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
            </ul>
          </li>
          <li class="external canhtop"> <a href="inbox.html">See all messages <i class="icon-arrow-right-light"></i></a> </li>
        </ul>
      </li>
      <!-- END INBOX DROPDOWN --> 
      
      <!-- BEGIN NOTIFICATION DROPDOWN -->
      <li class="dropdown" id="header_notification_bar"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true"> <i class="icon-megaphone"></i> <span class="badge">6</span> </a>
        <ul class="dropdown-menu extended inbox">
          <li>
            <ul class="dropdown-menu-list scroller" style="height: 205px;">
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">Lisa Wong</span> <span class="time">Just Now</span> </span> <span class="message"> Vivamus sed auctor nibh nibh auctor nibh congue </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.jpg" alt=""/></span> <span class="subject"> <span class="from">Richard Doe</span> <span class="time">16 mins</span> </span> <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar1.jpg" alt=""/></span> <span class="subject"> <span class="from">Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
            </ul>
          </li>
          <li class="external canhtop"> <a href="#">See all notifications <i class="icon-arrow-right-light"></i></a> </li>
        </ul>
      </li>
      <!-- END NOTIFICATION DROPDOWN --> 
      <!-- BEGIN USER LOGIN DROPDOWN -->
      <li class="dropdown user hidden-mobi"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img class="avatar-user img-responsive"  alt="" src="<?php 
      $id=Yii::app()->user->id;
   		$a=UsersDetails::model()->find("user_id=$id");
   		if(isset($a))
   		{
			    $fromurl=strstr($a->user_details_avatar, '://', true);
                            if($fromurl=='http' || $fromurl=='https')
                            echo $a->user_details_avatar; 
                            else
                            echo Yii::app()->baseUrl.'/profiles/'.$a->user_details_avatar;
      
		}
   		
?>"/> <span class="username"></span> <i class="icon-caret-down"></i> </a>
        <ul class="dropdown-menu">
           <li><?php echo CHtml::link('your profile',array('profile/index', 'url'=>$a->user_unique_url), array('class'=>'gren  first')); ?> </li>
          <li class="divider"></li>
          <li><a class="gren" href="#"> language</a> </li>
          <li><a class="gren" href="#"> settings</a> </li>
          <li class="divider"></li>
          <li><a class="gren" href="#">report a problem</a> </li>
          <li class="buttcen">
           <?php echo CHtml::link('Logout',array('site/logout'), array('class'=>'btn meoS')); ?>
          </li>
        </ul>
      </li>
      <!-- END USER LOGIN DROPDOWN --> 
      <!-- BEGIN SEARCH FROM -->
      
      <li class="searchbox hidden-mobi"> 
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="extra_search.html" method="POST">
          <div class="form-container">
            <input type="text" placeholder="Search for tag and user"/>
            <input type="button" class="submit" value="&#xe058;"/>
          </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM --> 
      </li>
      <!-- BEGIN SEARCH FROM -->
      <?php } ?>
    </ul>
    <!-- END TOP NAVIGATION MENU --> 
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER --> 

<!--SUB HEADER-->
<div id="top-shadow" class="headersub navbar navbar-inverse navbar-fixed-topsub"> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="header-inner">
    <div class="row hidden-small">
      <div class="col-lg-3b">
        <ul class="nav pull-left fixmar">
          <!-- CAPTION MEMBER -->
          <li class="dropdown"> 
          
          <a class="dropdown-toggle caption" data-close-others="true"  data-toggle="dropdown" href="#">
          <?php 
          if(Yii::app()->controller->action->id=='topmembers')
          echo '<span class="top-mem"><i class="icon-star"></i>TOP MEMBER</span>';
          else if(Yii::app()->controller->action->id =='newmembers')
          echo '<span class="top-mem"><i class="icon-people"></i>New Members</span>';
          else if(Yii::app()->controller->action->id =='following')
          echo '<span class="top-mem"><i class="icon-heart"></i>Following</span>';
          else
          echo '<span class="top-mem"><i class="icon-stats"></i>Going Viral</span>';
          
          ?>
          </a>
            <ul class="dropdown-menu extended inbox topmem">
              <li class="margintop marginbot">
                <div class="rowb">
                  <div class="col-sm-6b">
                  <?php echo CHtml::link('<span class="top-mem"><i class="icon-stats"></i>Going Viral</span> <span class="desp">Most Recently liked, shared, commented and followed</span>',array('site/index'), array('class'=>'menu')); ?>
 </div>
                  <div class="col-sm-6b"> 
                  <?php echo CHtml::link('<span class="top-mem"><i class="icon-star"></i>TOP MEMBER</span> <span class="desp">Find out who are the most beautiful People on our Planet</span>',array('site/topmembers'), array('class'=>'menu')); ?>
</div>
                  <div class="col-sm-6b">
                      
                      <?php  
                      if(Yii::app()->user->isGuest)
                      {
					  	$printt='<span class="top-mem"><i class="icon-heart"></i>Following</span> <span class="desp">See how the people who you are following are performing </span>';
					  echo CHtml::link($printt, array('#loginModal'), array('class'=>'menu checkmsg', 'data-toggle'=>"modal"));
					  }
						else
						{
							
							$printt='<span class="top-mem"><i class="icon-heart"></i>Following</span> <span class="desp">See how the people who you are following are performing </span>';
					  echo CHtml::link($printt, array('site/following'), array('class'=>'menu'));
							?>
                     
                      <?php } ?>
                      	</div>
                  <div class="col-sm-6b">
                  <?php echo CHtml::link('<span class="top-mem"><i class="icon-people"></i>New Members</span> <span class="desp">Walecome our Fresh Faces with a big like</span>',array('site/newmembers'), array('class'=>'menu')); ?>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- END CAPTION MEMBER -->
        </ul>
      </div>
      <div class="col-lg-3b pull-center">
        <ul class="nav">
          <li class="dropdown"> 
            <!-- CAPTION LOCATION --> 
            <a class="dropdown-toggle caption" data-close-others="true"  data-toggle="dropdown" href="#"><i class="icon-map-marker"></i>Monaco</a>
            <ul data-delay="1000" class="dropdown-menu extended loc">
              <li >
                <div class="rowb">
                  <div class="gender-lo">
                  <?php echo CHtml::link('<span class="badge"><i class="icon-female" aria-hidden="true"></i></span>',array('site/females')); ?>
                   <?php echo CHtml::link('<span class="badge"><i class="icon-male" aria-hidden="true"></i></span>',array('site/males')); ?>
                 </div>
                  <div class="country-lo"><span class="text">From</span><i data-toggle="modal" href="#country-list" class="icon-map-marker"></i>
                    <div class="btn-group">
                      <button class="btn btn-default" type="button">Germany</button>
                      <button data-close-others="false" data-delay="1000" data-hover="dropdown" data-toggle="dropdown" class="btn btn-defaultb dropdown-toggle part-right" type="button"><i class="icon-caret-down"></i></button>
                      <ul data-delay="1000" role="menu" class="dropdown-menu">
                        <li class="row1">
                          <div class="gey">
                            <ul>
                              <li><a>Countries Nearby...</a></li>
                            </ul>
                          </div>
                          <div class="white">
                            <ul>
                              <li><?php echo CHtml::link('Belgium',array('site/country', 'c'=>'Belgium')); ?></li>
                              <li><?php echo CHtml::link('Denmark',array('site/country', 'c'=>'Denmark')); ?></li>
                              <li><?php echo CHtml::link('France',array('site/country', 'c'=>'France')); ?></li>
                              <li><?php echo CHtml::link('India',array('site/country', 'c'=>'India')); ?></li>
                              <li><?php echo CHtml::link('Netherlands',array('site/country', 'c'=>'Netherlands')); ?></li>
                              <li><?php echo CHtml::link('Switzerland',array('site/country', 'c'=>'Switzerland')); ?></li>
                              <li>&nbsp;</li>
                              <li><a class="green" data-toggle="modal" href="#country-list">Browse all Countries</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="row2">
                          <div class="gey">
                            <ul>
                              <li><a>Currently Viewing</a></li>
                            </ul>
                          </div>
                          <div class="white">
                            <ul>
                              <li><?php
                              if(isset($_GET['c']))
                              echo CHtml::link($_GET['c'],array('site/country', 'c'=>$_GET['c']));
                              else
                              echo CHtml::link('All Countries',array('site/country', 'c'=>''));
                              
                              ?></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="button-lo">
                    <div class="addbut">
                      <input type="submit" value="Start Search" class="le-button">
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- END LOCATION --> 
            
          </li>
        </ul>
      </div>
      <div class="col-lg-3b "> 
        
        <!-- CAPTION UPLOAD -->
        
        <ul class="nav pull-right fixwidth2">
          <li class="dropdown"> 
            <!-- CAPTION LOCATION --> 
            <a class="dropdown-toggle caption" data-close-others="true" data-toggle="dropdown" href="#"><i class="icon-upload-2"></i>Upload Image</a>
            <ul class="dropdown-menu extended upload">
              <li >
                <div class="rowb">
                  <div class="but-up">
                    <div class="addbut"> 
                    <?php 
                    if(Yii::app()->user->isGuest)
                     echo CHtml::link('<span class="btn white fileinput-button"> <span>Choose files</span> </span>', array('#loginModal'), array('class'=>'btn checkmsg', 'data-toggle'=>"modal"));
                    else
                    echo CHtml::ajaxLink(' <span class="btn white fileinput-button"> <span>Choose files</span> </span>', array('photo/uploadform'),  array(
                                      'success'=>'function(data){$("body").append(data); $("#add-image-index").modal("show");}')); ?>
                                    
					</div>
                  </div>
                  <div id="dropzone" class="grab-up"> <a href="#"> <span class="badge"><i class="icon-pictures" aria-hidden="true"></i></span> Drag n' Drop your Photos </a> </div>
                  <div class="fac-up"> <a href="#"> <i class="icon-facebook-sign" aria-hidden="true"></i> <span>Or select an image from your Facebook albums</span> </a> </div>
                </div>
              </li>
            </ul>
            <!-- END LOCATION --> 
            
          </li>
        </ul>
        
        <!-- END UPLOAD --> 
        
      </div>
      <div class="col-lg-3b hidden-xs hidden-sm"> 
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right fixwidth">
          
          <!-- BEGIN Quick Search--> 
          
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU --> 
      </div>
    </div>
    
    <!--END LEFT ICON--> 
    
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>

<!--end sub header-->

<div class="clearfix"></div>

<!-- BEGIN CONTAINER -->
<div class="page-container"> 
	<?php echo $content; ?>
</div>
<!-- END CONTAINER --> 
<!-- BEGIN FOOTER --> 

<!-- END FOOTER --> 


<!-- The template to display files available for download --> 

<!-- effect item --> 

<!-- BEGIN CORE PLUGINS --> 
<!--[if lt IE 9]>
   <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/respond.min.js"></script>
   <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/excanvas.min.js"></script> 
   
   
   <![endif]--> 

<!--[if IE]>
   <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/customie.css" rel="stylesheet" type="text/css"/>
   <![endif]--> 

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --> 
 <script src='http://connect.facebook.net/en_US/all.js' type="text/javascript"></script>
 
  <script type="text/javascript"> 
      FB.init({appId: "<?php echo Yii::app()->params['fbid']; ?>", status: true, cookie: true});
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
      function postToFeed(url) {
      	var auth="<?php if(Yii::app()->user->isGuest) echo '0'; else echo '1'; ?>";
      	if(parseInt(auth)==1)
      	{
		var u=readCookie('purl');
	 	$("body").find('.close').click();
        // calling the API ...
        var obj = {
          method: 'feed',
         // redirect_uri: 'YOUR URL HERE',
          link: 'https://api.facebook.com/me/photos',
          picture: u,
          name: 'Posly.com',
          //caption: '',
          description: 'Posly is the largest social network.'
        };

        function callback(response) {
    if (response && response['post_id']) {
    	var id=readCookie('pid');
    	var shareid=response['post_id'];
    			$.ajax({
					type: "POST",
					url: "<?php echo Yii::app()->createUrl('/photo/sharecount'); ?>",
					data: { id: id, shareid: shareid}
					})
					.done(function( msg ) {
						if(msg=='ok')
						 alert('Photo was shared successfully.');
					});
     
    } else {
      alert('Photo was not shared.');
    }
        }

        FB.ui(obj, callback);
        }
        else
        {
			$('#share-pic').modal('hide');
			$('#loginModal').modal('show');
		}

      }

    </script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery_002.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/urchin.js"></script>
<script type="text/javascript">
_uacct = "UA-850242-2";
urchinTracker();
</script>
<script type="text/javascript">
/*jslint unparam: true */
/*global window, $ */
$(document).on('click', '#formsubmit', function(){

    
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');
   
$('#uploadfiles').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
        $('#formsubmit').attr('disabled', 'disabled');
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
		//console.log(percentVal, position, total);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
        
    },
	complete: function(xhr) {
		$('#formsubmit').removeAttr('disabled');
		var obj = jQuery.parseJSON(xhr.responseText);
		var filenames="";
		var i=0;
		$.each(obj.files, function(index, file){
			filenames=filenames+file.name+' &nbsp;&nbsp;&nbsp; ';
			i++;
		});
		status.html("Total files: "+i+" &nbsp;&nbsp;&nbsp; "+filenames);
		setInterval(function(){
			var percentVal = '0%';
       		 bar.width(percentVal)
        	percent.html(percentVal);
        	status.html('');
        	location.reload();
			},1000);
	}
}); 

});
</script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script> 
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --> 

<!--animation --> 

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery.blockui.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery.cookie.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script> 
<!-- END CORE PLUGINS --> 
<!-- BEGIN PAGE LEVEL PLUGINS --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script> 

<!-- END PAGE LEVEL PLUGINS --> 

<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/app.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/ui-extended-modals.js"></script> 

<!-- END PAGE LEVEL SCRIPTS --> 

<!--file upload--> 

<!-- END PAGE LEVEL PLUGINS--> 
<!-- BEGIN:File Upload Plugin JS files--> 
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script> 
<!-- The Templates plugin is included to render the upload/download listings --> 

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script> 
<!-- The basic File Upload plugin --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-file-upload/js/jquery.fileupload.js"></script> 
<!-- The File Upload processing plugin --> 

<!--end file upload --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/cropper.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery.bxslider.js"></script> 

<script>

var posWas;
 
$(window).bind('scroll', function(){ //when the user is scrolling...

	var pos = $(window).scrollTop(); //position of the scrollbar
	
	if(pos > posWas){ 
		//do something
		 $("#top-shadow").addClass("lentren");
			   $("#right-slide").addClass("addin");
	}
	else if(pos < posWas){ 
		//do something
		$("#top-shadow").removeClass("lentren");
						  $("#right-slide").removeClass("addin");
	}
	
	 
	
	if (pos == 0 ) { $("#top-shadow").removeClass("topsha");  $(".mosota").removeClass("rightsha"); $("#top-shadow").removeClass("lentren");}
	
	else {$("#top-shadow").addClass("topsha");  $(".mosota").addClass("rightsha");}

	posWas = pos; 
	
	
})


/**/


</script> 
<script>
      jQuery(document).ready(function() {   
         App.init(); // initlayout and core plugins
         UIExtendedModals.init();
         $(document).on('click', '.img-zoom', function(){
         	var pid=$(this).attr('dphoto_id');
         	var rank=$(this).closest('.portlet').find('.portlet-title > .rank > h2').html();
         	var profileimg=$(this).closest('.portlet').find('.portlet-title > .caption').html();
         	var allimgs=$(this).closest('.portlet').find('.portlet-body  .carousel-inner').html();
         	var ind=$(this).closest('.portlet').find('.portlet-body  .carousel-indicators').html();
         	var tags=$(this).closest('.portlet').find('.portlet-body  .main-tag').html();
         	var mname=$(this).closest('.portlet').find('.portlet-body  .main-name').html();
         	var comment=$(this).closest('.portlet').find('.portlet-body  .main-comment').html();
         	var commentbox=$(this).closest('.portlet').find('.portlet-body  .comment-form').html();
         	$('.dynamic-caption').html(profileimg);
         	$('.dynamic-rank').find('h2').html(rank);
         	$('.dynamic-carousel-inner').html(allimgs);
         	ind=$.trim(ind);
         	var html = $.parseHTML(ind);
         	$.each( html, function( i, el ) {
         		$.each(el.childNodes[0].childNodes[0].childNodes, function(j, ele){
         			         		
         		if($(ele).attr('data-target'))
         		{
					$(ele).attr('data-target', '#myCarousel4pop');
					$(ele).attr('class', 'slider-data');
				}
         		});
	
			});
         	$('.dynamic-carousel-indicators').html(html);
         	$('.dynamic-main-tag').html(tags);
         	$('.dynamic-main-name').html(mname);
         	$('.dynamic-main-comment').html(comment);
         	$('.dynamic-comment-form').html(commentbox);
         	$('.dynamic-carousel-indicators').find('.bx-viewport').css('height', '70');
         	$('.dynamic-main-comment > .slimScrollDiv > .scrollercm').find('.chats').attr('chatid', pid);
         	$('.dynamic-comment-form > .input-cont').find('.custom-comment-box').removeAttr('class').attr('class', 'dynamic-box');
         	  var url="<?php echo Yii::app()->createUrl('/photo/wholiked'); ?>?id="+pid;
         	$.get(url, function( data ) {
         			$("#share-pic > #modalbody > .row").remove();
           			$('#share-pic > #modalbody').append(data);
					});

         });
         $(document).on('click',".slider-data > .img-load",function() {
         	var addnew=$(this).attr('src');
         	document.cookie="purl=<?php echo Yii::app()->getBaseUrl(true); ?>"+addnew;
			document.cookie="pid="+$(this).attr('photo_id');
         	$("img[dphoto_id='"+$(this).attr('photo_id')+"']").attr('src', addnew.replace('thumbnail', 'medium'));
         	$(this).closest('#modalbody').find('textarea').attr('photo_id', $(this).attr('photo_id'));
          	$(this).closest('#modalbody').find('.main-comment').attr('photo_id', $(this).attr('photo_id'));
         	$(this).closest('#modalbody').find('.main-comment .chats').attr('id', $(this).attr('photo_id'));
         	$(this).closest('#modalbody').find('.main-comment .chats').attr('chatid', $(this).attr('photo_id'));
          	$(this).closest('.portlet').find('.main-tag > .tagcloud').attr('phid', $(this).attr('photo_id'));
          	$(this).closest('#modalbody').find('.main-name > span').attr('poplphid', $(this).attr('photo_id'));
          	
          	  var url1="<?php echo Yii::app()->createUrl('/photo/changetags'); ?>?photoid="+$(this).attr('photo_id');
         var url2="<?php echo Yii::app()->createUrl('/photo/changecomments'); ?>?photoid="+$(this).attr('photo_id');
         var url3="<?php echo Yii::app()->createUrl('/photo/changelikes'); ?>?photoid="+$(this).attr('photo_id');
         var baseu="<?php echo Yii::app()->baseUrl; ?>";
                var tags="";
           		var comments="";
           		var likes=0;
           		var id=$(this).attr('photo_id');

           		$.get(url1, function( data ) {
           			var data = JSON.parse(data);
           			  jQuery.each(data, function(i, val) {
           			   		tags=tags+"<a href='"+val.url+"'>"+val.tag+"</a>";	
       					});
						$("div[phid='"+id+"']").html(tags);
					});
					
				$.get(url2, function( data ) {
           			var data = JSON.parse(data);
           			
           			  jQuery.each(data, function(i, val) {
           			  	var s = val.photo;
					if(s.indexOf("http") == -1)
					comments=comments+"<li class='in'> <img src='"+baseu+"/profiles/"+val.photo+"' alt='' class='avatar img-responsive'><div class='message'> <a class='name' href='#'>"+val.firstname+" "+val.lastname+"</a><span class='datetime'> @ "+val.created_date+"</span><span class='body'>"+val.comment+"</span> </div></li>";
					else
					comments=comments+"<li class='in'> <img src='"+val.photo+"' alt='' class='avatar img-responsive'><div class='message'> <a class='name' href='#'>"+val.firstname+" "+val.lastname+"</a><span class='datetime'> @ "+val.created_date+"</span><span class='body'>"+val.comment+"</span> </div></li>";
					
       					});
						$("ul[chatid='"+id+"']").html(comments);
					});
				$.get(url3, function( data ) {
           			var data = parseInt(data);
           			  	$("span[poplphid='"+id+"']").html(data+" liked1 this");
					});
          	
		});
         
         //$('.slider-data').click(function(){console.log($(this)); });
         $(document).on('click', '.bxslider li', function(e){
         	var addnew=$(this).children().attr('src');
         	$("img[dphoto_id='"+$(this).children().attr('photo_id')+"']").attr('src', addnew.replace('thumbnail', 'medium'));
		 	 $(this).closest('.portlet').find('textarea').attr('photo_id', $(this).children().attr('photo_id'));
          $(this).closest('.portlet').find('.main-comment').attr('photo_id', $(this).children().attr('photo_id'));
         $(this).closest('.portlet').find('.main-comment .chats').attr('id', $(this).children().attr('photo_id'));
          $(this).closest('.portlet').find('.main-tag > .tagcloud').attr('phid', $(this).children().attr('photo_id'));
          $(this).closest('.portlet').find('.main-name > span').attr('lphid', $(this).children().attr('photo_id'));
         var url1="<?php echo Yii::app()->createUrl('/photo/changetags'); ?>?photoid="+$(this).children().attr('photo_id');
         var url2="<?php echo Yii::app()->createUrl('/photo/changecomments'); ?>?photoid="+$(this).children().attr('photo_id');
         var url3="<?php echo Yii::app()->createUrl('/photo/changelikes'); ?>?photoid="+$(this).children().attr('photo_id');
         var baseu="<?php echo Yii::app()->baseUrl; ?>";
                var tags="";
           		var comments="";
           		var likes=0;
           		var id=$(this).children().attr('photo_id');

           		$.get(url1, function( data ) {
           			var data = JSON.parse(data);
           		
           			  jQuery.each(data, function(i, val) {
           			  	 
           			   	tags=tags+"<a href='"+val.url+"'>"+val.tag+"</a>";	
						
       					});
						$("div[phid='"+id+"']").html(tags);
					});
					
				$.get(url2, function( data ) {
           			var data = JSON.parse(data);
           			
           			  jQuery.each(data, function(i, val) {
           			  	var s = val.photo;
					if(s.indexOf("http") == -1)
					comments=comments+"<li class='in'> <img src='"+baseu+"/profiles/"+val.photo+"' alt='' class='avatar img-responsive'><div class='message'> <a class='name' href='#'>"+val.firstname+" "+val.lastname+"</a><span class='datetime'> @ "+val.created_date+"</span><span class='body'>"+val.comment+"</span> </div></li>";
					else
					comments=comments+"<li class='in'> <img src='"+val.photo+"' alt='' class='avatar img-responsive'><div class='message'> <a class='name' href='#'>"+val.firstname+" "+val.lastname+"</a><span class='datetime'> @ "+val.created_date+"</span><span class='body'>"+val.comment+"</span> </div></li>";
					
       					});
						$("#"+id).html(comments);
					});
				$.get(url3, function( data ) {
           			var data = parseInt(data);
           			  	$("span[lphid='"+id+"']").html(data+" liked this");
					});
		 	
		 	
		 });
       
  		  $('.bxslider').bxSlider({
		    slideWidth: 400,
		    minSlides: 5,
		    maxSlides: 5,
		    moveSlides: 5,
		    slideMargin: 5,
		    pager:false,
		    infiniteLoop: false,
		  });
		$(document).on('change', '#fileupload', function(){
			return false;
		});
		$(document).on('click', '#formsubmit', function(){
			if(!$('#fileupload').val())
			{
				$('#error-status').text('You need to select one image.');
				return false;
			}
			else if($('#imgwidth').val()>800)
			{
				$('#error-status').text('Image size is exceeds maximum allowable size(800x600).');
				return false;
			}
			else if($('#imgwidth').val()<500)
			{
				$('#error-status').text('Image size is lessthen minimum allowable size(500x400).');
				return false;
			}
			else if($('#imgx1').val()==null || $('#imgy1').val()==null || $('#imgx2').val()==null || $('#imgy2').val()==null)
			{
				$('#error-status').text('Image coordinates error please once again crop the image.');
				return false;
			}
			else if(!$('.getTags').html())
			{
				$('#error-status').text('You need to enter some hash tags.');
				return false;
			}
			return true;
			
		});
		 		 	//this is for mystyles
		  $(document).on('keypress', '#hash-tags', function(e){
		 	code= (e.keyCode ? e.keyCode : e.which);

		 	var d=$(this).val();
            if (code == 13) 
			{
				var html="<a href='#' class='novato' onclick=$(this).remove();><i class='icon-remove-sign'></i>"+d+"</a>";
				$('.getTags').append(html);
				var t=$('#all-tags').val();
				if(t==''|| t==null)
				t=t+d;
				else
				t=t+'$$'+d;
				$('#all-tags').val(t);
				$(this).val('');
				return false;
			}
		 });
		 
		 $(document).on('click', '#hash-tags-submit', function(e){
		 	var d=$( "#hash-tags" ).val();
		 	if(d!='' || d!=null)
		 	{
		 		var html="<a href='#' class='novato' onclick=$(this).remove();><i class='icon-remove-sign'></i>"+d+"</a>";
				$('.getTags').append(html);
				var t=$('#all-tags').val();
				if(t==''|| t==null)
				t=t+d;
				else
				t=t+'$$'+d;
				$('#all-tags').val(t);
				$( "#hash-tags" ).val('');
				return false;
			}
		 });
		 var present=2;
   $(window).scroll(function(){
if($(document).height()==$(window).scrollTop()+$(window).height()){
	present+=2;
	if($('.nomore').html()!=undefined)
	$('.page-content-wrapper > .page-content > .nomore').remove();
	if($('.page-content-wrapper > .page-content > .loader').html()==undefined)
	$('.page-content-wrapper > .page-content').append('<div class="row loader"></div>');
	var url="<?php echo Yii::app()->createUrl('/site/somemore'); ?>?act=<?php echo Yii::app()->controller->action->id; ?>&l="+present;
           $.get(url, function( data ) {
           	ind=$.trim(data);
         	var html = $.parseHTML(ind);
         	$('body').append(html);
         	var left=$('#leftside').css('display', 'none').html();
         	var right=$('#rightside').css('display', 'none').html();
         	if($.trim(left)=='')
         	{

         		if($('.nomore').html()==undefined)
					$('.page-content-wrapper > .page-content').append('<div class="row nomore">No more images</div>');
				$('.page-content-wrapper > .page-content > .loader').remove();
	      		$('#leftside').remove();
         		$('#rightside').remove();
			}
			else
			{
					$('.page-content-wrapper > .page-content > .loader').remove();
         			$('#leftside').remove();
         			$('#rightside').remove();
           			$('.page-content-wrapper > .page-content > .row > .col-md-6:first-child').append(left);
           			$('.page-content-wrapper > .page-content > .row > .col-md-6:last-child').append(right);		
           			  		  $('.bxslider').bxSlider({
							    slideWidth: 400,
							    minSlides: 5,
							    maxSlides: 5,
							    moveSlides: 5,
							    slideMargin: 5,
							    pager:false,
							    infiniteLoop: false,
							  });		
			}

					});
       }
       else
       {
	   		if($('.nomore').html()!=undefined)
			$('.page-content-wrapper > .page-content > .nomore').remove();
			if($('.page-content-wrapper > .page-content > .loader').html()!=undefined)
			$('.page-content-wrapper > .page-content > .loader').remove();
	   }
   });
		
      });
     
      
     
     	    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.display-image')
                        .attr('src', e.target.result);
 //                       .width(200)
   //                     .height(150);
                };
                reader.readAsDataURL(input.files[0]);
                $(".display-image").cropper({
				    aspectRatio: 1.227,
				    modal: false,
				    preview: ".extra-preview",
				    done: function(data) {
				    	$('#imgx1').val(data.x1);
				    	$('#imgy1').val(data.y1);
				    	$('#imgx2').val(data.x2);
				    	$('#imgy2').val(data.y2);
				    	$('#imgheight').val(data.height);
				    	$('#imgwidth').val(data.width);
				    }
				});
            }
     }
   </script> 
<?php if(!Yii::app()->user->isGuest)
{
	?>
	<script>

		jQuery(document).ready(function(){
			$('.custom-follow').click(function(){
				$(this).attr("disabled", "disabled");
 			var v=$(this).attr('uid');
 			var address=$(this).parent().parent();
 			var u="<?php echo Yii::app()->createUrl('/follow/adduser'); ?>?id="+parseInt(v);
				$.get(u,function(data,status){ 
					if(data=='ok')
					$(address).html("<b>Successfully added to your follow list.</b>").css('color', 'green').css('line-height', '30px').fadeOut(1000, function() { $(address).remove(); });
					else if(data == 'already')
					alert('You have already followed.');
					else if(data == 'no')
					alert("You can not follow yourself.")
			 });
			 $(this).removeAttr("disabled");

 		});
 		$('#share-pic').on('click', '.like', function(){ 
 					var temp=$(this).find('i').attr('class');
 					var n = temp.indexOf("checkAuth");
			if(n!=-1)
			{
				$('#share-pic').modal('hide');
				$('.userAuthCheck').click();
			}
			else
			{
			var u = $(this).attr('href');
			temp=$.trim(temp);
			var foo = u.split('/');
   			 var last = foo.length - 1;
			var id=foo[last];
			if(temp=='icon-heart-empty')
			{
				$.get(u,function(data,status){ 
				          var data = parseInt(data);
           			  	$("span[lphid='"+id+"']").html(data+" liked-now this");
				});
				$(this).find('i').removeAttr('class').attr('class', 'icon-heart');
			}
			else if(temp =='icon-heart')
			{
				u= u.replace('cincrease', 'cdecrease');
				$.get(u,function(data,status){
					 var data = parseInt(data);
           			  	$("span[lphid='"+id+"']").html(data+" liked-now-1 this")
           			  });
				$(this).find('i').removeAttr('class').attr('class', 'icon-heart-empty');
			}
			}
			return false;

 		 });
	 $(document).on('click', '.like', function(){
			var temp=$(this).find('i').attr('class');
			var n = temp.indexOf("checkAuth");
			if(n!=-1)
			{
				$('.userAuthCheck').click();
			}
			else
			{
			var u = $(this).attr('data-url');
			temp=$.trim(temp);
			var foo = u.split('/');
   			 var last = foo.length - 1;
			var id=foo[last];
			if(temp=='icon-heart-empty')
			{
				$.get(u,function(data,status){ 
				          var data = parseInt(data);
           			  	$("span[lphid='"+id+"']").html(data+" liked this");
				});
				$(this).find('i').removeAttr('class').attr('class', 'icon-heart');
			}
			else if(temp =='icon-heart')
			{
				u= u.replace('cincrease', 'cdecrease');
				$.get(u,function(data,status){
					 var data = parseInt(data);
           			  	$("span[lphid='"+id+"']").html(data+" liked this")
           			  });
				$(this).find('i').removeAttr('class').attr('class', 'icon-heart-empty');
			}
			}
			return false;
		 });
		 
		 $(document).on('keypress', '.dynamic-box', function(e){
			var code= (e.keyCode ? e.keyCode : e.which);
            if (code == 13)
            { 
            var url= "<?php echo Yii::app()->createUrl('comments/addcomment'); ?>";
			var id= $(this).attr('photo_id');
			 $(this).closest('#modalbody').find('.chats').removeAttr('id');
			$(this).closest('#modalbody').find('.chats').attr('chatid', $(this).attr('photo_id'));
			var comment= $(this).val();
           		url+='/?id='+id+'&comment='+comment;
           		$.get(url,function(data,status){ 
           		var data = JSON.parse(data);
           		if(data.avatar.indexOf('http')!= -1)
           		{
					var end="<li class='in'> <img class='avatar img-responsive' alt='' src='"+data.avatar+"'";
           		end=end+' />';
           		end= end+'<div class="message"> <a href="#" class="name">';
           		end= end+ data.firstName+' '+data.lastName;
           		end=end+'</a> <span class="datetime">@ '+data.created_date;
           		end=end+'</span>';
                end=end+' <span class="body">'+data.comment+'</span> </div> </li>';
                 }
                else
                {
					var end="<li class='in'> <img class='avatar img-responsive' alt='' src='<?php echo Yii::app()->baseUrl.'/profiles/'; ?>"+data.avatar+"'";
           		end=end+' />';
           		end= end+'<div class="message"> <a href="#" class="name">';
           		end= end+ data.firstName+' '+data.lastName;
           		end=end+'</a> <span class="datetime">@ '+data.created_date;
           		end=end+'</span>';
                end=end+' <span class="body">'+data.comment+'</span> </div> </li>';
                 }
                   $('#'+id).append(end);
                 var h= $('#'+id).height()+10;
                 if(h<255)
                 {
				 	$('#'+id).parent().parent().css('height', h);
                 	$('#'+id).parent().parent().find('.scrollercm').css('height', h);
                 }
                 else
                 {
				 	$('#'+id).parent().parent().css('height', 255);
                 	$('#'+id).parent().parent().find('.scrollercm').css('height', 255);
                 	//$('#'+id).parent().parent().scrollTop( $('#'+id).height() );
                 	$('#'+id).parent().parent().find('.scrollercm').scrollTop( $('#'+id).height() );
				 }
                // console.log($('#'+id).parent().parent().css('height', 225));
                 $( "#"+id ).scrollTop( $('#'+id).height() );

                 $("ul[chatid='"+id+"']").append(end);
                 var h= $("ul[chatid='"+id+"']").height()+10;
                 if(h<225)
                 {
				 	$("ul[chatid='"+id+"']").parent().parent().css('height', h);
                 	$("ul[chatid='"+id+"']").parent().parent().find('.scrollercm').css('height', h);
                 }
                 else
                 {
				 	$("ul[chatid='"+id+"']").parent().parent().css('height', 225);
                 	$("ul[chatid='"+id+"']").parent().parent().find('.scrollercm').css('height', 225);
                 	//$('#'+id).parent().parent().scrollTop( $('#'+id).height() );
                 	$("ul[chatid='"+id+"']").parent().parent().find('.scrollercm').scrollTop( $('#'+id).height() );
				 }
                // console.log($('#'+id).parent().parent().css('height', 225));
                 $("ul[chatid='"+id+"']").scrollTop( $('#'+id).height() );
                 //console.log( $("ul[chatid='"+id+"']").height());
				
           		});
           		$(this).val('');
				return false;
			}

		 });
		 
		 // this method is for add comments
		$(document).on('keypress', '.custom-comment-box', function(e){
			var code= (e.keyCode ? e.keyCode : e.which);
            if (code == 13)
            { 
            var url= "<?php echo Yii::app()->createUrl('comments/addcomment'); ?>";
			var id= $(this).attr('photo_id');
			var comment= $(this).val();
           		url+='/?id='+id+'&comment='+comment;
           		$.get(url,function(data,status){ 
           		var data = JSON.parse(data);
           		if(data.avatar.indexOf('http')!= -1)
           		{
					var end="<li class='in'> <img class='avatar img-responsive' alt='' src='"+data.avatar+"'";
           		end=end+' />';
           		end= end+'<div class="message"> <a href="#" class="name">';
           		end= end+ data.firstName+' '+data.lastName;
           		end=end+'</a> <span class="datetime">@ '+data.created_date;
           		end=end+'</span>';
                end=end+' <span class="body">'+data.comment+'</span> </div> </li>';
                 }
                else
                {
					var end="<li class='in'> <img class='avatar img-responsive' alt='' src='<?php echo Yii::app()->baseUrl.'/profiles/'; ?>"+data.avatar+"'";
           		end=end+' />';
           		end= end+'<div class="message"> <a href="#" class="name">';
           		end= end+ data.firstName+' '+data.lastName;
           		end=end+'</a> <span class="datetime">@ '+data.created_date;
           		end=end+'</span>';
                end=end+' <span class="body">'+data.comment+'</span> </div> </li>';
                 }
                 
                 $('#'+id).append(end);
                 var h= $('#'+id).height()+10;
                 if(h<225)
                 {
				 	$('#'+id).parent().parent().css('height', h);
                 	$('#'+id).parent().parent().find('.scrollercm').css('height', h);
                 }
                 else
                 {
				 	$('#'+id).parent().parent().css('height', 225);
                 	$('#'+id).parent().parent().find('.scrollercm').css('height', 225);
                 	//$('#'+id).parent().parent().scrollTop( $('#'+id).height() );
                 	$('#'+id).parent().parent().find('.scrollercm').scrollTop( $('#'+id).height() );
				 }
                // console.log($('#'+id).parent().parent().css('height', 225));
                 $( "#"+id ).scrollTop( $('#'+id).height() );
                 //console.log( $('#'+id).height());
				
           		});
           		$(this).val('');
				return false;
			}
		});	
		});
	</script>
	<?php 
} 
else
{ ?>
<script>
$(document).on('click', '[href="#sign-up"]', function(){ 
$('#loginModal').modal('hide'); $('#RegisterForm_firstname_em_').hide(); $('#RegisterForm_lastname_em_').hide();$('#RegisterForm_email_em_').hide(); $('#RegisterForm_password_em_').hide(); $('#RegisterForm_re_password_em_').hide(); });
$(document).on('click', '.checkmsg', function(){$('#LoginForm_email_em_').hide(); $('#LoginForm_password_em_').hide();});
$(document).on('click', '.like', function(){$('#share-pic').parent().click()});
$(document).on('focus', '.custom-comment-box', function(){ $('#share-pic').modal('hide'); $('#loginModal').modal('show'); return false; });
	$(document).ready(function(){
			$('.custom-comment-box').focus(function(){
		 		$('#loginModal').modal('show');
		 		return false;
		 	});
	});
</script>
<?php } ?>
<!-- END JAVASCRIPTS -->
      <?php
      if(Yii::app()->user->isGuest)
      {
	  	      $model=new LoginForm;
      $this->renderPartial('//site/login', array('model'=>$model));
            $model=new RegisterForm;
      $this->renderPartial('//site/register', array('model'=>$model));
	  }

      ?>
</body>
<!-- END BODY -->
</html>