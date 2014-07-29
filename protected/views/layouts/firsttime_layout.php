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
      <li class="dropdown user hidden-mobi"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img class="avatar-user img-responsive"  alt="" src="<?php      $id=Yii::app()->user->id;
   		$a=UserDetails::model()->find("user_id=$id");
   		      $fromurl=strstr($a->avatar, '://', true);
                            if($fromurl=='http' || $fromurl=='https')
                            echo $a->avatar; 
                            else
                            echo Yii::app()->baseUrl.'/profiles/'.$a->avatar;
      
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
          <li class="dropdown"> <a class="dropdown-toggle caption" data-close-others="true"  data-toggle="dropdown" href="#"><i class="icon-stats"></i>Going Viral</a>
            <ul class="dropdown-menu extended inbox topmem">
              <li class="margintop marginbot">
                <div class="rowb">
                  <div class="col-sm-6b"> <a href="#"> <span class="top-mem"><i class="icon-stats"></i>Going Viral</span> <span class="desp">Most Recently liked, shared, commented and followed</span> </a> </div>
                  <div class="col-sm-6b"> <a href="#"> <span class="top-mem"><i class="icon-star"></i>TOP MEMBER</span> <span class="desp">Find out who are the most beautiful People on our Planet</span> </a> </div>
                  <div class="col-sm-6b"> <a href="#"> <span class="top-mem"><i class="icon-heart"></i>Following</span> <span class="desp">See how the people who you are following are performing </span> </a> </div>
                  <div class="col-sm-6b"> <a href="#"> <span class="top-mem"><i class="icon-people"></i>New Member</span> <span class="desp">Walecome our Fresh Faces with a big like </span> </a> </div>
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
                  <div class="gender-lo"> <a href="#"> <span class="badge"><i class="icon-female" aria-hidden="true"></i></span> </a> <a href="#"> <span class="badge"><i class="icon-male" aria-hidden="true"></i></span> </a></div>
                  <div class="country-lo"><span class="text">From</span><i data-toggle="modal" href="#country-list" class="icon-map-marker"></i>
                    <div class="btn-group">
                      <button class="btn btn-default" type="button">Germany</button>
                      <button data-close-others="false" data-delay="1000" data-hover="dropdown" data-toggle="dropdown" class="btn btn-defaultb dropdown-toggle part-right" type="button"><i class="icon-caret-down"></i></button>
                      <ul data-delay="1000" role="menu" class="dropdown-menu">
                        <li class="row1">
                          <div class="gey">
                            <ul>
                              <li><a href="#">Countries Nearby...</a></li>
                            </ul>
                          </div>
                          <div class="white">
                            <ul>
                              <li><a href="#">Belgium</a></li>
                              <li><a href="#">Denmark</a></li>
                              <li><a href="#">France</a></li>
                              <li><a href="#">Luxembourg</a></li>
                              <li><a href="#">Netherlands</a></li>
                              <li><a href="#">Switzerland</a></li>
                              <li>&nbsp;</li>
                              <li><a class="green" data-toggle="modal" href="#country-list">Browse all Countries</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="row2">
                          <div class="gey">
                            <ul>
                              <li><a href="#">Currently Viewing</a></li>
                            </ul>
                          </div>
                          <div class="white">
                            <ul>
                              <li><a href="#">Germany</a></li>
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
                    <div class="addbut"> <span class="btn white fileinput-button"> <span>Choose files</span> 
                      <!-- The file input field used as target for the file upload widget -->
                      <input id="fileupload" type="file" name="files[]" multiple>
                      </span> </div>
                  </div>
                  <div id="dropzone" class="grab-up"> <a href="#"> <span class="badge"><i class="icon-pictures" aria-hidden="true"></i></span> Drag n' Drop your Photos </a> </div>
                  <div class="fac-up"> <a href="#"> <i class="icon-facebook-sign" aria-hidden="true"></i> <span>Or select an image from your Facebook albums</span> </a> </div>
                </div>
              </li>
              <li>
                <div class="rowb">add process and info in here</div>
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
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --> 
<script>



/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script> 

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
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-1.10.2.min.js" type="text/javascript"></script> 
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
        
		 
      });
   </script> 

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>