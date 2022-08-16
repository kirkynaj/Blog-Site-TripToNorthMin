<?php

//import styles
function tripToNorthMin_files() {
    wp_enqueue_style('tripToNorthMin_main_styles', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap_style', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap_js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js');
}

add_action ('wp_enqueue_scripts', 'tripToNorthMin_files');

function tripToNorthMin_features() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tripToNorthMin_features');

function tripToNorthMin_adjust_queries($query) {
    if(!is_admin() AND is_post_type_archive('place') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }

    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'tripToNorthMin_adjust_queries');
