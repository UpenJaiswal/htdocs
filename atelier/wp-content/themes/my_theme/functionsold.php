<?php 

/** * Proper way to enqueue scripts and styles */
function themename_scripts() {
	if (!is_admin()) {
		wp_enqueue_style( 'style-themename', get_stylesheet_uri() );
		wp_enqueue_style( 'material-design-iconic-font.min.css', get_template_directory_uri() . '/vendor/mdi-font/css/material-design-iconic-font.min.css');
		wp_enqueue_style( 'fontawesome-all.min.css', get_template_directory_uri() . '/vendor/font-awesome-5/css/fontawesome-all.min.css');
		wp_enqueue_style( 'themify-icons.css', get_template_directory_uri() . '/vendor/themify-font/themify-icons.css');
		wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/vendor/bootstrap-4.1/bootstrap.min.css');
		wp_enqueue_style( 'animate.min.css', get_template_directory_uri() . '/vendor/animate.css/animate.min.css');
		wp_enqueue_style( 'hamburgers.min.css', get_template_directory_uri() . '/vendor/css-hamburgers/hamburgers.min.css');
		wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/vendor/slick/slick.css');
		wp_enqueue_style( 'select2.min.css', get_template_directory_uri() . '/vendor/select2/select2.min.css');
		wp_enqueue_style( 'main.min.css', get_template_directory_uri() . '/css/main.min.css');
		wp_enqueue_style( 'custom.css', get_template_directory_uri() . '/css/custom.css');
		
		
		
		
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/vendor/bootstrap-4.1/bootstrap.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/vendor/slick/slick.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.waypoints.min.js', get_template_directory_uri() . '/vendor/waypoints/jquery.waypoints.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'wow.min.js', get_template_directory_uri() . '/vendor/wow/wow.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.counterup.min.js', get_template_directory_uri() . '/vendor/jquery.counterup/jquery.counterup.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'isotope.pkgd.min.js', get_template_directory_uri() . '/vendor/isotope/isotope.pkgd.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'imagesloaded.pkgd.min.js', get_template_directory_uri() . '/vendor/isotope/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.matchHeight-min.js', get_template_directory_uri() . '/vendor/matchHeight/jquery.matchHeight-min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'select2.min.js', get_template_directory_uri() . '/vendor/select2/select2.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'sweetalert.min.js', get_template_directory_uri() . '/vendor/sweetalert/sweetalert.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'nouislider.min.js', get_template_directory_uri() . '/vendor/noUiSlider/nouislider.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'global.js', get_template_directory_uri() . '/js/global.js', array(), '1.0.0', true );
			
		
		
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

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}



function wpb_widgets_init() {
 
 register_sidebar( array(
        'name' => __( 'logo', 'wpb' ),
        'id' => 'logo',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'logo_top', 'wpb' ),
        'id' => 'logo_top',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'address', 'wpb' ),
        'id' => 'address',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'link', 'wpb' ),
        'id' => 'link',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	

	register_sidebar( array(
        'name' => __( 'social', 'wpb' ),
        'id' => 'social',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
		
    }

 
add_action( 'widgets_init', 'wpb_widgets_init' );






