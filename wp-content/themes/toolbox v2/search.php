<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Default
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php // get_search_form(); ?>

		<div class="banner">
			<div class="container">
				<div class="grid">
					<div class="search-wrapper grid__col--100">
						<div class="container">
							<form role="search" method="get" class="search-form" action="http://test.rubicon.vic.edu.au/">
								<input id="search" type="search" class="search-field" placeholder="Enter a search term..." value="<?php the_search_query(); ?>" name="s">
								<input type="submit" class="search-submit button" value="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>

			<div class="grid container">
			<ol class="loop-archive">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<li <?php post_class(); // output a post article ?>>
				<div class="grid__col--100">
				<div class="content-section">

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

				</div>
				</div>
				</li>

			<?php endwhile; ?>

			</ol>
			</div>

			<?php // default_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
