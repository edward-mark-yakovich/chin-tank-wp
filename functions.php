<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

automatic_feed_links();




// register widgets
	
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name' => 'All-Topics',
    'before_widget' => ' ',
    'after_widget' => ' ',
    'before_title' => ' ',
    'after_title' => ' ',
));






// number of posts

function wpb_total_posts() { 
	$total = wp_count_posts()->publish;
	echo $total;
} 
	
	
	
	
	
	
	
	
	
// post thumbnail
	
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	
	set_post_thumbnail_size( 400, 400, true );
}










// register menu
	
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  register_nav_menu('sub-menu',__( 'Sub Menu' ));
}
add_action( 'init', 'register_my_menu' );








// custom post type

//hook into the init action and call register_features when it fires
add_action('init', 'register_features', 1); // Set priority to avoid plugin conflicts

function register_features() { // A unique name for our function
 	$labels = array( // Used in the WordPress admin
		'name' => _x('Features', 'post type general name'),
		'singular_name' => _x('Features', 'post type singular name'),
		'add_new' => _x('Add New', 'Features'),
		'add_new_item' => __('Add New Features'),
		'edit_item' => __('Edit Features'),
		'new_item' => __('New Features'),
		'view_item' => __('View Features '),
		'search_items' => __('Search Features'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);
	$args = array(
		'labels' => $labels, // Set above
		'public' => true, // Make it publicly accessible
		'hierarchical' => false, // No parents and children here
		'menu_position' => 5, // Appear right below "Posts"
		'has_archive' => 'resources', // Activate the archive
		'supports' => array('title','editor','comments','thumbnail','custom-fields'),
	);
	register_post_type( 'features', $args ); // Create the post type, use options above
}








// add author support on custom post type

function allowAuthorEditing()
{
  add_post_type_support( 'features', 'author' );
}

add_action('init','allowAuthorEditing');








// img unautop

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '<div class="cott-article__copy-img">\1\2\3</div>', $content);
}

add_filter('the_content', 'filter_ptags_on_images');







?>