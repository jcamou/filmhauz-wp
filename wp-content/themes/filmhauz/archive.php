<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container">
	<article>
		<section class="content">
			<header>
				<div class="title-block">
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
				<ul class="archive-list">
					<?php
				        $lastposts = get_posts('numberposts=5&orderby=rand&cat=-52');
				        foreach($lastposts as $post) :
				        setup_postdata($post); ?>

				        <li<?php if ( $post->ID == $wp_query->post->ID ) { echo ' class="current"'; } else {} ?>>
				            
				            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				            <p class="post-details">
								by
								<a class="author"><?php echo get_the_author_meta( 'nickname' ); ?></a>
								<span class="icon-font" aria-hidden="true" data-icon="&#x21;"></span>
								<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
							</p>
							<?php the_excerpt(); ?>
				        </li>
    				<?php endforeach; ?>
				</ul>
			</section>
			<section class="col3 end">
			</section>
		</section>
	</article>
</div>
	

<?php get_footer(); ?>