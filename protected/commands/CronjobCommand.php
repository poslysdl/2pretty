<?php

class CronjobCommand extends CConsoleCommand {

    public function run($args) {
		$criteria = new CDbCriteria();
		$criteria->select = 't.* , (SELECT COUNT( * )*(1) FROM log_photos_hearts b WHERE b.owner_id = t.user_id) + (SELECT COUNT( * )*(0.6) FROM users_follow c WHERE c.follow_id = t.user_id) AS totalcount';
		$criteria->group = 't.user_id';
		$criteria->order = 'totalcount DESC';
		$allusersphotos=Photos::model()->with('user', 'user.userDetails')->findAll($criteria);  
		$i=1;
		foreach($allusersphotos as $photo)
		{
			$ranks=UsersDetails::model()->find("user_id=$photo->user_id");
			if($ranks->user_rank_worldwide!=$i)
			{
				$ranks->user_rank_worldwide=$i;
				$ranks->save();
			}
			$i++;
		}
	}

}

?>