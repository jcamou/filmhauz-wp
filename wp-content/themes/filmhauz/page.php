<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>

<?php endwhile; else: ?>

	<p>There are no pages here</p>
	
<?php endif; ?>

<p>This is page.php</p>

<?php get_footer(); ?>