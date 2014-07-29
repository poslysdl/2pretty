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
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate2.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2_metro.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css"/>

<!--loading image-->

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
      <li> <?php echo CHtml::link('Home',array('site/index'), array('class'=>'menu')); ?></li>
      <li><a class="menu" href="#">Pretty-Blog</a></li>
      <li><a class="menu" href="#">About</a></li>
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
              <li> <a href="inbox.html?a=view"> <span class="photo"><img class="avatar-user-l img-responsive" src="./<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar1.jpg" alt=""/></span> <span class="subject"> <span class="from">NY Nilson</span> <span class="time">2 hrs</span> </span> <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh
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

<?php echo $content; ?>

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
<!--script--> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/masonry.pkgd.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/imagesloaded.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/classie.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/test.js"></script> 
<!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/AnimOnScroll.js"></script>-->


<script>
		/*	new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
function show(){
	document.getElementById( 'tab3' ).style.display='';
}			*/
</script> 
<!--animation --> 

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
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/select2/select2.min.js"></script> 


<!-- END PAGE LEVEL PLUGINS --> 

<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/app.js" type="text/javascript"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/form-wizard.js"></script>

<!-- END PAGE LEVEL SCRIPTS --> 

<script src='http://connect.facebook.net/en_US/all.js' type="text/javascript"></script>

<script>


      jQuery(document).ready(function() {  
	  
	  
	  
	   
      $('.buttonsubmit').attr('disabled', 'disabled'); 
         App.init(); // initlayout and core plugins        
		 FormWizard.init();
		 $('.send-invite').click(function(){
		
		 	var	ids=[];
			var user_ids = '';
		 $('.facebook-invitation').each(function(){
		 	if(this.checked)
		 	
			 ids.push($(this).attr('id'));
			  user_ids = ids.join(',');	
			 	  
		 });
		
		  FB.init({appId: "<?php echo Yii::app()->params['fbid']; ?>", status: true,    cookie: true});
		  FB.ui({method: 'apprequests',
			 	message: 'Hai Friends',
			  	to: user_ids
				}, requestCallback);
				
				
		 function requestCallback(response) {
    		console.log(response);
		
	}
		 
			
		 	 return false;
		 });
		
		 $('.like').click(function(){
			var temp=$(this).find('i').attr('class');
			var u = $(this).attr('href');
			
			if(temp=='icon-heart-empty')
			{
				//$.get(u,function(data,status){ });
				$(this).find('i').removeAttr('class').attr('class', 'icon-heart heart-count');
			}
			else
			{
				u= u.replace('cincrease', 'cdecrease');
				//$.get(u,function(data,status){ });
			$(this).find('i').removeAttr('class').attr('class', 'icon-heart-empty');
			}
			var i=0;
		 	$('.heart-count').each(function(){ i++; });
		 	if(i==0)
		 	{
				$('#first-like').removeAttr('class').attr('class', 'icon-heart-empty');
				$('#second-like').removeAttr('class').attr('class', 'icon-heart-empty');
				$('#third-like').removeAttr('class').attr('class', 'icon-heart-empty');
				$('.buttonsubmit').attr('disabled', 'disabled'); 
			}
			 	
		 	if(i==1)
		 	{
				$('#first-like').removeAttr('class').attr('class', 'icon-heart');
				$('#second-like').removeAttr('class').attr('class', 'icon-heart-empty');
				$('#third-like').removeAttr('class').attr('class', 'icon-heart-empty');
				$('.buttonsubmit').attr('disabled', 'disabled'); 
			}
			if(i==2)
		 	{
				$('#first-like').removeAttr('class').attr('class', 'icon-heart');
				$('#second-like').removeAttr('class').attr('class', 'icon-heart');
				$('#third-like').removeAttr('class').attr('class', 'icon-heart-empty');
				$('.buttonsubmit').attr('disabled', 'disabled'); 
			}
			if(i==3)
		 	{
				$('#first-like').removeAttr('class').attr('class', 'icon-heart');
				$('#second-like').removeAttr('class').attr('class', 'icon-heart');
				$('#third-like').removeAttr('class').attr('class', 'icon-heart');
				$('.buttonsubmit').removeAttr('disabled');
			}
			
			return false;
		 });
	});	 
	
   </script> 

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>