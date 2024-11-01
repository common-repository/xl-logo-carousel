<?php

function xl_logo() {
    $labels = array(
        'name' => _x('XL Logo', 'xl'),
        'singular_name' => _x('Logo', 'xl'),
        'add_new' => _x('Add New', 'xl'),
        'add_new_item' => __('Add New Logo'),
        'edit_item' => __('Edit Logo'),
        'new_item' => __('New Logo'),
        'all_items' => __('All Logos'),
        'view_item' => __('View Logo'),
        'search_items' => __('Search Logo'),
        'not_found' => __('No logo found'),
        'not_found_in_trash' => __('No logo found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'XL Logo'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 8,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'capability_type' => 'post',
    );
    register_post_type('logo', $args);
}

add_action('init', 'xl_logo');