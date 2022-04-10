<?php

function add_scripts()
{
  wp_enqueue_script(
    "ajax-script",
    get_theme_file_uri("/js/nav.js"),
    array('jquery'),
    '1.0.0',
    true
  );
  wp_enqueue_script(
    "ajax-script",
    get_theme_file_uri("/js/sub-menu.js"),
    array('jquery'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_scripts');

function add_styles()
{
  wp_enqueue_style("style", get_stylesheet_uri());
  // enqueue other stylesheets...
}
add_action('wp_enqueue_scripts', 'add_styles');
