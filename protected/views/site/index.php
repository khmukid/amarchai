<!-- SLIDER AREA -->

<div class="pm-pulse-container" id="pm-pulse-container">

    <div id="pm-pulse-loader">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/pulse/img/ajax-loader.gif" alt="slider loading" />
    </div>

    <div id="pm-slider" class="pm-slider">

        <div id="pm-slider-progress-bar"></div>

        <ul class="pm-slides-container" id="pm_slides_container">

            <!-- FULL WIDTH slides -->
            <li data-thumb="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide_1_preview.jpg" class="pmslide_0"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide_1.jpg" alt="img01" />

                <div class="pm-holder">
                    <div class="pm-caption">
                        <h1><span>Welcome to আমার চাই ভেন্যু</span></h1>
                        <span class="pm-caption-decription">
                            Rabbit’s Hat Ltd. এর একটি উদ্যোগ
                        </span>
                        <!-- Search widget -->
                        <div class="pm-home-slider-div">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" id="pm-home-search-input" placeholder="Search your venue...">
                                <span class="input-group-btn">
                                    <button class="btn pm-rounded-search-btn pm-primary" type="button">Search!</button>
                                </span>
                            </div>
                        </div>
                        <!-- Search widget end -->
                    </div>
                </div>

            </li>

            <li data-thumb="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide_2_preview.jpg" class="pmslide_1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide_2.jpg" alt="img02" />

                <div class="pm-holder">
                    <div class="pm-caption">
                        <h1><span>Venue Booking!</span></h1>
                        <span class="pm-caption-decription">
                            Browse our gallery and see how we make it easier!
                        </span>
                        <!-- Search widget -->
                        <div class="pm-home-slider-div">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" id="pm-home-search-input" placeholder="Search your venue...">
                                <span class="input-group-btn">
                                    <button class="btn pm-rounded-search-btn pm-primary" type="button">Search!</button>
                                </span>
                            </div>
                        </div>
                        <!-- Search widget end -->
                    </div>
                </div>

            </li>

            <li data-thumb="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide_3_preview.jpg" class="pmslide_2"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide_3.jpg" alt="img02" />

                <div class="pm-holder">
                    <div class="pm-caption">
                        <h1><span>Book with us!</span></h1>
                        <span class="pm-caption-decription">
                            Book your next private party or event with আমার চাই ভেন্যু
                        </span>
                        <!-- Search widget -->
                        <div class="pm-home-slider-div">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" id="pm-home-search-input" placeholder="Search your venue...">
                                <span class="input-group-btn">
                                    <button class="btn pm-rounded-search-btn pm-primary" type="button">Search!</button>
                                </span>
                            </div>
                        </div>
                        <!-- Search widget end -->
                    </div>
                </div>

            </li>

        </ul>

    </div>

</div>

<!-- SLIDER AREA end -->

<!-- BODY CONTENT starts here -->
                
        <!-- Gallery filter system -->
        <div class="container pm-containerPadding-top-80">
        	<div class="row">
            
                <div class="col-lg-12 pm-containerPadding-bottom-40">
                	
                    <div class="pm-featured-header-container">
                    
                    	<!-- Featured panel header -->
                        <div class="pm-featured-header-title-container news">
                        	<p class="pm-featured-header-title">Latest Venue In Front Of Your Eye </p>
                            <p class="pm-featured-header-message">See what venue wait for you across the city</p>
                        </div>
                        <!-- Featured panel header end -->
                        
                        <!-- Filter menu -->
<!--                        <div class="pm-isotope-filter-container">
                        	<ul class="pm-isotope-filter-system">
                            	<li class="pm-isotope-filter-system-expand">Expand <i class="fa fa-angle-down"></i></li>
                            	<li><a href="events.html#" class="current">Past Events</a></li>
                                <li><a href="events.html">Browse Events</a></li>
                            </ul>
                        </div>-->
                        <!-- Filter menu end -->
                    
                    </div>
                    
                </div><!-- /.col-lg-12 -->
                
                
                
                <!-- event item -->
                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                
                    <div class="pm-event-item-container">
                    	<div class="pm-event-item-img-container" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/venue/wedding-home_1.jpg);">
                        	<div class="pm-event-item-date">
                            	<p class="pm-event-item-month">Offer Price</p>
                                <p class="pm-event-item-day">$500</p>
                            </div>
                        </div>
                        
                        <div class="pm-event-item-desc">
                        	<p class="pm-event-item-title">Wedding</p>
                            <div class="pm-event-item-divider"></div>
                            <p class="pm-event-item-excerpt">Nam pharetra diam eu dolor vestibulum volutpat. Aliquam non turpis non leo euismod sollicitudin. Pellentesque eget <a href="#">{...}</a> </p>
                            <div class="pm-event-item-divider"></div>
                            <ul class="pm-event-item-btns">
                            	<li><a href="#" class="pm-rounded-btn small pm-primary">more info</a></li>
                                <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;fan page</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div><!-- /.col-lg-4 -->
                <!-- /event item -->
                
                <!-- event item -->
                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                
                    <div class="pm-event-item-container">
                    	<div class="pm-event-item-img-container" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/venue/birthday-home-1.jpg);">
                        	<div class="pm-event-item-date">
                            	<p class="pm-event-item-month">Offer Price</p>
                                <p class="pm-event-item-day">$1300</p>
                            </div>
                        </div>
                        
                        <div class="pm-event-item-desc">
                        	<p class="pm-event-item-title">Birthday</p>
                            <div class="pm-event-item-divider"></div>
                            <p class="pm-event-item-excerpt">Nam pharetra diam eu dolor vestibulum volutpat. Aliquam non turpis non leo euismod sollicitudin. Pellentesque eget <a href="#">{...}</a> </p>
                            <div class="pm-event-item-divider"></div>
                            <ul class="pm-event-item-btns">
                            	<li><a href="#" class="pm-rounded-btn small pm-primary">more info</a></li>
                                <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;fan page</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div><!-- /.col-lg-4 -->
                <!-- /event item -->
                
                <!-- event item -->
                <div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
                
                    <div class="pm-event-item-container">
                    	<div class="pm-event-item-img-container" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/venue/conference-home-1.jpg);">
                        	<div class="pm-event-item-date">
                            	<p class="pm-event-item-month">Offer Price</p>
                                <p class="pm-event-item-day">$1500</p>
                            </div>
                        </div>
                        
                        <div class="pm-event-item-desc">
                        	<p class="pm-event-item-title">Conference</p>
                            <div class="pm-event-item-divider"></div>
                            <p class="pm-event-item-excerpt">Nam pharetra diam eu dolor vestibulum volutpat. Aliquam non turpis non leo euismod sollicitudin. Pellentesque eget <a href="#">{...}</a> </p>
                            <div class="pm-event-item-divider"></div>
                            <ul class="pm-event-item-btns">
                            	<li><a href="#" class="pm-rounded-btn small pm-primary">more info</a></li>
                                <li><a href="#" class="pm-rounded-btn small pm-secondary"><i class="fa fa-facebook"></i> &nbsp;fan page</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div><!-- /.col-lg-4 -->
                <!-- /event item -->
                                
                
            </div>
        </div>
        <!-- Gallery filter system end -->
        
        <!-- Load more -->
        <div class="container pm-containerPadding-bottom-80">
        	<div class="row">
            
            	<div class="col-lg-12 pm-center">
                	
                    <p class="pm-isotope-page-count">Viewing 3 of 8</p>
                    <a href="events.html#" class="pm-rounded-btn pm-primary">Load More</a>
                    
                </div>
            
            </div>
        </div>
        <!-- Load more end -->
        
        <!-- BODY CONTENT end -->