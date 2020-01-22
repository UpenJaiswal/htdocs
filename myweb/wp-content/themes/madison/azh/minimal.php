<?php

add_filter('azh_replaces', 'minimal_azh_replaces');

function minimal_azh_replaces($replaces) {
    $post = azexo_get_closest_current_post('azh_widget', false);
    if ($post) {
        $replaces['post_title'] = $post->post_title;
        $replaces['post_excerpt'] = $post->post_excerpt;
        $replaces['post_content'] = $post->post_content;
        $replaces['thumbnail'] = get_the_post_thumbnail_url($post, 'full');
        $replaces['permalink'] = get_permalink($post);
    } else {
        $replaces['post_title'] = get_bloginfo('name');
        $replaces['post_excerpt'] = get_bloginfo('description');
        $replaces['post_content'] = '';
        $replaces['thumbnail'] = '';
        $replaces['permalink'] = '';
    }
    return $replaces;
}

add_action('wp_enqueue_scripts', 'minimal_azh_enqueue_scripts', 9);

function minimal_azh_enqueue_scripts() {
    if (is_dir(get_template_directory() . '/azh/' . azexo_get_skin())) {
        global $azexo_azh;
        $azexo_azh = true;

        $uri = trailingslashit(get_template_directory_uri() . '/azh/' . azexo_get_skin());

//Bootstrap core CSS
        wp_enqueue_style('azexo-bootstrap', $uri . 'css/bootstrap.min.css');

//icon fonts
        wp_enqueue_style('azexo-et-icons', $uri . 'css/et-icons.css');
        wp_enqueue_style('font-awesome', $uri . 'css/font-awesome.min.css');
        wp_enqueue_style('themify', $uri . 'css/themify-icons.css');
        wp_enqueue_style('animsition', $uri . 'css/animsition.css');
        wp_enqueue_style('animate', $uri . 'css/animate.css');

//Owl Carousel Assets
        wp_enqueue_style('owl-carousel', $uri . 'owl-carousel/owl.carousel.css');
        wp_enqueue_style('owl-theme', $uri . 'owl-carousel/owl.theme.css');
        wp_enqueue_style('cubeportfolio', $uri . 'cubeportfolio/css/cubeportfolio.css');
        wp_enqueue_style('lightbox', $uri . 'css/lightbox.css');

//Custom styles for this template
        wp_enqueue_style('azexo-style-global', $uri . 'css/style.css');

//Custom Fonts
//


        wp_enqueue_script('bootstrap-min-j', $uri . 'js/bootstrap.min.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('owl-carousel', $uri . 'js/owl.carousel.min.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('animsition', $uri . 'js/jquery.animsition.min.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('cubeportfolio', $uri . 'cubeportfolio/js/jquery.cubeportfolio.min.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('azexo-plugins-j', $uri . 'js/plugins.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('lightbox', $uri . 'js/lightbox.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('azexo-blockets-j', $uri . 'js/blockets.js', array(), AZEXO_FRAMEWORK_VERSION, true);
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.6&sensor=false&extension=.js', array(), AZEXO_FRAMEWORK_VERSION, true);

//IE10 viewport hack for Surface/desktop Windows 8 bug
        wp_enqueue_script('azexo-viewport-bug-workaround-j', $uri . 'js/ie10-viewport-bug-workaround.js', array(), AZEXO_FRAMEWORK_VERSION, true);
    }
}
