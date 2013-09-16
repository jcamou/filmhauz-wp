<?php
/*
Template Name: Archives
*/
get_header(); ?>

		
		<?php get_search_form(); ?>
		<ul>
			<?php wp_get_archives('postbypost'); ?>
		</ul>
	

<?php get_footer(); ?>