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

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="top" class="container">

		<header class="header" role="banner">

			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<nav class="primary-nav" role="navigation">
				<?php

					$args = array(
								'theme_location' => 'primary',
								'container' => false,
								'items_wrap' => '<ul>%3$s</ul>'
							);

					wp_nav_menu( $args );

				?>
			</nav>

		</header>

		<div class="content" role="main">
