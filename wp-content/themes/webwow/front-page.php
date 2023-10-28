<?php 
	get_header();
?>

	<div class="swiper swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide bgDown" style='background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/1.jpg");'>
                <div>
                    <h1 class="title white">Webdevelopment</h1>

                    <div class="button">
                        <a href="webdevelopment.html" class="button-default primary">Show me more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style='background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/2.jpg")'>
                <div>
                    <h1 class="title purple">Social Media</h1>

                    <div class="button">
                        <a href="socialmedia.html" class="button-default purple">Show me more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style='background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/3.jpg")'>
                <div>
                    <h1 class="title orange">Google ADS</h1>

                    <div class="button">
                        <a href="googleADS.html" class="button-default orange">Show me more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style='background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/4.jpg")'>
                <div>
                    <h1 class="title blue">Review Management</h1>

                    <div class="button">
                        <a href="reviewmanagement.html" class="button-default blue">Show me more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

<?php
	get_footer();
?>