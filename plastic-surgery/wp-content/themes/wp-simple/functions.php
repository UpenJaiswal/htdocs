<?php 

/** * Proper way to enqueue scripts and styles */
function themename_scripts() {
	if (!is_admin()) {
		wp_enqueue_style( 'style-themename', get_stylesheet_uri() );
		wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css');
		wp_enqueue_style( 'style-responsive.css', get_template_directory_uri() . '/css/style-responsive.css');
		wp_enqueue_style( 'animate.min.css', get_template_directory_uri() . '/css/animate.min.css');
		wp_enqueue_style( 'vertical-rhythm.min.css', get_template_directory_uri() . '/css/vertical-rhythm.min.css');
		wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/css/owl.carousel.css');
		wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/css/magnific-popup.css');
		wp_enqueue_style( 'rev-slider.css', get_template_directory_uri() . '/css/rev-slider.css');
		wp_enqueue_style( 'settings.css', get_template_directory_uri() . '/rs-plugin/css/settings.css');
						
		

		
						
					
						
						
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'jquery-1.11.2.min.js', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.easing.1.3.js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'SmoothScroll.js', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.scrollTo.min.js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.localScroll.min.js', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.viewport.mini.js', get_template_directory_uri() . '/js/jquery.viewport.mini.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.countTo.js', get_template_directory_uri() . '/js/jquery.countTo.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.appear.js', get_template_directory_uri() . '/js/jquery.appear.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.sticky.js', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.parallax-1.1.3.js', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.fitvids.js', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'isotope.pkgd.min.js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'imagesloaded.pkgd.min.js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'wow.min.js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'masonry.pkgd.min.js', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.simple-text-rotator.min.js', get_template_directory_uri() . '/js/jquery.simple-text-rotator.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'all.js', get_template_directory_uri() . '/js/all.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'contact-form.js', get_template_directory_uri() . '/js/contact-form.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.ajaxchimp.min.js', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.themepunch.tools.min.js', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'jquery.themepunch.revolution.min.js', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'rev-slider.js', get_template_directory_uri() . '/js/rev-slider.js', array(), '1.0.0', true );	
		
		
		
		
		  
		
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


// Hooking up our function to theme setup


function create_posttype() {
 
    register_post_type( 'PEOPLE',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'PEOPLE' ),
                'singular_name' => __( 'PEOPLE' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'PEOPLE'),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        )
    );
}
add_action( 'init', 'create_posttype' );

function wpb_widgets_init() {
 
 register_sidebar( array(
        'name' => __( 'location', 'wpb' ),
        'id' => 'location',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'office_hours', 'wpb' ),
        'id' => 'office_hours',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'phone', 'wpb' ),
        'id' => 'phone',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
		
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );
