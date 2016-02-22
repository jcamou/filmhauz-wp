<?php
	
	function theme_styles() {

		// Change to point to your main stylesheet
		wp_enqueue_style('main', get_template_directory_uri(). '/css/style.css');

	}
	add_action('wp_enqueue_scripts', 'theme_styles');


	// Enable custom menus
	add_theme_support('menus');

	// Add custom post types to feed
	add_filter( 'pre_get_posts', 'my_get_posts' );

	function my_get_posts( $query ) {

		if ( is_home() && $query->is_main_query() )
			$query->set( 'post_type', array( 'post', 'double_take' ) );

		return $query;
	}

	// Add custom post types to archive page. Snippet from css-tricks.com
	function custom_post_archive($query) {
	    if ($query->is_archive)
	        $query->set( 'post_type', array('double_take', 'nav_menu_item', 'post') );
	    remove_action( 'pre_get_posts', 'custom_post_archive' );
	}

	add_action('pre_get_posts', 'custom_post_archive');

	// custom menu example @ http://digwp.com/2011/11/html-formatting-custom-menus/
	function clean_custom_menus() {
		$menu_name = 'main-menu'; // specify custom menu slug
		if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
			$menu = wp_get_nav_menu_object($locations[$menu_name]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);

			$menu_list = '<nav>' ."\n";
			$menu_list .= "\t\t\t\t". '<ul>' ."\n";
			foreach ((array) $menu_items as $key => $menu_item) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
			}
			$menu_list .= "\t\t\t\t". '</ul>' ."\n";
			$menu_list .= "\t\t\t". '</nav>' ."\n";
		} else {
			// $menu_list = '<!-- no list defined -->';
		}
		echo $menu_list;
	}

	// Remove auto formatting
	remove_filter('the_content', 'wptexturize');
	remove_filter('the_excerpt', 'wptexturize');
	remove_filter('comment_text', 'wptexturize');
	remove_filter('the_title', 'wptexturize');

	// Removes the Admin bar from the top for subscribers 
	// http://css-tricks.com/snippets/wordpress/remove-admin-bar-for-subscribers/
	add_action('set_current_user', 'cc_hide_admin_bar');
	function cc_hide_admin_bar() {
  		if (!current_user_can('edit_posts')) {
    		show_admin_bar(false);
  		}
	}

	// Removes the [...] from the excerpt call
	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

/*
 * Replacement for get_adjacent_post()
 *
 * This supports only the custom post types you identify and does not
 * look at categories anymore. This allows you to go from one custom post type
 * to another which was not possible with the default get_adjacent_post().
 * Orig: wp-includes/link-template.php 
 * 
 * @param string $direction: Can be either 'prev' or 'next'
 * @param multi $post_types: Can be a string or an array of strings
 */
function mod_get_adjacent_post($direction = 'prev', $post_types = 'post') {
    global $post, $wpdb;

    if(empty($post)) return NULL;
    if(!$post_types) return NULL;

    if(is_array($post_types)){
        $txt = '';
        for($i = 0; $i <= count($post_types) - 1; $i++){
            $txt .= "'".$post_types[$i]."'";
            if($i != count($post_types) - 1) $txt .= ', ';
        }
        $post_types = $txt;
    }

    $current_post_date = $post->post_date;

    $join = '';
    $in_same_cat = FALSE;
    $excluded_categories = '';
    $adjacent = $direction == 'prev' ? 'previous' : 'next';
    $op = $direction == 'prev' ? '<' : '>';
    $order = $direction == 'prev' ? 'DESC' : 'ASC';

    $join  = apply_filters( "get_{$adjacent}_post_join", $join, $in_same_cat, $excluded_categories );
    $where = apply_filters( "get_{$adjacent}_post_where", $wpdb->prepare("WHERE p.post_date $op %s AND p.post_type IN({$post_types}) AND p.post_status = 'publish'", $current_post_date), $in_same_cat, $excluded_categories );
    $sort  = apply_filters( "get_{$adjacent}_post_sort", "ORDER BY p.post_date $order LIMIT 1" );

    $query = "SELECT p.* FROM $wpdb->posts AS p $join $where $sort";
    $query_key = 'adjacent_post_' . md5($query);
    $result = wp_cache_get($query_key, 'counts');
    if ( false !== $result )
        return $result;

    $result = $wpdb->get_row("SELECT p.* FROM $wpdb->posts AS p $join $where $sort");
    if ( null === $result )
        $result = '';

    wp_cache_set($query_key, $result, 'counts');
    return $result;
}

?>
