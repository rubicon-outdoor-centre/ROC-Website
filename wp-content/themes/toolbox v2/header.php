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

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700'>
<!--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic'>-->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="top">

		<header class="header" role="banner">

		<div class="social-links">
			<a class="facebook-link" href="http://www.facebook.com/pages/Rubicon-Outdoor-Centre/109253632438926"><img src="/wp-content/themes/toolbox/img/icons/facebook.png"></a>
			<a class="instagram-link" href="http://instagram.com/rubicon.oc"><img src="/wp-content/themes/toolbox/img/icons/instagram.png"></a>
		</div>

			<div class="container">

				<h1 class="site-title">
					<a href="<?php echo home_url( '/' ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
						<em><?php bloginfo( 'description' ); ?></em>
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
					<a href="#" id="openMenu"><i class="icon-font  icon-font--bars"></i></a>
				</nav>

				<script>

					$(function() {

						var openMenu = $('#openMenu'),
							primaryMenu = $('#primaryMenu');

						// open menu when clicking on 'open menu' button and close menu when clicking on 'close menu' button
						$(openMenu).on('click', function(e) {

							e.preventDefault();

							openMenu.toggleClass('open');
							primaryMenu.slideToggle();
						});

						// When the window is resized, check for size and show/hide menu accordingly
						$(window).resize( function() {

							if ($(window).width() <= 626) {

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
