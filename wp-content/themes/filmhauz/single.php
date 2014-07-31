<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header class="header-reader is-sticky is-hidden">
	<!-- This is the reader header -->
	<h1><?php the_title(); ?></h1>
	<div class="social-icons">
		<a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook">
			<span class="icon-font" aria-hidden="true" data-icon="&#x22;"></span>
		</a>
		<a rel="nofollow" href="http://twitter.com/home?status=<?php echo urlencode("Currently reading: "); ?><?php the_permalink(); ?> @Filmhz" title="Share this article with your Twitter followers">
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
					<h1><?php the_title(); ?></h1>
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
				<?php if (get_field('movie_title')) : ?>
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
				<?php endif; ?>
			</section>
		</section>
	</article>
	<div class="next-prev-nav">
		<?php
			$next_post = get_next_post();
			if ($next_post) { ?>
			<div class="newer-post">
				<a href="<?php echo get_permalink($next_post->ID); ?>">
					<h3>Newer Discussion</h3>
					<span class="icon-font" aria-hidden="true" data-icon="&#x26;"></span>
				</a>
			</div>
		<?php } 
			$prev_post = get_previous_post();
			 if ($prev_post) { ?>
				<div class="older-post">
					<a href="<?php echo get_permalink($prev_post->ID); ?>">
						<span class="icon-font" aria-hidden="true" data-icon="&#x23;"></span>
						<h3>Older Discussion</h3>
					</a>
				</div>
		<?php } ?>
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