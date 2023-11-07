<?php 
/**
 * Template Name: Social Media
 *
 **/
	get_header();
?>
    
	<section class="main">
		<div class="banner-default">
			<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title(); ?>">
		</div>
		
		<div class="internal-page">
			<div class="container">
				<div class="internal-page-text">
					<h1 class="title <?php echo get_field('color'); ?> text-center"><?php echo get_the_title(); ?></h1>
		
					<?php echo apply_filters('the_content', $post->post_content); ?>
					
					<?php if( have_rows('works') ): ?>
						<div class="row works">
							<?php 
								$title = get_field('title_service');

								if (!empty($title)) :
							?>
								<h3 class="subtitle black text-center"><?php echo get_field('title_service') ?></h3>
							<?php endif; ?>

							<?php
								while( have_rows('works') ) : the_row();

								$image = get_sub_field('image');
								$link = get_sub_field('link');
								$title = get_sub_field('title');
							?>
								<div class="col-md-6">
									<div class="our-work <?php if($image): echo 'background'; endif;?>">
										<?php if($image):?>
											<div class="image-opacity" style="background-image: url('<?php echo $image ?>')"></div>
										<?php endif; ?>
										<?php if($link):?> <a href="<?php echo $link ?>" target="_blank"> <?php endif;?>
											<p><?php echo $title ?></p>
										<?php if($link):?> </a> <?php endif;?>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php the_field('more_content'); ?>
					
					<div class="button">
						<a href="/contact-ons" class="button-default <?php echo get_field('color'); ?>">Contact Ons</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	get_footer();
?>