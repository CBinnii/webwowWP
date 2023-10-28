<?php 
/**
 * Template Name: Review Management
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
					
					<div class="row works">
						<div class="col-md-6">
							<div class="our-work">
								<p>CLICK - LINK TO THE WEBSITE</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="our-work">
								<p>CLICK - LINK TO THE WEBSITE</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="our-work">
								<p>CLICK - LINK TO THE WEBSITE</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="our-work">
								<p>CLICK - LINK TO THE WEBSITE</p>
							</div>
						</div>
					</div>

					<p>Individuals, businesses, or organizations that hire digital marketing agencies or professionals to manage and implement their online marketing efforts. These clients seek assistance in utilizing digital channels and platforms to achieve various marketing objectives, such as increasing brand awareness, driving website traffic, generating leads, and boosting sales.</p>
					
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