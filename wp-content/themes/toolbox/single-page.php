<?php
/**
 * Template Name: Single Page
 * Description: A full-width template with no sidebar
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header();

while ( have_posts() ) : the_post();

	get_template_part( 'single-page-content' );

endwhile; // end of the loop.

get_footer(); ?>
