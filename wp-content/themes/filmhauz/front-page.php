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
		<section class="content">
			<div class="post-img">
				<img src="<?php the_field('illustration'); ?>" alt="" />
			</div>
			<header>
				<div class="title-block">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<div class="post-details">
					<span class="inbetween-text">Written by</span>
					<a class="author"><?php echo get_the_author_meta( 'nickname' ); ?></a>
					<span class="icon-font" aria-hidden="true" data-icon="&#x21;"></span>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
					<span class="inbetween-text">Illustration by</span>
					<a class="illustrator"><?php the_field('illustrator'); ?></a>
				</div>
			</header>
			<section class="col3">
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
				<h4>Share with friends</h4>
				<ul class="social">
					<a href="#">
						<li>
							<span class="icon-font" aria-hidden="true" data-icon="&#x22;"></span>
							Facebook
						</li>
					</a>
					<a href="#">
						<li>
							<span class="icon-font" aria-hidden="true" data-icon="&#x25;"></span>
							Twitter
						</li>
					</a>
				</ul>
			</section>
		</section>
	</article>
</div>

<?php endwhile; else:?>
	<p>There are no pages here</p>
<?php endif;?>
<?php get_footer(); ?>