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