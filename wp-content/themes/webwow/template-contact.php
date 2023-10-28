<?php 
/**
 * Template Name: Contact Ons
 *
 **/
	get_header();
?>
	<section class="main">
		<div class="contact-page">
			<div class="container">
				<h1 class="title black text-left"><?php echo get_the_title(); ?></h1>

				<div class="row">
					<div class="col-12 col-md-6">
						<div class="contact-list">
							<ul>
								<li>
									<h4 class="col-12 col-md-6">TELEFOONNUMMER</h4>
									<p class="col-12 col-md-6">(+31) 06 46 175 220</p>
								</li>
								<li>
									<h4 class="col-12 col-md-6">EMAIL</h4>
									<p class="col-12 col-md-6">info@webwow.nl</p>
								</li>
								<li>
									<h4>WHATSAPP</h4>
									<p class="col-12 col-md-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp-color.svg" alt="Whatsapp Icon" width="37" height="37"></p>
								</li>
								<li>
									<h4 class="col-12 col-md-6">SOCIAL</h4>
									
									<div class="col-12 col-md-6">
										<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/facebook.svg" alt="Facebook Icon" width="37" height="37"></a>
										<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/instagram.svg" alt="Instagram Icon" width="37" height="37"></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="contact-logo">
							<ul>
								<li>
									<a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webwow.png" alt="Logo"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
	get_footer();
?>