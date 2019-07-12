<?php 

/** * Proper way to enqueue scripts and styles */
function themename_scripts() {
	if (!is_admin()) {
		wp_enqueue_style( 'style-themename', get_stylesheet_uri() );
		
		wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/libraries/bootstrap/bootstrap.min.css');
		
		wp_enqueue_style( 'jquery-ui.min', get_template_directory_uri() . '/libraries/fuelux/jquery-ui.min.css');
		
		
		wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/libraries/owl-carousel/owl.carousel.css');
		
		
		wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/libraries/owl-carousel/owl.theme.css');
		
		
		wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/libraries/fonts/font-awesome.min.css');
		
		
		wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/libraries/animate/animate.min.css');
		
		
		wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/libraries/flexslider/flexslider.css');
		
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/libraries/magnific-popup.css');
		
		
		wp_enqueue_style( 'components', get_template_directory_uri() . '/css/components.css');
		
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
		
		wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css');
		
		
						
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/libraries/jquery.min.js', array(), '1.0.0', true );

        wp_enqueue_script( 'jquery.easing.min', get_template_directory_uri() . '/libraries/jquery.easing.min.js', array(), '1.0.0', true );


  		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/libraries/bootstrap/bootstrap.min.js', array(), '1.0.0', true ); 
		
		wp_enqueue_script( 'jquery.gmap.min', get_template_directory_uri() . '/libraries/gmap/jquery.gmap.min.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/libraries/fuelux/jquery-ui.min.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery.animateNumber.min', get_template_directory_uri() . '/libraries/jquery.animateNumber.min.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/libraries/jquery.appear.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery.knob', get_template_directory_uri() . '/libraries/jquery.knob.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/libraries/wow.min.js', array(), '1.0.0', true );
		
		wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/libraries/owl-carousel/owl.carousel.min.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery.quicksand', get_template_directory_uri() . '/libraries/portfolio-filter/jquery.quicksand.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'modernizr.custom', get_template_directory_uri() . '/libraries/expanding-search/modernizr.custom.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri() . '/libraries/flexslider/jquery.flexslider-min.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/libraries/jquery.magnific-popup.min.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'modernizr.custom', get_template_directory_uri() . '/libraries/expanding-search/modernizr.custom.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'classie', get_template_directory_uri() . '/libraries/expanding-search/classie.js', array(), '1.0.0', true );
		
		wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
		
		
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'themename_scripts' );


// side bar option start here
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'footer-heading',
		'id' => 'footer-heading',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'widget-link',
		'id' => 'widget-link',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'widget-link1',
		'id' => 'widget-link1',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'widget-link2',
		'id' => 'widget-link2',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'footer address',
		'id' => 'footer address',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	
	register_sidebar(array(
		'name' => 'footer-bottom',
		'id' => 'footer-bottom',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default_sidebar',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default_sidebar',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'blog1',
		'id' => 'blog1',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'blog2',
		'id' => 'blog2',
		'description' => 'This area page Default sidebar',	
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name' => 'blog3',
		'id' => 'blog3',
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
function create_posttypes() {
 
    register_post_type( 'TESTIMONAL',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'TESTIMONAL' ),
                'singular_name' => __( 'TESTIMONAL' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'TESTIMONAL'),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        )
    );
}
add_action( 'init', 'create_posttypes' );
function create_posttype() {
 
    register_post_type( 'Blog',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Blog' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Blog'),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        )
    );
}
add_action( 'init', 'create_posttype' );