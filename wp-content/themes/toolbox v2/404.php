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
			<div class="banner"></div>

			<div class="grid container">

				<div class="grid__col--100">

					<div class="content-section">

						<article id="post-0" class="post error404 not-found">
							<header class="entry-header">
								<h2 class="entry-title"><?php _e( "Sorry, we can't find that page", 'toolbox' ); ?></h2>
							</header>
							<div class="entry-content">
								<p>Try searching for what you are after:</p>
								<?php get_search_form(); ?>
							</div>
						</article><!-- #post-0 -->

					</div>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
