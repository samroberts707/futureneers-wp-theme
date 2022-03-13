<?php

function futureneers_files() {
  wp_enqueue_style('futureneers_main_styles', get_stylesheet_uri());
  wp_enqueue_script('futureneers_main_script', get_template_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'futureneers_files');

function futureneers_features() {
  register_nav_menu('navbarMenuLocation', 'Navbar Menu');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'futureneers_features');