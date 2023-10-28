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
				<ul>
					<li><a href="webdevelopment">Webdevelopment</a></li>
					<li><a href="social-media">Social Media</a></li>
					<li><a href="google-ads">Google ADS</a></li>
					<li><a href="review-management">Review Management</a></li>
					<li><a href="over-ons">Over Ons</a></li>
					<li><a href="contact-ons">Contact</a></li>
				</ul>
			</div>
			<div class="logo">
				<a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webwow.png" alt="Logo"></a>
			</div>
			<div class="social">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/envelope.svg" alt="Email Icon"></a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/phone-alt.svg" alt="Phone Icon"></a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp.svg" alt="Whatsapp Icon"></a>
			</div>
		</header>
    