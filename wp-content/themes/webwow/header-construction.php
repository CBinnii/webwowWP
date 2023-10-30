<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>WebWoW</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
		<?php wp_head(); ?>
		
		<style>
			html,
			body {
				margin: 0 auto;
				font-family: 'Roboto', sans-serif;
				height: 100%;
				background: #EEEEF4;
				font-weight: 100;
				user-select: none;
			}

			main {
				height: 100%;
				display: flex;
				margin: 0 20px;
				text-align: center;
				flex-direction: column;
				align-items: center;
				justify-content: center;
			}

			main h1 {
				font-size: 3em;
				font-weight: 100;
				color: #E23631;
				margin: 0;
				margin-top: 24px
			}

			main h2 {
				font-size: 1.5em;
				font-weight: 100;
				line-height: 1.5;
				margin-bottom: 0;
			}

			main h3 {
				font-size: 1.5em;
				font-weight: 100;
				margin-top: 0;
			}

			main a {
				font-size: 1.5em;
				font-weight: 300;
				color: #E23631;
				text-decoration: none;
			}

			footer {
				position: absolute;
				padding: 24px 0;
				bottom: 0;
				margin: 0px;
				font-weight: 300;
				width: 100%;
				display: flex;
				justify-content: center;
			}
			
			footer img {
				width: 200px;
				height: auto;
			}
		</style>
	</head>

	<body>