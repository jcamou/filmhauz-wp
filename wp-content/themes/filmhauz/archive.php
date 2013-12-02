<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container is-top">
	<article>
		<section class="content">
			<?php get_search_form(); ?>
			<ul class="archive-list">
				<?php wp_get_archives('type=postbypost'); ?>
			</ul>
		</section>
	</article>
</div>
	

<?php get_footer(); ?>