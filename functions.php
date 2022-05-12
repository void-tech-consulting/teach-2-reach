<?php
require get_template_directory() . '/inc/enqueue-scripts.php';      // Link stylesheet!
// require get_template_directory() . '/inc/register-settings-repeater.php';    // Register settings
// require get_template_directory() . '/inc/register-settings-non-repeater.php';    // Register settings
require get_template_directory() . '/inc/register-settings.php';

// Don't worry about these for now...
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template_functions.php';
add_image_size( 'album-grid', 225, 150, true );
