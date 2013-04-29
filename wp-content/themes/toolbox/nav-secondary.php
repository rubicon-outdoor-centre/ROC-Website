<?php

	if (get_post_type() == "page") {
		$slug = the_slug();
	} else {
		$slug = get_post_type();
	}

	$args = array(
		'post_type' => $slug,
		'order' => 'ASC',
		'orderby' => 'menu_order'
	);

	if ($slug == "activities") {
		$args = array(
			'post_type' => $slug,
			'order' => 'ASC',
			'orderby' => 'title'
		);
	}

	$nav_query = new WP_Query($args);
	while ($nav_query->have_posts()) : $nav_query->the_post();

		$page_link = get_permalink();

?>
	<li>
		<a href="#<?php echo the_slug(); ?>"><?php the_title(); ?></a>
	</li>

<?php endwhile; ?>
