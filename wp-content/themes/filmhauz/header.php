<!DOCTYPE html>
<html>
	<head>

		<title>
			<?php

				wp_title('-', true, 'right');

				bloginfo('name');
			?>
		</title>

		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<script type="text/javascript" src="//use.typekit.net/gfi8axp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="container">
				<h1><a class="logo" href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>

				<?php
					
					$args = array('menu' => 'main-menu');

					wp_nav_menu($args);

				?>

			</div>
		</header>