<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header class="header-sticky is-hidden">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<div class="social-icons">
		</div>
	</div>
</header>
<div class="container">
	<article>
		<div class="post-img">

			<div class="img-credit">

			</div>
		</div>
		<section>
			<header>
				<div class="title-block">
					<h1><?php the_title(); ?></h1>
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

<?php endwhile; endif?>

<?php get_footer(); ?>