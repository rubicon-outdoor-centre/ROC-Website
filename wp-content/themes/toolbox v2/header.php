<?php ?>
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

?></title>

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic'>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="favicons/manifest.json">
<link rel="shortcut icon" href="favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#6eb43f">
<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
<meta name="msapplication-config" content="favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="top">

		<header class="header" role="banner">

			<div class="container">

				<h1 class="site-title">
					<a href="<?php echo home_url( '/' ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
						<em><?php //bloginfo( 'description' ); ?></em>
					</a>
				</h1>

				<nav class="primary-nav" role="navigation">
					<?php

						$args = array(
									'theme_location' => 'primary',
									'container' => false,
									'items_wrap' => '<ul id="primaryMenu">%3$s</ul>'
								);

						wp_nav_menu( $args );

					?>
					<a href="#" id="openMenu"><i class="icon-font"></i></a>
				</nav>

				<script>

					$(function() {

						var openMenu = $('#openMenu'),
							primaryMenu = $('#primaryMenu'),
							menuStatus = 'closed';

						// open menu when clicking on 'open menu' button and close menu when clicking on 'close menu' button
						$(openMenu).on('click', function(e) {

							e.preventDefault();

							if (menuStatus === 'closed') {
								openMenu.addClass('open');
								primaryMenu.slideDown();
								menuStatus = 'open';
							}

							else if (menuStatus === 'open') {
								openMenu.removeClass('open');
								primaryMenu.slideUp();
								menuStatus = 'closed';
							}
						});

						// When the window is resized, check for size and show/hide menu accordingly
						$(window).resize( function() {

							if ($(window).width() <= 626 && menuStatus === 'closed') {

								primaryMenu.hide();
							}

							else if ($(window).width() > 626) {

								primaryMenu.show();
							}

						}).trigger('resize');
					});
				</script>

			</div>
		</header>

		<div class="content" role="main">
