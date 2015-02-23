<!--<form role="search" method="get" class="search-form" action="<?php //bloginfo('home'); ?>">
	<input type="submit" class="search-submit button" value="Search">
	<div class="input-wrapper">
		<input id="search" type="search" class="search-field" placeholder="Enter a search term" value="" name="s">
	</div>
</form>-->

<div class="search-wrapper">
	<form role="search" method="get" class="search-form" action="<?php bloginfo('home'); ?>">
		<input id="search" type="search" class="search-field" placeholder="Enter a search term..." value="<?php the_search_query(); ?>" name="s">
		<input type="submit" class="search-submit button" value="Search">
	</form>
</div>
