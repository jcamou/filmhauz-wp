<?php
	
	function theme_styles() {

		// Change to point to your main stylesheet
		wp_enqueue_style('main', get_template_directory_uri(). '/css/style.css');

	}
	add_action('wp_enqueue_scripts', 'theme_styles');


	// Enable custom menus
	add_theme_support('menus');

?>
