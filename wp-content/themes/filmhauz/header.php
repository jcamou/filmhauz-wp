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
		<header class="main-header">
			<div class="container">
				<div class="branding">
					<h1><a class="logo" href="<?php bloginfo('siteurl'); ?>">Film<span class="lighter">hauz</span></a></h1>
				</div>
				<nav class="main-nav">
					<?php
						$args = array(
							'menu' => 'main-menu', 
							'echo' => false,
						);

						echo strip_tags(wp_nav_menu($args), '<a>');
					?>
				</nav>
				<div class="search">
				</div>
			</div>
		</header>