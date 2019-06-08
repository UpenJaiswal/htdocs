<?php 

/** * Proper way to enqueue scripts and styles */
function themename_scripts() {
	if (!is_admin()) {
		wp_enqueue_style( 'style-themename', get_stylesheet_uri() );
		wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style( 'icon-font.min.css', get_template_directory_uri() . '/assets/fonts/icon-font.min.css');
		wp_enqueue_style( 'icofont.css', get_template_directory_uri() . '/assets/fonts/icofont.css');
		wp_enqueue_style( 'meanmenu.min.css', get_template_directory_uri() . '/assets/css/meanmenu.min.css');
		wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/assets/css/animate.css');
		wp_enqueue_style( 'settings.css', get_template_directory_uri() . '/rs-plugin/css/settings.css');
		wp_enqueue_style( 'extralayers.css', get_template_directory_uri() . '/assets/css/extralayers.css');
		wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.min.css');
		wp_enqueue_style( 'owl.theme.default.min.css', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.default.min.css');
		wp_enqueue_style( 'venobox.css', get_template_directory_uri() . '/assets/venobox/css/venobox.css');
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/assets/css/responsive.css');
						
												
						
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'jquery-2.2.4.min.js', get_template_directory_uri() . '/assets/js/jquery-2.2.4.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/assets/bootstrap/js/popper.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.meanmenu.min.js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.sticky.js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.themepunch.plugins.min.js', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.plugins.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.themepunch.revolution.min.js', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'gijgo.js', get_template_directory_uri() . '/assets/js/gijgo.js', array(), '1.0.0', true );
		wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.mixitup.min.js', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.appear.js', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.inview.min.j', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'venobox.min.js', get_template_directory_uri() . '/assets/venobox/js/venobox.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'scrolltopcontrol.js', get_template_directory_uri() . '/assets/js/scrolltopcontrol.js', array(), '1.0.0', true );
		wp_enqueue_script( 'wow.min.js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'scripts.js', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true );
		
		
		
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
        'name' => __( 'logo_b', 'wpb' ),
        'id' => 'logo_b',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	
 
 register_sidebar( array(
        'name' => __( 'doc-promo', 'wpb' ),
        'id' => 'doc-promo',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'doc-promo_number', 'wpb' ),
        'id' => 'doc-promo_number',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
    register_sidebar( array(
        'name' =>__( 'Footer-1', 'wpb'),
        'id' => 'footer-1',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' =>__( 'Footer-2', 'wpb'),
        'id' => 'footer-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' =>__( 'Footer-3', 'wpb'),
        'id' => 'footer-3',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' =>__( 'Footer-4', 'wpb'),
        'id' => 'footer-4',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
			
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );




