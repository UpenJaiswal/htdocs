<?php

function azexo_tgmpa_register() {

    $plugins = array(
        array(
            'name' => esc_html__('Redux Framework', 'madison'),
            'slug' => 'redux-framework',
            'required' => true,
        ),
        array(
            'name' => esc_html__('WordPress Importer', 'madison'),
            'slug' => 'wordpress-importer',
            'required' => true,
        ),
        array(
            'name' => esc_html__('WP-LESS', 'madison'),
            'slug' => 'wp-less',
        ),
        array(
            'name' => esc_html__('Infinite scroll', 'madison'),
            'slug' => 'infinite-scroll',
        ),
        array(
            'name' => esc_html__('Widget CSS Classes', 'madison'),
            'slug' => 'widget-css-classes',
        ),
        array(
            'name' => esc_html__('JP Widget Visibility', 'madison'),
            'slug' => 'jetpack-widget-visibility',
        ),
        array(
            'name' => esc_html__('Contact Form 7', 'madison'),
            'slug' => 'contact-form-7',
        ),
        array(
            'name' => esc_html__('Custom Sidebars', 'madison'),
            'slug' => 'custom-sidebars',
        ),
    );
    if (file_exists(get_template_directory() . '/plugins/custom-classes.zip')) {
        $plugins[] = array(
            'name' => esc_html__('Custom classes for page/post', 'madison'),
            'slug' => 'custom-classes',
            'source' => get_template_directory() . '/plugins/custom-classes.zip',
            'required' => true,
            'version' => '0.1',
        );
    }
    $plugin_path = get_template_directory() . '/plugins/js_composer.zip';
    if (file_exists($plugin_path)) {
        $plugins[] = array(
            'name' => esc_html__('WPBakery Visual Composer', 'madison'),
            'slug' => 'js_composer',
            'source' => get_template_directory() . '/plugins/js_composer.zip',
            'required' => true,
            'version' => '5.1.1',
            'external_url' => '',
        );
    }
    $plugins = apply_filters('azexo_plugins', $plugins);
    if (!empty($plugins)) {
        tgmpa($plugins, array());
    }


    $additional_plugins = array(
        'vc_widgets' => esc_html__('Visual Composer Widgets', 'madison'),
        'azexo_vc_elements' => esc_html__('AZEXO Visual Composer elements', 'madison'),
        'az_social_login' => esc_html__('AZEXO Social Login', 'madison'),
        'az_email_verification' => esc_html__('AZEXO Email Verification', 'madison'),
        'az_likes' => esc_html__('AZEXO Post/Comments likes', 'madison'),
        'az_voting' => esc_html__('AZEXO Voting', 'madison'),
        'azexo_html' => esc_html__('AZEXO HTML cusomizer', 'madison'),
        'azh_extension' => esc_html__('AZEXO HTML Library', 'madison'),
        'az_listings' => esc_html__('AZEXO Listings', 'madison'),
        'az_query_form' => esc_html__('AZEXO Query Form', 'madison'),
        'az_group_buying' => esc_html__('AZEXO Group Buying', 'madison'),
        'az_vouchers' => esc_html__('AZEXO Vouchers', 'madison'),
        'az_bookings' => esc_html__('AZEXO Bookings', 'madison'),
        'az_deals' => esc_html__('AZEXO Deals', 'madison'),
        'az_sport_club' => esc_html__('AZEXO Sport Club', 'madison'),
        'az_locations' => esc_html__('AZEXO Locations', 'madison'),
        'circular_countdown' => esc_html__('Circular CountDown', 'madison'),
    );
    $plugins = array();
    foreach ($additional_plugins as $additional_plugin_slug => $additional_plugin_name) {
        $plugin_path = get_template_directory() . '/plugins/' . $additional_plugin_slug . '.zip';
        if (file_exists($plugin_path)) {
            $plugins[] = array(
                'name' => $additional_plugin_name,
                'slug' => $additional_plugin_slug,
                'source' => $plugin_path,
                'required' => true,
                'version' => AZEXO_FRAMEWORK_VERSION,
            );
        }
    }
    $plugins = apply_filters('azexo_plugins', $plugins);
    if (!empty($plugins)) {
        tgmpa($plugins, array(
//            'is_automatic' => true,
        ));
    }
}

add_action('tgmpa_register', 'azexo_tgmpa_register');
