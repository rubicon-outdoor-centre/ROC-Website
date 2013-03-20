<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Toolbox
 * @since Toolbox 1.0
 */

remove_filter ('the_content',  'wpautop');

the_content();

?>
