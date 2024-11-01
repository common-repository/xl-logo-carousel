<?php

/**
 * Short Code [xl_logo]
 * @param $atts
 * @return string
 */

//Shortcode
function xl_logo_shortcode($atts) {

    $xl_loop = new WP_Query(
        array(
            'post_type' => 'logo',
            'posts_per_page' => 10,
        )
    );

    $output = '<div class="xl-logo-container">';
    $output .= '<div class="xl-logo">';
    if($xl_loop->have_posts()){
        while($xl_loop->have_posts()) {
            $xl_loop->the_post();

            $xl_thumbnail = get_the_post_thumbnail(get_the_ID(), 'medium');

            $output .= '<div class="item">';
                $output .= $xl_thumbnail;
            $output .= '</div>';

        } //end while xl_loop
    } else {
        echo 'No Logo Found.';
    }
    wp_reset_postdata();
    wp_reset_query();
    $output .= '</div><!--/.xl-logo-->';
    $output .= '</div><!--/.xl-logo-container-->';

    return $output;
}
add_shortcode('xl_logo', 'xl_logo_shortcode');

