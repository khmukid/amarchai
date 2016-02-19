<!-- SLIDER AREA -->
        
        <div class="pm-pulse-container" id="pm-pulse-container">
        
            <div id="pm-pulse-loader">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/js/pulse/img/ajax-loader.gif" alt="slider loading" />
            </div>
            
            <div id="pm-slider" class="pm-slider">
                
                <div id="pm-slider-progress-bar"></div>
            
                <ul class="pm-slides-container" id="pm_slides_container">
                    
                    <!-- FULL WIDTH slides -->
                    <li data-thumb="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/1a.jpg" class="pmslide_0"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide1.jpg" alt="img01" />
                    
                        <div class="pm-holder">
                            <div class="pm-caption">
                                  <h1><span>Welcome to আমার চাই ভেন্যু</span></h1>
                                  <span class="pm-caption-decription">
                                    Rabbit’s Hat Ltd. এর একটি উদ্যোগ
                                  </span>
                                  <a href="menus.html" class="pm-slide-btn animated">View our venues <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    
                    </li>
                    
                    <li data-thumb="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/2a.jpg" class="pmslide_1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide2.jpg" alt="img02" />
                        
                        <div class="pm-holder">
                            <div class="pm-caption">
                                  <h1><span>Venue Booking!</span></h1>
                                  <span class="pm-caption-decription">
                                    Browse our gallery and see how we make it easier!
                                  </span>
                                  <a href="gallery.html" class="pm-slide-btn animated">View our Gallery <i class="fa fa-chevron-right"></i></a>
                                  
                            </div>
                        </div>
                                            
                    </li>
                    
                    <li data-thumb="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/3a.jpg" class="pmslide_2"><img src="<?php echo Yii::app()->request->baseUrl; ?>/frontend-resources/img/slider/slide3.jpg" alt="img02" />
                        
                        <div class="pm-holder">
                            <div class="pm-caption">
                                  <h1><span>Book with us!</span></h1>
                                  <span class="pm-caption-decription">
                                    Book your next private party or event with আমার চাই ভেন্যু
                                  </span>
                                  <a href="#" class="pm-slide-btn animated">Book Your Event Now <i class="fa fa-chevron-right"></i></a>
                                  
                            </div>
                        </div>
                                            
                    </li>
                                    
                </ul>
               
            </div>
        
        </div>
        
<!-- SLIDER AREA end -->

<div class="container">
    
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

</div>