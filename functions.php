<?php

function tripToNorthMin_files() {
    wp_enqueue_style('tripToNorthMin_main_styles', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap_style', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap_js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js');
}

add_action ('wp_enqueue_scripts', 'tripToNorthMin_files');

