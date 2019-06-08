<?php 

/** * Proper way to enqueue scripts and styles */
function themename_scripts() {
	if (!is_admin()) {
		wp_enqueue_style( 'style-themename', get_stylesheet_uri() );
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/style.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/css/dark.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/css/font-icons.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/css/magnific-popup.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/include/rs-plugin/css/settings.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/include/rs-plugin/css/layers.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/include/rs-plugin/css/navigation.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/css/animate.css');
		wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/css/responsive.css');
		
		
		
		
						
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.video.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.actions.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.migration.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array(), '1.0.0', true );
		
	
		
		
	}
}
add_action( 'wp_enqueue_scripts', 'themename_scripts' );


// side bar option start here
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default_sidebar',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
// side bar option end here

// thumb option start here 
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 255, 55, true );

add_image_size('custom-thumb', 328, 128, true);

// complete_version_removal
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// custom excerpt length
function custom_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return ' ';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more'); 
*/

function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __('Primary Navigation'),
		)
	);
}
add_action( 'init', 'register_my_menus' );
// wp nav menu option end here

// projects custom post type
add_action('init', 'create_projects');
function create_projects() {
	$projects_args = array(
		'labels' => array(
			'name' => __( 'Projects' ),
			'singular_name' => __( 'Projects' ),
			'add_new' => __('Add Project'),
			'all_items' => __('All Projects'),
			'edit_item' => __('Edit Project'),
			'add_new_item' => __('Add New Project'),
		),
		'singular_label' => __('Projects'),
		'public' => true,
		'exclude_from_search' => 'true',
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'class-projects'),
		'menu_icon' => 'dashicons-portfolio',
		'has_archive' => true,
		'supports' => array('title', 'excerpt', 'author', 'editor', 'thumbnail')
	);
	register_post_type('projects',$projects_args);
	flush_rewrite_rules();
}