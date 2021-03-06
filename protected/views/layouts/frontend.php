<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://projects.pulsarmedia.ca/vienna/favicon.png">

    <title>AmarChai-The ultimate choice for your event.</title>
    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- main css -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/main.css" rel="stylesheet">
    
    <!-- mobile css -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/responsive.css" rel="stylesheet">
    
    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/font-awesome.min.css" />
    <!-- FontAwesome Support -->
    
    <!-- Btns -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/btn.css" />
    <!-- Btns -->
    
    <!-- Superfish menu -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/superfish/superfish.css" />
    <!-- Superfish menu -->
    
    <!-- Theme Color selector -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/theme-color-selector/theme-color-selector.css" type="text/css" rel="stylesheet">
    <!-- Theme Color selector -->
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/owl-carousel/owl.carousel.css" />
    <!-- Owl Carousel -->
    
    <!-- Twitter feed -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/twitterfeed.css" />
    <!-- Twitter feed -->
    
    <!-- Typicons -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/typicons/typicons.min.css" />
    <!-- Typicons -->
    
    <!-- WOW animations -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/wow/css/libs/animate.css" />
    <!-- WOW animations -->
    
    <!-- Forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/forms.css" />
    <!-- Forms -->
    
    <!-- Flickr feed -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/css/flickrfeed.css" />
    <!-- Flickr feed -->
    
    <!-- Pulse Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/pulse/pm-slider.css" />
    <!-- Pulse Slider -->
        
    <!-- Development Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
    
  </head>

  <body>
  
  <!-- Mobile Menu -->
  <div class="pm-mobile-menu-overlay" id="pm-mobile-menu-overlay"></div>
  
<!--  <div class="pm-mobile-global-menu">
                	
    <div class="pm-mobile-global-menu-logo">
        <a href="index.html"><img src="" alt="Vienna Restaurant"></a> 
        <img src="../../../frontend-resources/img/logo-final.jpg" alt=""/>
    </div>
    
    <div class="pm-mobile-global-menu-search">
    	<form action="#" method="post">
            <input name="" type="text" class="pm-search-field-mobile" placeholder="Type Keywords...">
        </form>
    </div>
    
    <ul class="sf-menu pm-nav">
                        
        <li><a href="index.html">Home</a></li>
        <li>
            <a href="index.html#">Menus</a>
            <ul>
                <li><a href="menus.html">Breakfast</a></li>
                <li><a href="menus.html">Lunch</a></li>
                <li><a href="menus.html">Dinner</a></li>
            </ul>
        </li>
        <li><a href="gallery.html">Gallery</a></li>
        <li>
            <a href="index.html#">Events</a>
            <ul>
                <li><a href="book-an-event.html">Book an Event</a></li>
                <li><a href="events.html">Browse Events</a></li>
                <li><a href="#">Social Events</a></li>
            </ul>
        </li>
        <li>
            <a href="index.html#">News</a>
            <ul>
                <li><a href="news.html">News Full Width</a></li>
                <li><a href="news-with-sidebar.html">News with Sidebar</a></li>
            </ul>
        </li>
        <li>
            <a href="index.html#">Store</a>
            <ul>
            	<li><a href="store.html">Browse Store</a></li>
                <li><a href="cart.html">View Cart</a></li>
                <li><a href="#">Customer Login</a></li>
            </ul>
        </li>
        <li><a href="catering.html">Catering</a></li>
    
    </ul>
        
  </div> /pm-mobile-nav-overlay -->
  
  <!-- Theme color selector -->
  <div id="pm_theme_color_selector">
<!--        <a class="pm_theme_color_selector_btn"><i class="typcn typcn-cog"></i></a>-->
        <p class="pm_theme_color_selector_title">Style Sampler</p>

        <div class="pm_theme_color_selector_container">
        	<p>Layout Style</p>
        	<select name="pm_theme_color_selector_mode" id="pm_theme_color_selector_mode">
        	  <option value="pm-full-mode" selected>Fullscreen</option>
              <option value="pm-boxed-mode">Boxed Mode</option>
        	</select>
        </div>
        <div class="pm_theme_color_selector_container">
        	<p>Patterns for Boxed Mode</p>
        	<ul class="pm_theme_img_selector" id="pm_theme_pattern_selector">
                <li><a href="index.html#" id="pattern1"><img src="frontend-resources/img/boxed-patterns/pattern1.png" alt="pattern1"></a></li>
                <li><a href="index.html#" id="pattern2"><img src="frontend-resources/img/boxed-patterns/pattern2.png" alt="pattern2"></a></li>
                <li><a href="index.html#" id="pattern3"><img src="frontend-resources/img/boxed-patterns/pattern3.png" alt="pattern3"></a></li>
                <li><a href="index.html#" id="pattern4"><img src="frontend-resources/img/boxed-patterns/pattern4.png" alt="pattern4"></a></li>
                <li><a href="index.html#" id="pattern5"><img src="frontend-resources/img/boxed-patterns/pattern5.png" alt="pattern5"></a></li>
                <li><a href="index.html#" id="pattern6"><img src="frontend-resources/img/boxed-patterns/pattern6.png" alt="pattern6"></a></li>
            </ul>
        </div>
        
        <div class="pm_theme_color_selector_container">
        	<p>Backgrounds for Boxed Mode</p>
        	<ul class="pm_theme_img_selector" id="pm_theme_background_selector">
                <li><a href="index.html#" id="1a"><img src="frontend-resources/img/boxed-bgs/1.jpg" alt="bg1"></a></li>
                <li><a href="index.html#" id="2a"><img src="frontend-resources/img/boxed-bgs/2.jpg" alt="bg2"></a></li>
                <li><a href="index.html#" id="3a"><img src="frontend-resources/img/boxed-bgs/3.jpg" alt="bg3"></a></li>
                <li><a href="index.html#" id="4a"><img src="frontend-resources/img/boxed-bgs/4.jpg" alt="bg4"></a></li>
                <li><a href="index.html#" id="5a"><img src="frontend-resources/img/boxed-bgs/5.jpg" alt="bg5"></a></li>
            </ul>
        </div>
   
    </div>
    <!-- Theme color selector -->
	<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->
    
    	<!-- Search overlay -->
        <div class="pm-search-container" id="pm-search-container">
        	
            <div class="container">
            	<div class="row">
                	
                    <div class="col-lg-10 col-md-10 col-sm-10">
                    	<form action="#" method="post">
                        	<input name="pm_search_field" type="text" class="pm-search-field-header" placeholder="Type Keywords...">
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                    	<ul class="pm-search-controls">
                        	<li><a href="l#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#" id="pm-search-collapse"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- Search overlay end -->
    
    	<!-- Sub-header -->
    	<div class="pm-sub-menu-container">
        
        	<div class="container">
            
            	<div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    	
                        <div class="pm-header-logo-container">
                    		<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/logo-final.png" class="img-responsive pm-header-logo" alt="Amar Chai"></a> 
                        </div>
                        
                        <div class="pm-header-mobile-btn-container">
                            <button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-mobile-menu-trigger" ><i class="fa fa-bars"></i></button>
                        </div>
                    
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                    	<div class="pm-sub-menu-book-event">
                        		<a href="#l"><i class="fa fa-users"></i> Organizing an event?</a>
                        </div>
                
                    </div>
                    
                     <div class="col-lg-3 col-md-3 col-sm-6 visible-lg visible-md pm-book-event">
                    	<div class="pm-sub-menu-book-event">
                            <a href="#"><i class="fa fa-search"></i> Search for Venues</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-6 visible-lg visible-md pm-book-event">
                    	<div class="pm-sub-menu-book-event">
                        	<a href="#l"><i class="fa fa-university"></i> Have a venue? </a>
                        </div>
                    </div>
                    
                   
                    <div class="col-lg-2 col-md-3 col-sm-6 visible-lg visible-md pm-book-event pull-right">
                       <div class="pm-sub-menu-book-event">
                           <a href="#"><i class="fa fa-sign-in"></i> Venue Log In</a>
                       </div>
                    </div>

                </div>
            
            </div>
            
        </div>
        <!-- /Sub-header -->
    
    	<!-- Main navigation -->
        <header>
                
        	<div class="container">
            
            	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-10 pm-main-menu">
                                        
                    	<nav class="navbar-collapse collapse">
                        
                        	<ul class="sf-menu pm-nav">
                        
                                <li><a href="index.php?r=site/index">Home</a></li>
                                
                                <li>
                                    <a href="#">Venues</a>
                                    <ul>
<!--                                        <li><a href="menus.html">Find Venues</a></li>-->
                                        <li><a href="#">Browse Venues</a></li>
                                        <li><a href="#">Compare Venues</a></li>
                                        <li><a href="#">Ask a Venue Expert </a></li>
                                        <li><a href="#">Featured Venue</a></li>                     
                                    </ul>
                                </li>
                               
                                <li>
                                	<a href="#">Register Venue </a>
                                </li>
                                
                                <li>
                                    <a href="index.php?r=site/bestDeal">Best Deals!</a>
                                </li>
                                <li>
                                	<a href="index.php?r=site/contact">Contact Us</a>
                                    <ul>
                                        <li><a href="index.php?r=site/contact">Find Us</a></li>
                                        <li><a href="#">Social Media</a></li>
                                        <li><a href="index.php?r=site/message">Leave a Message</a></li>
                                        <li><a href="#">Why Amar Chai Venue?</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.php?r=site/about">About Us</a>
                                </li>
                                <li><a href="#">Terms & Conditions</a>
                                    <ul>
                                        <li><a href="index.php?r=site/howItWork">How It Works</a></li>
                                        <li><a href="#">Our Rating Policy</a></li>
                                        <li><a href="index.php?r=site/privacy">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                
                            
                            </ul>
                        
                        </nav>  
                                              
                    </div>
                    
                </div>
            
            </div>
                    
        </header>
        <!-- /Main navigation -->
         
        <!-- BODY CONTENT starts here -->

        <?php echo $content; ?>

        <!-- BODY CONTENT end -->
        
        <div class="pm-fat-footer">
        	
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/logo-final.png" class="img-responsive" alt="Vienna Restaurant"> 
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                      <h6>Recent Posts</h6>
                      <ul class="pm-recent-blog-posts">
                            <!-- Post -->
                            <li>
                                <div class="pm-recent-blog-post-thumb" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/posts/p1.jpg);"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="#">Picking the best venue for your next party</a>
                                    <p class="pm-comment-count"><i class="fa fa-comment"></i> 8 Comments</p>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div class="pm-recent-blog-post-thumb" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/posts/p2.jpg);"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="#">The secrets to creating the perfect Italian dish</a>
                                    <p class="pm-comment-count"><i class="fa fa-comment"></i> 12 Comments</p>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div class="pm-recent-blog-post-thumb" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/posts/p3.jpg);"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="#">The life and culture of Dhaka, Bangladesh</a>
                                    <p class="pm-comment-count"><i class="fa fa-comment"></i> 4 Comments</p>
                                </div>
                            </li>
                            <!-- Post end -->
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                      <h6>Flickr Gallery</h6>
                      
                      <div class="flickr_badge_wrapper clearfix">
                      
                      	<div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/1.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="l#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/2.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/3.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/4.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/5.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/6.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/7.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/8.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/9.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/10.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/11.jpg">
                            </a>
                        </div>
                        
                        <div class="flickr_badge_image">
                            <a href="l#">
                            	<span></span>
                                <i class="fa fa-search-plus"></i>
                            	<img width="63" height="63" title="" alt="A photo on Flickr" src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/flickr/12.jpg">
                            </a>
                        </div>
                        
                      
                      </div>
                      
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pm-widget-footer">
                      <h6>Next Event</h6>        
                      
                      <div class="pm-event-widget-container">
                      	
                        <div class="pm-event-widget-img" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/events/1.jpg);">
                        	<div class="pm-event-widget-date-container">
                            	<p class="pm-event-widget-month">JUL</p>
                                <p class="pm-event-widget-day">28</p>
                            </div>
                        </div>
                        
                        <div class="pm-event-widget-desc">
                        	
                            <p class="pm-event-widget-desc-title">Best Package of the year</p>
                            
                            <p class="pm-event-widget-desc-excerpt">Our New Year’s Eve party features five venues of entertainment, delicious food with international food stations, a live band and amazing DJ’s. There will be something exciting going on in each venue throughout the evening. We will be announcing our theme for 2016 shortly.
                            
                        </div>
                        
                        <ul class="pm-event-widget-btns">
                        	<li><a href="#" class="pm-rounded-btn small pm-primary">More Info</a></li>
                            <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;Fan page</a></li>
                        </ul>
                        
                      </div>
                                     
                    </div>
                </div>	
            </div>
            
        </div>
        
        <footer>
        
        	<div class="container">
                <div class="row">
                    
                   <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="pm-footer-social-info-container">
                            <h6>Follow us and stay connected!</h6>
                            <ul class="pm-footer-social-icons">
                                <li title="Twitter" class="pm_tip_static_top"><a href="#"><i class="fa fa-twitter tw"></i></a></li>
                                <li title="Facebook" class="pm_tip_static_top"><a href="#"><i class="fa fa-facebook fb"></i></a></li>
                                <li title="Google Plus" class="pm_tip_static_top"><a href="#"><i class="fa fa-google-plus gp"></i></a></li>
                                <li title="Linkedin" class="pm_tip_static_top"><a href="#"><i class="fa fa-linkedin linked"></i></a></li>
                                <li title="YouTube" class="pm_tip_static_top"><a href="#"><i class="fa fa-youtube yt"></i></a></li>
                            </ul>
                        </div>
                        
                   </div>
                   
                   <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="pm-footer-subscribe-container">
                            <h6>Subscribe to our newsletter</h6>
                            
                            <div class="pm-footer-subscribe-form-container">
                                <form action="#" method="post" id="pm-footer-subscribe">
                                    <input class="pm-footer-subscribe-field" type="text" placeholder="Email Address" value="" />
                                    <div class="pm-footer-subscribe-submit-btn">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                   </div>
                    
                </div>
            </div>	

                
        </footer>
                
        <div class="pm-footer-copyright">
        	
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 pm-footer-copyright-col">
                        <p>©2016 আমার চাই. Produced by <a href="#" target="_blank">আমার চাই</a></p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 pm-footer-navigation-col">
                        <ul class="pm-footer-navigation" id="pm-footer-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="menus.html">Menus</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="events.html">Browse Events</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="store.html">Store</a></li>
                            <li><a href="catering.html">Catering</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    
    </div><!-- /pm_layout-wrapper -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/jquery.viewport.mini.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/bootstrap3/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/modernizr.custom.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/main.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/jquery.tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/jquery.hoverPanel.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/superfish/superfish.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/superfish/hoverIntent.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/tinynav.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/stellar/jquery.stellar.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/countdown/countdown.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/theme-color-selector/theme-color-selector.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/wow/wow.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/pulse/jquery.PMSlider.js"></script>
        
    <p id="back-top" class="visible-lg visible-md visible-sm"> </p>
    
  </body>
</html>
