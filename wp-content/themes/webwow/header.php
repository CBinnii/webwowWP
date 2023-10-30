<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Webwow - <?php echo get_the_title(); ?></title>
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
        <?php wp_head(); ?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

		<script type="text/javascript">var ua = window.navigator.userAgent;
			window.isIE = /MSIE|Trident/.test(ua); if (isIE) {
				document.documentElement.classList.add('ie');
			}
		</script>

		<style>
			.ie .swiper-container {
				height: auto;
			}

			.ie .swiper-wrapper {
				display: block !important;
				height: auto;
			}

			.ie .swiper-
			
			slide {
				height: 800px;
			}
		</style>
	</head>
	<body>
		<header class="header">
			<div class="menu">
				<button class="navbar-toggler">
					<div class="menu-button" id="menu-button" onclick="menuMobile()">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
					</div>
				</button>
				<div class="navbar-menu">
					<ul class="collapse navbar-collapse" id="navbar-collapse">
						<li><a href="webdevelopment">Webdevelopment</a></li>
						<li><a href="social-media">Social Media</a></li>
						<li><a href="google-ads">Google ADS</a></li>
						<li><a href="review-management">Review Management</a></li>
						<li><a href="over-ons">Over Ons</a></li>
						<li><a href="contact-ons">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="logo">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webwow.png" alt="Logo"></a>
			</div>
			<div class="social">
				<?php 
					$whatsapp = get_field('whatsapp', 'option');
					$phone = get_field('call', 'option');
					$email = get_field('email', 'option');
				?>
				<?php if( !empty($email) ): ?>
					<a href="<?php echo $email; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/envelope.svg" alt="Email Icon"></a>
				<?php endif; ?>
				<?php if( !empty($phone) ): ?>
					<a href="<?php echo $phone; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/phone-alt.svg" alt="Phone Icon"></a>
				<?php endif; ?>
				<?php if( !empty($whatsapp) ): ?>
					<a href="<?php echo $whatsapp; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp.svg" alt="Whatsapp Icon"></a>
				<?php endif; ?>
			</div>
		</header>
    