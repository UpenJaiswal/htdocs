<?php 

/** * Proper way to enqueue scripts and styles */
function themename_scripts() {
	if (!is_admin()) {
		wp_enqueue_style( 'style-themename', get_stylesheet_uri() );
		wp_enqueue_style( 'style-custom1', get_template_directory_uri() . '/fonts/font-awesome-5/css/fontawesome-all.min.css');
		wp_enqueue_style( 'style-custom2', get_template_directory_uri() . '/fonts/line-awesome/css/line-awesome.min.css');
		wp_enqueue_style( 'style-custom3', get_template_directory_uri() . '/css/opensans-font.css');
		wp_enqueue_style( 'style-custom4', get_template_directory_uri() . '/css/lato-font.css');
		wp_enqueue_style( 'style-custom5', get_template_directory_uri() . '/css/source-sans-pro-font.css');
		wp_enqueue_style( 'style-custom6', get_template_directory_uri() . '/vendor/bootrap/css/bootstrap.min.css');
		wp_enqueue_style( 'style-custom7', get_template_directory_uri() . '/vendor/owl/css/owl.carousel.min.css');
		wp_enqueue_style( 'style-custom8', get_template_directory_uri() . '/vendor/owl/css/owl.theme.default.min.css');
		wp_enqueue_style( 'style-custom9', get_template_directory_uri() . '/vendor/revolution/css/settings.css');
		wp_enqueue_style( 'style-custom10', get_template_directory_uri() . '/vendor/revolution/css/layers.css');
		wp_enqueue_style( 'style-custom11', get_template_directory_uri() . '/vendor/revolution/css/navigation.css');
		wp_enqueue_style( 'style-custom12', get_template_directory_uri() . '/vendor/nouislider/css/nouislider.css');
		wp_enqueue_style( 'style-custom13', get_template_directory_uri() . '/vendor/fancybox-master/css/jquery.fancybox.min.css');
		wp_enqueue_style( 'style-custom14', get_template_directory_uri() . '/css/style.css');
		
		
		
	
		
						
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'theme-scripts1', get_template_directory_uri() . '/vendor/jquery/dist/jquery.min.js', array(), '1.0.0', true );	
		wp_enqueue_script( 'theme-scripts2', get_template_directory_uri() . '/vendor/bootrap/js/bootstrap.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts3', get_template_directory_uri() . '/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts4', get_template_directory_uri() . '/vendor/owl/js/owl.carousel.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts5', get_template_directory_uri() . '/vendor/owl/js/OwlCarousel2Thumbs.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts6', get_template_directory_uri() . '/vendor/revolution/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts7', get_template_directory_uri() . '/vendor/revolution/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts8', get_template_directory_uri() . '/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts9', get_template_directory_uri() . '/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts10', get_template_directory_uri() . '/vendor/revolution/js/extensions/revolution.extension.navigation.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts11', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts12', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts13', get_template_directory_uri() . '/js/jquery.masonry.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts14', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts15', get_template_directory_uri() . '/vendor/nouislider/js/nouislider.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts16', get_template_directory_uri() . '/vendor/fancybox-master/js/jquery.fancybox.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts17', get_template_directory_uri() . '/js/theme-map.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts18', get_template_directory_uri() . '/vendor/waypoints/lib/jquery.waypoints.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts19', get_template_directory_uri() . '/vendor/jquery.counterup/jquery.counterup.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts20', get_template_directory_uri() . '/vendor/sweetalert/sweetalert.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts21', get_template_directory_uri() . '/js/config-contact.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts22', get_template_directory_uri() . '/vendor/matchHeight/dist/jquery.matchHeight-min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'theme-scripts23', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
		
		
	
		
		
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

function wpb_widgets_init() {
register_sidebar( array(
        'name' =>__( 'header_text', 'wpb'),
        'id' => 'header_text',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );	


register_sidebar( array(
        'name' =>__( 'logo', 'wpb'),
        'id' => 'logo',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
register_sidebar( array(
        'name' =>__( 'follow_us', 'wpb'),
        'id' => 'follow_us',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );	
	
register_sidebar( array(
        'name' =>__( 'an_appointment', 'wpb'),
        'id' => 'an_appointment',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
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