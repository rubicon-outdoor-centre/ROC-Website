<?php
/**
 * Template Name: Home Page
 * Description: Home page
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
