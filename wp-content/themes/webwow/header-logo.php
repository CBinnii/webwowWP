<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>WebWoW - <?php echo get_the_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <!-- Link Swiper's CSS -->
        <?php wp_head(); ?>
        <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?v=1.4">
    </head>

    <body>
        <header class="header">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webwow.png" alt="Logo"></a>
            </div>
        </header>