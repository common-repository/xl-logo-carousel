<?php

function xl_logo_carousel() {

    if (!is_admin()) {
        wp_enqueue_script('xl_logo_owl_js', plugins_url('/../vendors/owl/owl.carousel.min.js', __FILE__), array
        ('jquery'), '2.0.0', true);
        wp_enqueue_script('xl_logo_custom_js', plugins_url('/../assets/js/xl-logo-custom.js', __FILE__), array(), '1.0
        .0',
            true);
        wp_enqueue_style('xl_logo_owl_css', plugins_url('/../vendors/owl/assets/owl.carousel.css', __FILE__), array()
            , '2.0.0');
        wp_enqueue_style('xl_logo_custom_css', plugins_url('/../assets/css/xl-logo-custom.css', __FILE__), array(), '1.0
        .0');
    }
}

add_action('init', 'xl_logo_carousel');