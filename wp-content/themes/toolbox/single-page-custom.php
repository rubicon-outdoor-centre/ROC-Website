<?php
/**
 * Template Name: Single Page Custom
 * Description: A full-width template with no sidebar
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header();

while ( have_posts() ) : the_post();

		$slug = the_slug();

?>

		<div class="theContent">

			<div class="banner">
				<img src="/wp-content/themes/toolbox/img/banner.jpg" alt="Banner Image">
			</div>

			<div class="grid">

				<div class="grid__col--33">
					<nav class="side-nav">
					<h4>Quick Links</h4>
					<ul>
						<?php get_template_part( 'nav', 'secondary' ); ?>
					</ul>
					</nav>
				</div><!--

			 --><div class="grid__col--66">

			<?php

				$args = array(
					'post_type' => $slug,
					'order' => 'ASC',
					'orderby' => 'menu_order'
				);

				$custom_query = new WP_Query($args);

				while ($custom_query->have_posts()) : $custom_query->the_post();

			?>

					<div class="content-section">

						<h2 id="<?php echo the_slug(); ?>"><?php the_title(); ?></h2>

						<a class="back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow">&uarr;</i></a>

						<?php the_content(); ?>

					</div>

				<?php endwhile; ?>

				</div>

			</div>

		</div>

<?php

endwhile; // end of the loop.

get_footer();

?>
