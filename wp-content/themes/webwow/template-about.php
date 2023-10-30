<?php 
/**
 * Template Name: Over Ons
 *
 **/
	get_header();
?>
	<section class="main">
		<div class="about-page">
			<div class="container">
				<div class="about-page-text">
					<h1 class="title pink text-center"><?php echo get_the_title(); ?></h1>
		
					<?php echo apply_filters('the_content', $post->post_content); ?>
					
					<div class="button">
						<a href="/contact-ons" class="button-default pink">Contact Ons</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	get_footer();
?>