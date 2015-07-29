<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package Default
 */
?>

<div class="grid container">

	<div class="grid__col--100">

		<div class="content-section">

			<section class="no-results not-found">
				<header class="page-header">
					<h2 class="page-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">

					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'toolbox' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'toolbox' ); ?></p>
						<?php //get_search_form(); ?>

					<?php else : ?>

						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>

					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .no-results -->

		</div>
	</div>
</div>
