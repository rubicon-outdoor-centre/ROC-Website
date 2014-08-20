<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">
			<div class="banner">
			</div>
			<div class="container">

				<article id="post-0" class="post error404 not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( "Sorry, we can't find that page", 'toolbox' ); ?></h1>
					</header>
				</article><!-- #post-0 -->

			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
