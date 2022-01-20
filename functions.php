<?php

function futureneers_files() {
  wp_enqueue_style('futureneers_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'futureneers_files');

