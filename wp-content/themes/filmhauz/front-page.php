<?php get_header(); ?>

<?php 
	
	$args = array(
		'posts_per_page' => 1
		);

	$the_query = new WP_Query($args);

?>

<?php if (have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>

<div class="container">
	<article>
		<div class="post-img">

			<div class="img-credit">

			</div>
		</div>
		<section>
			<header>
				<div class="title-block">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<h3><?php echo get_the_author() ; ?></h3>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
			</header>
			<section class="col3 info">

			</section>
			<section class="col6">
				<?php the_content(); ?>	
			</section>
			<section class="col3 social">
			</section>
		</section>
	</article>
</div>

<?php endwhile; else:?>
	<p>There are no pages here</p>
<?php endif;?>
<?php get_footer(); ?>