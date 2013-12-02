<?php get_header(); ?>

<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	$args = array(
		'posts_per_page' => 1,
		'paged' => $paged
		);

	$the_query = new WP_Query($args);

?>

<?php if (have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
<header class="header-reader is-sticky is-hidden">
	<!-- This is the reader header -->
	<h1><?php the_title(); ?></h1>
	<div class="social-icons">
		<a href="#">
			<span class="icon-font" aria-hidden="true" data-icon="&#x22;"></span>
		</a>
		<a href="#">
			<span class="icon-font" aria-hidden="true" data-icon="&#x25;"></span>
		</a>
	</div>
</header>
<div class="container is-top">
	<article>
		<section class="content">
			<div class="post-img">
				<img src="<?php the_field('illustration'); ?>" alt="" />
			</div>
			<header>
				<div class="title-block">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<div class="post-details">
					<div class="author-block">
						<span class="inbetween-text">Written by</span>
						<a class="author"><?php echo get_the_author_meta( 'nickname' ); ?></a>
					</div>
					<div class="pub-date-block">
						<span class="icon-font" aria-hidden="true" data-icon="&#x21;"></span>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
					</div>
					<div class="illustrator-block">
						<span class="inbetween-text">Illustration by</span>
						<a class="illustrator"><?php the_field('illustrator'); ?></a>
					</div>
				</div>
			</header>
			<section class="col3">
				<div class="top is-hidden">
					<a href="#">
						<span class="icon-font" aria-hidden="true" data-icon="&#x24;"></span>
						Top
					</a>
				</div>
			</section>
			<section class="col6 content">
				<?php the_content(); ?>	
			</section>
			<section class="col3 end">
				<div class="info">
					<h4>Title:</h4>
					<p><?php the_field('movie_title'); ?></p>
					<h4>Synopsis:</h4>
					<p><?php the_field('synopsis'); ?></p>
					<h4>Director:</h4>
					<p><?php the_field('director'); ?></p>
					<h4>Writer:</h4>
					<p><?php the_field('writer'); ?></p>
					<h4>Cast:</h4>
					<p><?php the_field('cast'); ?></p>
				</div>
			</section>
		</section>
	</article>
	<div class="newer-older-nav">
		<?php if (previous_posts_link()): ?>
			<div class="newer-post">
				<a href="">
					<h3>Newer Discussion</h3>
					<span class="icon-font" aria-hidden="true" data-icon="&#x26;"></span>
				</a>
			</div>
		<? else: ?>
  			<p>Default Content</p>
		<? endif; ?>
		<?php if (next_posts_link()): ?>
			<div class="older-post">
				<a href="">
					<span class="icon-font" aria-hidden="true" data-icon="&#x23;"></span>
					<h3>Older Discussion</h3>
				</a>
			</div>
		<? else: ?>
  			<p>Default Content</p>
		<? endif; ?>
	</div>
</div>
<footer class="post-footer">
	<div class="container">
		<div class="content">
			<div class="post-img">
				<img src="<?php the_field('final_illustration'); ?>" alt="" />
			</div>
		</div>
	</div>
</footer>
<?php endwhile; else:?>

	<p>There are no pages here</p>
<?php endif;?>
<?php get_footer(); ?>