<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container is-top">
	<article>
		<section class="content">
			<div class="post-img">
				<img src="<?php the_field('illustration'); ?>" alt="" />
			</div>
			<header>
				<div class="<?php if(is_page( 'About Filmhauz' ) ) { ?>about-background <?php } ?>title-block">
					<h1><?php the_title(); ?></h1>
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
<footer class="<?php if(is_page( 'About Filmhauz' ) ) { ?>about-background <?php } ?>post-footer">
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