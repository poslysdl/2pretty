<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>2Pretty</title>
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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2_metro.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate2.css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pages/component.css" />


<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pages/user-profile.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-2pretty.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-boxed">
<!-- BEGIN HEADER -->

<div id="top-shadow" class="header navbar navbar-inverse navbar-fixed-top"> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="header-inner container paddmore"> 
    <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
    <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/menu-toggler.png" alt="" /> </a> 
    <!-- END RESPONSIVE MENU TOGGLER --> 
    
    <!-- BEGIN LOGO --> 
    <?php echo CHtml::link('<div class="fs1" aria-hidden="true" data-icon="&#xe18d;"></div>',array('site/index'), array('class'=>'navbar-brand')); ?> 
    <!-- END LOGO --> 
    <!--TOP MENU-->
    <ul class="nav navbar-nav pull-left hidden-xs hidden-small">
      <li><a class="menu" href="<?php echo Yii::app()->homeUrl; ?>">Home</a></li>
      <li><a class="menu" href="#">Forum</a></li>
      <li><a class="menu" href="#">Pretty-Blog</a></li>
    </ul>
    <!--END TOP MENU--> 
    
    <!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="nav navbar-nav pull-right">
      
      <!-- BEGIN INBOX DROPDOWN -->
      <li class="dropdown" id="header_inbox_bar"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true"> <i class="icon-envelope"></i> <span class="badge">5</span> </a>
        <ul class="dropdown-menu extended inbox">
          <li>
            <ul class="dropdown-menu-list scroller" style="height: 205px;">
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">Lisa Wong</span> <span class="time">Just Now</span> </span> <span class="message"> Vivamus sed auctor nibh nibh auctor nibh congue </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.jpg" alt=""/></span> <span class="subject"> <span class="from">Richard Doe</span> <span class="time">16 mins</span> </span> <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar1.jpg" alt=""/></span> <span class="subject"> <span class="from">NY Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
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
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">Lisa Wong</span> <span class="time">Just Now</span> </span> <span class="message"> Vivamus sed auctor nibh nibh auctor nibh congue </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.jpg" alt=""/></span> <span class="subject"> <span class="from">Richard Doe</span> <span class="time">16 mins</span> </span> <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar1.jpg" alt=""/></span> <span class="subject"> <span class="from">NY Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.jpg" alt=""/></span> <span class="subject"> <span class="from">NY Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                auctor nibh... </span> </a> </li>
            </ul>
          </li>
          <li class="external canhtop"> <a href="#">See all notifications <i class="icon-arrow-right-light"></i></a> </li>
        </ul>
      </li>
      <!-- END NOTIFICATION DROPDOWN --> 
      <!-- BEGIN USER LOGIN DROPDOWN -->
      <li class="dropdown user hidden-mobi"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img class="avatar-user img-responsive"  alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar1_small.jpg"/> <span class="username"></span> <i class="icon-caret-down"></i> </a>
        <ul class="dropdown-menu">
          <li><a class="gren first" href="#">Your rank</a> </li>
          <li><a class="gren" href="#"> your albums</a> </li>
          <li><a class="gren" href="#"> your like</a> </li>
          <li class="divider"></li>
          <li><a class="gren" href="#"> find friends</a> </li>
          <li><a class="gren" href="#"> language</a> </li>
          <li><a class="gren" href="#"> settings</a> </li>
          <li class="divider"></li>
          <li><a class="gren center" href="#">report a problem</a> </li>
          <li class="buttcen">
            <button  class="btn meoS" type="button">log out</button>
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
    </ul>
    <!-- END TOP NAVIGATION MENU --> 
    <!-- END TOP NAVIGATION MENU --> 
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER --> 

<!--SUB HEADER--> 

<!--end sub header-->

<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->

<div class="page-container">
  <div class="page-content">
    <div class="row whitebg">
      <div class="col-md-12 martop container padd head-user">
        <div class="head-but">
          <ul class="buton-user pull-right">
            <li>
              <button class="btn white follow" type="button">Follow</button>
            </li>
            <li>
              <button class="btn white messege" type="button">Message</button>
            </li>
            <li class="dropdown"> <a data-close-others="true" data-toggle="dropdown" class="dropdown-toggle" href="#">
              <button class="btn white setting" type="button"><i class="icon-gear"></i><i class="icon-caret-down"></i></button>
              </a>
              <ul class="dropdown-menu">
                <li><a class="gren" data-toggle="modal" href="#block-user"> Block </a> </li>
                <li><a class="gren" data-toggle="modal" href="#report-pin"> Report </a> </li>
              </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN --> 
            <!-- BEGIN SEARCH FROM --> 
            
            <!-- BEGIN SEARCH FROM -->
          </ul>
        </div>
        <div class="tilesp">
          <div class="tilep biggroup hidden-320 hidden-600">
            <div class="tilep imagechanh selected">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/aoki.jpg" alt=""> </div>
            </div>
            <div class="tilep imagechanh selected ">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/masculina7.jpg" alt=""> </div>
            </div>
            <div class="tilep imagechanh selected hidden-620">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/141.jpg" alt=""> </div>
            </div>
            <div class="tilep imagechanh selected hidden-620">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/bearb.jpg" alt=""> </div>
            </div>
          </div>
          <div class="tilep imageny selected">
            <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/man.jpg" alt=""> </div>
          </div>
          <div class="tilep biggroup hide-768 hidden-320 hidden-600 hidden-620">
            <div class="tilep imagechanh selected">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/76719.jpg" alt=""> </div>
            </div>
            <div class="tilep imagechanh enma selected">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/050037.jpg" alt=""> </div>
            </div>
            <div class="tilep imagechanh selected">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/262.jpg" alt=""> </div>
            </div>
            <div class="tilep imagechanh enma selected">
              <div class="tile-body view-first"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/728.jpg" alt=""> </div>
            </div>
          </div>
        </div>
        <?php 
              	$uid =Yii::app()->session['user_id'];
              	$udetails = Users::model()->with('userLocation', 'userDetails')->findByPk($uid);
              	?>
        <!--user-->
        <div class="head-info"> <a class="avatar" href="/will_hatefbook">
        
        <img title="Will Hatefbook" src="<?php
                      		$fromurl=strstr($udetails->userDetails->user_details_avatar, '://', true);
                            if($fromurl=='http' || $fromurl=='https')
                            echo $udetails->userDetails->user_details_avatar; 
                            else
                            echo Yii::app()->baseUrl.'/profiles/'.$udetails->userDetails->user_details_avatar; ?>" class="img-responsive" alt="Will Hatefbook"></a>
        	
          <div class="user-text">
            <div class="bguser">
              <h1> <a href="#">
              	
              <?php echo $udetails->userDetails->user_details_firstname.' '.$udetails->userDetails->user_details_lastname; ?>
              	
              </a> </h1>
              <p><?php echo $udetails->userDetails->user_details_slogan; ?></p>
            </div>
          </div>
        </div>
      </div>
      <ul class="col-md-12 container padd user-tabs  tabs">
        <li class="user-connect">
          <div>
            <h1 class="location"><?php 
            
            if (isset($udetails->userLocation->user_location_city, $udetails->userLocation->user_location_country))
            echo $udetails->userLocation->user_location_city . ', ' . $udetails->userLocation->user_location_country; ?></h1>
            <div class="social"><a target="_blank" href="#"><i class="icon-facebook-sign"></i></a><a target="_blank" href="#"><i class="icon-twitter-sign"></i></a><a target="_blank" href="#"><i class="icon-instagram"></i></a><a target="_blank" href="#"><i class="icon-pinterest-sign"></i></a><a target="_blank" href="#"><i class="icon-vk"></i></a></div>
          </div>
        </li>
        <li class="mobiti"></li>
        <li class="menu pull-right">
        
         <?php echo CHtml::ajaxLink("(19)Following", array('profile/following'),  array(
     'success'=>'function(data){$("#tab_2_6").html(data);
      		new AnimOnScroll( document.getElementById( "grid-following" ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
			$(".about_tab, .rank_tab, .heart_tab, .follower_tab, .album_tab").removeClass("active in");
			$(".following_tab").addClass("active in");
			$(".rank_active, .album_active, .about_active, .heart_active, .follower_active").parent().removeClass("active");   
			$(".following_active").parent().addClass("active");
      }'), array('class'=>'eletab following_active')); ?>
         </li>
         
         
        <li class="menu pull-right">
        
        
         <?php echo CHtml::ajaxLink("(23)Followers", array('profile/followers'),  array(
     'success'=>'function(data){$("#tab_2_5").html(data);
      		new AnimOnScroll( document.getElementById( "grid-follower" ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
			$(".about_tab, .rank_tab, .heart_tab, .following_tab, .album_tab").removeClass("active in");
			$(".follower_tab").addClass("active in");
			$(".rank_active, .album_active, .about_active, .heart_active, .following_active").parent().removeClass("active");   
			$(".follower_active").parent().addClass("active");
      }'), array('class'=>'eletab follower_active')); ?>
        
        
        
        
        
        
        
        </li>
        <li class="menu pull-right">
        
        
         
           <?php echo CHtml::ajaxLink("Hearts", array('profile/hearts'),  array(
     'success'=>'function(data){
     	try{
			data = $.parseJSON(data);
			window.location=data.redirect;
		} catch(e) {
			$("#tab_2_4").html(data);
      		new AnimOnScroll( document.getElementById( "grid-heart" ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
			
					$(".about_tab, .rank_tab, .follower_tab, .following_tab, .album_tab").removeClass("active in");
					$(".heart_tab").addClass("active in");
					$(".rank_active, .album_active, .about_active, .follower_active, .following_active").parent().removeClass("active");   
					$(".heart_active").parent().addClass("active");
		}
      }'), array('class'=>'eletab heart_active')); ?>
        
        
        </li>
       
       
       
       
        <li class="menu pull-right">
        
         <?php echo CHtml::ajaxLink("Rankings", array('profile/ranks'),  array(
    			'success'=>'function(data){
     			try{
					data = $.parseJSON(data);
					window.location=data.redirect;
				} catch(e) {
					$("#tab_2_3").html(data);
					$(".about_tab, .heart_tab, .follower_tab, .following_tab, .album_tab").removeClass("active in");
					$(".rank_tab").addClass("active in");
					$(".heart_active, .album_active, .about_active, .follower_active, .following_active").parent().removeClass("active");   
					$(".rank_active").parent().addClass("active");
				}
      }'), array('class'=>'eletab rank_active')); ?>
        
       </li>
        <li class="menu pull-right">
        
         <?php echo CHtml::ajaxLink("Albums", array('profile/albums'),  array(
     'success'=>'function(data){
     	$("#tab_2_2").html(data);
     	$(".about_tab, .heart_tab, .follower_tab, .following_tab, .rank_tab").removeClass("active in");
		$(".album_tab").addClass("active in");
		$(".heart_active, .rank_active, .about_active, .follower_active, .following_active").parent().removeClass("active");   
		$(".album_active").parent().addClass("active");
     }'), array('class'=>'eletab album_active')); ?>
        
        </li>
        <li class="menu pull-right active">
         <?php echo CHtml::ajaxLink("About Me", array('profile/about' ),  array(
     'success'=>'function(data){
     	  try{
		  	data = $.parseJSON(data);
		  	window.location = data.redirect;
		  } catch(e) {
		  	  $("#tab_2_1").html(data);
		      $(".album_tab, .heart_tab, .follower_tab, .following_tab, .rank_tab").removeClass("active in");
		      $(".about_tab").addClass("active in");
		      $(".heart_active, .rank_active, .album_active, .follower_active, .following_active").parent().removeClass("active");   
		      $(".about_active").parent().addClass("active");
		  }
      }'), array('class'=>'eletab about_active')); ?>
        
       </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12 container padd head-tabhead">
        <div class="portlet">
          <div  class="tab-content">
   <?php echo $content; ?>
      </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- Modals--> 
    <!-- /.modal  block user-->
    <div class="modal fade modal-dialog modal-block-user" id="block-user" data-focus-on="input:first" style="display: none;">
      <div class="modal-content">
        <div class="modal-body"> 
          <!-- BEGIN Block FORM -->
          <form class="block-user-form" action="#" method="post">
            <h3 class="form-title">Block This User</h3>
            <div class="form-group endform">
            <div class="col-md-3"> <a href="/will_hatefbook" class="avatar"><img alt="Will Hatefbook" class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gallery/avanta.jpg" title="Will Hatefbook"></a> </div>
            <div class="col-md-9">
              <p class="help-block-more">Block this User for Messages, Viewing your Content or Following you.</p>
            </div>
          </form>
          <!-- END Block FORM --> 
        </div>
        <div class="modal-div">
          <div class="divider"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn blue active ok" >Block</button>
          <button type="button" class="btn blue back"  data-dismiss="modal">Back</button>
        </div>
      </div>
      <!-- /.modal-content --> 
      
      <!-- /.modal-dialog --> 
    </div>
    <!-- /.modal --> 
    
    <!--modal report-->
    <div class="modal fade modal-dialog modal-report-pin" id="report-pin" tabindex="-1" data-focus-on="input:first" aria-hidden="true">
      <div class="modal-content">
        <div class="modal-body"> 
          <!-- BEGIN LOGIN FORM -->
          <form class="report-pin-form" action="#" method="post">
            <h3 class="form-title">REPORT PIN</h3>
            <div class="form-group">
              <label class="control-label">Why are you reporting this User?</label>
            </div>
            <div class="form-group">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Spam </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Nudity or Pornography </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Graphic Violance </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Actively promotes self-harm </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Attacs a group or individual </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Hateful speech or symbol</label>
              </div>
            </div>
            <div class="form-group endform">
              <div class="checkbox-list">
                <label>
                  <input type="checkbox">
                  Other</label>
              </div>
            </div>
          </form>
          <!-- END LOGIN FORM --> 
        </div>
        <div class="modal-div">
          <div class="divider"></div>
        </div>
        <div class="modal-footer">
          <label>Is this your <strong>Intellectual Property?</strong> </label>
          <button type="button" class="btn blue active ok"  >Report</button>
          <button type="button" class="btn blue"  data-dismiss="modal">Back</button>
        </div>
      </div>
      <!-- /.modal-content --> 
      
      <!-- /.modal-dialog --> 
    </div>
    <!--end modal report--> 
    
    <!--end- Modals --> 
    
  </div>
</div>

<!-- END CONTAINER --> 
<!-- BEGIN FOOTER --> 

<!-- END FOOTER --> 
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --> 
<!-- BEGIN CORE PLUGINS --> 
<!--[if lt IE 9]>
   <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/respond.min.js"></script>
   <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/excanvas.min.js"></script> 
   
   
   <![endif]--> 

<!--[if IE]>
   <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/customie.css" rel="stylesheet" type="text/css"/>
   <![endif]--> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-1.10.2.min.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script> 
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery.appear.js" type="text/javascript"></script> 
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
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-validation/dist/jquery.validate.min.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-validation/dist/additional-methods.min.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2.min.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/ui-extended-modals.js"></script> 

<!-- END PAGE LEVEL PLUGINS --> 

<!-- BEGIN PAGE LEVEL SCRIPTS --> 
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/modernizr.custom.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/app.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/form-validation.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/masonry.pkgd.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/imagesloaded.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/classie.js"></script> 
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/AnimOnScroll.js"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 
<script type='text/javascript'>
		$(function() {
		  $(document.body).on('appear', '.card', function(e, $affected) {
		    // add class called “appeared” for each appeared element
		    $(this).addClass("appeared");
		  });
		  $('.card').appear({force_process: true});
		});
	</script> 
<script>
$(document).ready(function(){
	var url= "<?php echo Yii::app()->createUrl('profile/about'); ?>";
	$.get(url,function(data){ 
	 try{
		  	data = $.parseJSON(data);
		  	window.location = data.redirect;
		  } catch(e) {
		  	  $("#tab_2_1").html(data);
		      $(".album_tab, .heart_tab, .follower_tab, .following_tab, .rank_tab").removeClass("active in");
		      $(".about_tab").addClass("active in");
		      $(".heart_active, .rank_active, .album_active, .follower_active, .following_active").parent().removeClass("active");   
		      $(".about_active").parent().addClass("active");
		  }
		 });
				 limit = 2;
 $(this).scrollTop(0);
 $(window).scroll(function(){
 	
 				if($(document).height()==$(window).scrollTop()+$(window).height()){
				
				if ($('.heart_active').parent().hasClass('active')) {
					if($('.nomore').html()!=undefined)
						$('.nomore').remove();
					if($('.loader').html()==undefined)
					$('#tab_2_4').append('<div class="row loader"></div>');
				limit = limit + 2;
				var url= "<?php echo Yii::app()->createUrl('profile/addhearts'); ?>";
				url+='/?limit='+limit+'&action=heart';
				$.get(url,function(data){ 
					
					data = $.parseHTML(data);
						
					$('body').append(data);
					var eledata=$('#heartedimg').html();
					if(eledata==undefined && $('.nomore').html()==undefined)
					{
						$('#tab_2_4').append('<div class="row nomore">No more images</div>');
						$('.loader').remove();
						$('#heartedimg').remove();
					}
					else
					{
						$("#grid-heart > li:last").after(eledata);
						$('.loader').remove();
						$('#heartedimg').remove();
					}

					new AnimOnScroll( document.getElementById( 'grid-heart' ), {
						minDuration : 0.4,
						maxDuration : 0.7,
						viewportFactor : 0.2
					});

				}); 
				} 
			}	
 	
  var y = $(window).scrollTop();
  if( y > 0 ){
      
	   $("#top-shadow").addClass("topsha");
	   $("#right-slide").addClass("rightsha");
  } else {
      
	  $("#top-shadow").removeClass("topsha");
	  $("#right-slide").removeClass("rightsha");
  }
 });
})
</script> 
<script>
      jQuery(document).ready(function(data) {    
         App.init(); // initlayout and core plugins        
		 FormValidation.init();		 
      });
   </script> 

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>