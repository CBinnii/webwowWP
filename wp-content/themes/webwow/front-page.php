<?php 
	get_header();
?>

    <?php if( have_rows('slider') ): ?>
        <div class="swiper swiper-container mySwiper">
            <div class="swiper-wrapper">
                <?php
                    while( have_rows('slider') ) : the_row();

                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                    $title = get_sub_field('title');
                    $button = get_sub_field('button');
                    $color = get_sub_field('color');
                ?>
                    <div class="swiper-slide" style='background-image: url("<?php echo $image; ?>");'>
                        <div>
                            <h1 class="title <?php echo $color; ?>"><?php echo $title; ?></h1>
        
                            <div class="button">
                                <a href="<?php echo $link; ?>" class="button-default primary"><?php echo $button; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    <?php endif; ?>

<?php
	get_footer();
?>