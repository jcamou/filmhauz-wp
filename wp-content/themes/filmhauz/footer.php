		
		<footer class="site-footer">
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
	</body>
</html>