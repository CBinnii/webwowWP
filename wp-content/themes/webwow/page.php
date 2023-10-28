<?php 
	get_header();
?>
    
    <section class="main">
        <div class="banner-default">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title(); ?>">
        </div>
         
        <div class="internal-page">
            <div class="container">
                <div class="internal-page-text">
                    <h1 class="title orange text-center"><?php echo get_the_title(); ?></h1>
        
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();
?>