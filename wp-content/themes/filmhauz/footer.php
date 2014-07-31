		
		<footer class="<?php if(!is_page( 'The Archives' ) ) { ?>is-sticky <?php } ?>site-footer">
			<div class="container">
				<p>&copy; Copyright <?php echo date('Y'); ?> <a href="#">Filmhauz</a>. All Rights Reserved</p>
				<nav class="footer-nav">
					<?php
						$args = array(
							'menu' => 'main-menu', 
							'echo' => false,
						);

						echo strip_tags(wp_nav_menu($args), '<a>');
					?>
				</nav>
			</div>	
		</footer>
		<?php wp_footer(); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/js/waypoints.min.js"; ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/js/jquery.debouncedresize.js"; ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/js/thegood.js"; ?>"></script>		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-35551817-1', 'filmhauz.com');
		  ga('send', 'pageview');
		</script>
	</body>
</html>