<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header();

$post_data = get_post($post->post_parent);

$slug = $post_data->post_name;

?>

		<div id="primary">
			<div id="content" role="main">

				<div class="grid container">

					<div class="grid__col--100">

						<?php while ( have_posts() ) : the_post(); ?>

							<div class="content-section">

								<?php get_template_part( 'content', 'single' ); ?>

							</div>

						<?php endwhile; // end of the loop. ?>

					</div>

				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
