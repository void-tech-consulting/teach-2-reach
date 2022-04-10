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

// function home_customizer($wp_customize)
// {
//   require 'section_vars.php';
//   $wp_customize->add_section($home_section, array(
//     'title' => 'Testing Home Page',
//   ));

//   $wp_customize->add_setting($home_top_vid, array(
//     'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
//     'sanitize_callback' => 'sanitize_text_field',
//   ));

//   $wp_customize->add_control($home_top_vid, array(
//     'label' => 'Top Video Embed',
//     'section' => $home_section,
//   ));

//   $wp_customize->add_setting($home_top_img);
//   $wp_customize->add_control(new WP_Customize_Image_Control(
//     $wp_customize,
//     $home_top_img,
//     array(
//       'label' => 'Top Image',
//       'section' => $home_section
//     )
//   ));
//   // Top Desc
//   $wp_customize->add_setting($home_top_desc);
//   $wp_customize->add_control($home_top_desc, array(
//     'label' => 'Top Description',
//     'section' => $home_section,
//     'type' => 'textarea'
//   ));
// }
// add_action('customize_register', 'home_customizer');


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

  // Careers top image
  $wp_customize->add_setting($careers_top_image);
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
    $wp_customize,
    $careers_top_image_control,
    array(
      'label' => 'Careers Top (Image)',
      'section' => $careers_section,
      'settings' => $careers_top_image,
      'width' => 800,
      'height' => 600
    )
  ));
}
add_action('customize_register', 'careers_repeatable_customizer');

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
    $student_testimonials_repeater,
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

function index_customizer($wp_customize)
{
  require 'section_vars.php';

  // Initialize Panel + Sections
  $wp_customize->add_panel(
    $index_panel,
    array(
      'title' => __('Home Panel'),
      'description' => esc_html__('Adjust your cover sections.'), // Include html tags such as 

      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
    )
  );
  $wp_customize->add_section($index_top_section, array(
    'title' => 'Top Section',
    'panel' => $index_panel
  ));
  $wp_customize->add_section($index_middle_section, array(
    'title' => 'Middle Section',
    'panel' => $index_panel
  ));
  $wp_customize->add_section($index_bottom_section, array(
    'title' => 'Bottom Section',
    'panel' => $index_panel
  ));

  // Top Section
  $wp_customize->selective_refresh->add_partial($index_welcome_header, array(
    'selector' => 'span#index_top', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_welcome_header, array(
    'default' => 'Welcome!',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($index_welcome_header, array(
    'label' => 'Welcome',
    'section' => $index_top_section,
    'type' => 'textarea'
  ));

  $wp_customize->selective_refresh->add_partial($index_welcome_text, array(
    'selector' => 'span#index_top', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_welcome_text, array(
    'default' => 'We teach Barber and Barber Instructor courses (1800 hrs/400hrs respectively) as well as cosmetology essentials and skills with a social twist. Our cosmetology school offers the full 1500hr State of MI course curriculum for licensure.',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($index_welcome_text, array(
    'label' => 'Welcome',
    'section' => $index_top_section,
    'type' => 'textarea'
  ));

  // Middle Section - Images
  $wp_customize->selective_refresh->add_partial($index_middle_picture1, array(
    'selector' => 'span#index_middle', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_middle_picture1, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $index_middle_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $index_middle_picture1,
    array(
      'label' => __('Image #1'),
      'description' => esc_html__('Header image of the donate page'),
      'section' => $index_middle_section,
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

  $wp_customize->selective_refresh->add_partial($index_middle_picture2, array(
    'selector' => 'span#index_middle', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_middle_picture2, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $index_middle_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $index_middle_picture2,
    array(
      'label' => __('Image #2'),
      'description' => esc_html__('Header image of the donate page'),
      'section' => $index_middle_section,
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
  $wp_customize->selective_refresh->add_partial($index_middle_picture3, array(
    'selector' => 'span#index_middle', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_middle_picture3, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $index_middle_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $index_middle_picture3,
    array(
      'label' => __('Image #3'),
      'description' => esc_html__('Header image of the donate page'),
      'section' => $index_middle_section,
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

  // Bottom Section
  $wp_customize->selective_refresh->add_partial($index_video, array(
    'selector' => 'span#index_video', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_video, array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'absint'
  ));
  $wp_customize->add_control($index_video, array(
    'label' => 'Video Link',
    'section' => $index_bottom_section,
    'type' => 'textarea'
  ));

  $wp_customize->selective_refresh->add_partial($index_bottom_text, array(
    'selector' => 'span#index_bottom_text', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($index_bottom_text, array(
    'default' => 'Working to Make a Difference',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($index_bottom_text, array(
    'label' => 'Welcome',
    'section' => $index_bottom_section,
    'type' => 'textarea'
  ));
}

function about_us_customizer($wp_customize)
{
  require 'section_vars.php';

  // Initialize Panel + Sections
  $wp_customize->add_panel(
    $about_us_panel,
    array(
      'title' => __('About Us Panel'),
      'description' => esc_html__('Adjust your cover sections.'), // Include html tags such as 

      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
    )
  );
  $wp_customize->add_section($about_us_top_section, array(
    'title' => 'Top Section',
    'panel' => $about_us_panel
  ));
  $wp_customize->add_section($about_us_middle1_section, array(
    'title' => 'Middle Section 1',
    'panel' => $about_us_panel
  ));
  $wp_customize->add_section($about_us_middle2_section, array(
    'title' => 'Middle Section 2',
    'panel' => $about_us_panel
  ));

  $wp_customize->add_section($about_us_bottom_section, array(
    'title' => 'Bottom Section',
    'panel' => $about_us_panel
  ));

  // Top Section
  $wp_customize->selective_refresh->add_partial($about_us_philosophy_paragraph, array(
    'selector' => 'span#index_top', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($about_us_philosophy_paragraph, array(
    'default' => 'Our philosophy at Teach 2 Reach Inc. is to teach basic cosmetology essentials and barbering skills and all it entails in a fun, safe and inviting atmosphere. We intend to instruct in a way that is nontraditional through integrated learning , which entails integrating social skills with cosmetology essentials and barbering skills. 

        We strive to help student learn through guided learning methods such as group activities and differentiated learning techniques. We help students understand what it takes to be successful by setting goals and objectives and helping them reach those goal and objectives successfully.!',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($about_us_philosophy_paragraph, array(
    'label' => 'Philosphy description',
    'section' => $about_us_top_section,
    'type' => 'textarea'
  ));



  // Middle 1 Section 
  $wp_customize->selective_refresh->add_partial($about_us_middle1_picture, array(
    'selector' => 'span#index_middle', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($about_us_middle1_picture, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $about_us_middle1_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $about_us_middle1_picture,
    array(
      'label' => __('Image #1'),
      'description' => esc_html__('Header image of the donate page'),
      'section' => $about_us_middle1_section,
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

  $wp_customize->selective_refresh->add_partial($about_us_whoweare_paragraph, array(
    'selector' => 'span#index_top', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($about_us_whoweare_paragraph, array(
    'default' => 'We are a nonprofit organization teaching cosmetology essentials and barbering like skills with a social twist. We call it, "Socially Integrated Learning". Teach 2 Reach is made up of a team of Michigan State licensed professional cosmetologist, barbers, and instructors. We offer our classes for all ages.',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($about_us_whoweare_paragraph, array(
    'label' => 'Who We are description',
    'section' => $about_us_middle1_section,
    'type' => 'textarea'
  ));




  // //Middle 2 Section
  $wp_customize->selective_refresh->add_partial($about_us_middle2_picture1, array(
    'selector' => 'span#index_middle', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($about_us_middle2_picture1, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $about_us_middle2_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $about_us_middle2_picture1,
    array(
      'label' => __('Image #1'),
      'description' => esc_html__('Header image of the donate page'),
      'section' => $about_us_middle2_section,
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

  $wp_customize->selective_refresh->add_partial($about_us_middle2_picture2, array(
    'selector' => 'span#index_middle', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($about_us_middle2_picture2, array(
    'default' => '',
    'transport' => 'refresh',
    'section' => $about_us_middle2_section,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $about_us_middle2_picture2,
    array(
      'label' => __('Image #2'),
      'description' => esc_html__('Header image of the donate page'),
      'section' => $about_us_middle2_section,
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

  // // Bottom Section
  $wp_customize->selective_refresh->add_partial($about_us_promise_paragraph, array(
    'selector' => 'span#index_top', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($about_us_promise_paragraph, array(
    'default' => 'Our philosophy at Teach 2 Reach Inc. is to teach basic cosmetology essentials and barbering skills and all it entails in a fun, safe and inviting atmosphere. We intend to instruct in a way that is nontraditional through integrated learning , which entails integrating social skills with cosmetology essentials and barbering skills. 

        We strive to help student learn through guided learning methods such as group activities and differentiated learning techniques. We help students understand what it takes to be successful by setting goals and objectives and helping them reach those goal and objectives successfully.!',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($about_us_promise_paragraph, array(
    'label' => 'Even if there are hindrances as such may exist pertaining to reading comprehension, writing, or math, we patiently strive to help them succeed to overcome those barriers by offering them tutoring or one on one individualized support. 

        Our licensed professionals are skilled and trained in the area of cosmetology, barbering and are a custom to working with various types of people from all background, ethnic groups, and handicaps. We strive to treat everyone fairly and create an atmosphere that is nondiscriminatory. 
        
        At Teach 2 Reach many of the ourclasses are hands on and therefore it is required that learners take on the responsibility to attempt and contribute often to the learning process. Learners are required to fully engage in the content material of theory and the practical applications as well. All supplies and materials are provided for the students by Teach 2 Reach Inc. 
        
        Students gain knowledge through demonstrations and hands on practical application. The learning that is required is state mandated and learning standards are compliable with many other institutions that offer similar services in the field.',
    'section' => $about_us_bottom_section,
    'type' => 'textarea'
  ));
}

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

  $wp_customize->add_setting($prospective_students_form_shortcode, array(
    'default' => "[shortcode goes here]"
  ));
  $wp_customize->add_control($prospective_students_form_shortcode, array(
    'label' => 'Students form shortcode',
    'section' => $prospective_students_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting(
    $prospective_students_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $prospective_students_repeater,
      array(
        'label'     => esc_html__('Programs'),
        'description'   => 'Add your programs here',
        'section'       => $prospective_students_section,
        'live_title_id' => 'program_title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 50, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'program_title'  => array(
            'title' => esc_html__('Program Name'),
            'type'  => 'text',
          ),
          'description' => array(
            'title' => esc_html__('Description'),
            'type'  => 'text',
          ),
          'time' => array(
            'title' => esc_html__('Time'),
            'type'  => 'text',
          ),
          'requirements' => array(
            'title' => esc_html__('Additional Requirements'),
            'type'  => 'textarea',
          ),
        ),
      )
    )
  );
}

function donate_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($donate_section, array(
    'title' => 'Donate Page',
  ));

  $wp_customize->add_setting($donate_form_shortcode, array(
    'default' => "[shortcode goes here]"
  ));
  $wp_customize->add_control($donate_form_shortcode, array(
    'label' => 'Donate form shortcode',
    'section' => $donate_section,
    'type' => 'textarea'
  ));
}


add_action('customize_register', 'prospective_students_customizer');
add_action('customize_register', 'donate_customizer');
add_action('customize_register', 'index_customizer');
add_action('customize_register', 'about_us_customizer');
