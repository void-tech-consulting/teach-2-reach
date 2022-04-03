<?php

function register_primary_menu()
{
  register_nav_menu('primary', 'Navigation');
}
add_action('after_setup_theme', 'register_primary_menu');

/*
*
* Walker for the main menu 
*
*/
function add_arrow($output, $item, $depth, $args)
{
  //Only add class to 'top level' items on the 'primary' menu.
  if ('primary' == $args->theme_location && $depth === 0) {
    if (in_array("menu-item-has-children", $item->classes)) {
      $new_output = '<div class="sub-wrap">' .
        $output .
        '<i class="nav-icon fas fa-chevron-down down-icon" aria-hidden="true"></i></div>';
      return $new_output;
    }
  }
  return $output;
}
add_filter('walker_nav_menu_start_el', 'add_arrow', 10, 4);

// Example of how to use a repeatable box

function example_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($example_section, array(
    'title' => 'Example Repeaters',
  ));

  $wp_customize->add_setting(
    $example_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $example_repeater,
      array(
        'label'     => esc_html__('Example Q & A Repeater'),
        'description'   => '',
        'section'       => $example_section,
        'live_title_id' => 'some_quote',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'some_quote'  => array(
            'title' => esc_html__('Text'),
            'type'  => 'text',
          ),
          'some_image' => array(
            'title' => esc_html__('Image'),
            'type'  => 'media',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'example_repeatable_customizer');

function home_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Testing Home Page',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $home_top_img,
    array(
      'label' => 'Top Image',
      'section' => $home_section
    )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc);
  $wp_customize->add_control($home_top_desc, array(
    'label' => 'Top Description',
    'section' => $home_section,
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'home_customizer');

function prospective_students_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($prospective_students_section, array(
    'title' => 'Prospective Students Page',
  ));

  $wp_customize->add_setting($prospective_students_img);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $prospective_students_img,
    array(
      'label' => 'Prospective Student Image',
      'section' => $prospective_students_section
    )
  ));
}
add_action('customize_register', 'prospective_students_customizer');


function events_repeater($wp_customize)
{
  $wp_customize->add_section('event_repeater_section', array(
    'title' => 'Event Section',
  ));

  $wp_customize->add_setting('event_repeater_setting', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new Onepress_Customize_Repeatable_Control(
    $wp_customize,
    'event_repeater_setting',
    array(
      'label' => esc_html__('Event Repeater'),
      'description' => 'This is the repeater where you can add and edit news and events',
      'section' => 'event_repeater_section',
      'live_title',
      'live_title_id' => 'some_quote',
      'title_format'  => esc_html__('[live_title]'), // [live_title]
      'max_item'      => 10, // Maximum item can add
      'limited_msg'   => wp_kses_post(__('Max items added')),
      'fields'    => array(
        'event_title'  => array(
          'title' => esc_html__('Event/News Title'),
          'type'  => 'text',
          'default' => ''
        ),
        'event_date' => array(
          'title' => esc_html__('Event/News Date'),
          'type'  => 'textarea',
          'default' => 'Month, Day, Year'
        ),
        'event_what' => array(
          'title' => esc_html__('Event/News What Description'),
          'type'  => 'textarea'
        ),
        'event_who' => array(
          'title' => esc_html__('Event/News Who Description'),
          'type'  => 'textarea',
        ),
        'event_why' => array(
          'title' => esc_html__('Event/News Why Description'),
          'type'  => 'textarea',
        ),
        'event_img' => array(
          'title' => esc_html__('Event/News Image'),
          'type'  => 'media',
        ),
        'event_note' => array(
          'title' => esc_html__('Event/News Additional Note'),
          'type'  => 'textarea',
        ),
      ),
    )
  ));
}
add_action('customize_register', 'events_repeater');

/*************************************
  Photo Gallery page customizer
 **************************************/
function photo_gallery_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($photo_gallery_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Photo Gallery',
  ));

  $wp_customize->add_setting(
    $photo_gallery_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $photo_gallery_repeater,
      array(
        'label'     => esc_html__('Photo Gallery Images'),
        'description'   => 'Add images to the Photo Gallery here.',
        'section'       => $photo_gallery_section,
        'live_title_id' => 'name',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 300, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max images added')),
        'fields'    => array(
          'photo'  => array(
            'title' => esc_html__('Photo'),
            'type'  => 'media',
          ),
          'name'  => array(
            'title' => esc_html__('Teacher Name'),
            'type'  => 'text',
          ),
          'job'  => array(
            'title' => esc_html__('Job'),
            'type'  => 'text',
          ),
          'bio'  => array(
            'title' => esc_html__('Bio'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'photo_gallery_repeatable_customizer');

/*************************************
  Careers page customizer
 **************************************/
function careers_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($careers_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Careers',
  ));

  $wp_customize->add_setting(
    $careers_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $careers_repeater,
      array(
        'label'     => esc_html__('Photo Gallery Images'),
        'description'   => 'Add images to the Photo Gallery here.',
        'section'       => $photo_gallery_section,
        'live_title_id' => 'name',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 300, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max images added')),
        'fields'    => array(
          'photo'  => array(
            'title' => esc_html__('Photo'),
            'type'  => 'media',
          ),
          'name'  => array(
            'title' => esc_html__('Teacher Name'),
            'type'  => 'text',
          ),
          'job'  => array(
            'title' => esc_html__('Job'),
            'type'  => 'text',
          ),
          'bio'  => array(
            'title' => esc_html__('Bio'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'photo_gallery_repeatable_customizer');

/*************************************
  Current Students page customizer
 **************************************/
function current_students_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($student_testimonials_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Current Students',
  ));

  $wp_customize->add_setting(
    $photo_gallery_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_setting($student_testimonials_top_img, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $student_testimonials_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $student_testimonials_top_img,
    array(
      'label' => __('Current Students Image'),
      'description' => esc_html__('Image underneath "Current Students"'),
      'section' => $student_testimonials_section,
      'button_labels' => array( // Optional.
        'select' => __('Select Image'),
        'change' => __('Change Image'),
        'remove' => __('Remove'),
        'default' => __('Default'),
        'placeholder' => __('No image selected'),
        'frame_title' => __('Select Image'),
        'frame_button' => __('Choose Image'),
      )
    )
  ));

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $student_testimonials_repeater,
      array(
        'label'     => esc_html__('Photo Gallery Images'),
        'description'   => 'Add images to the Photo Gallery here.',
        'section'       => $photo_gallery_section,
        'live_title_id' => 'name',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 300, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max images added')),
        'fields'    => array(
          'student_name'  => array(
            'title' => esc_html__('Student Name'),
            'type'  => 'text',
          ),
          'quote'  => array(
            'title' => esc_html__('Quote'),
            'type'  => 'text',
          ),
          'photo'  => array(
            'title' => esc_html__('Photo'),
            'type'  => 'media',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'current_students_repeatable_customizer');
