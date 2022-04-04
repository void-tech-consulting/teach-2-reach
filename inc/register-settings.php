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


function careers_repeater($wp_customize) {
  $wp_customize->add_section('careers_repeater_section', array(
    'title' => 'Careers Page',
  ));
  $wp_customize->add_setting('careers_repeater_setting', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(new Onepress_Customize_Repeatable_Control(
    $wp_customize,
    'career_repeater_setting',
    array(
      'label' => esc_html__('Careers Repeater'),
      'description' => 'This is the repeater where you can add and edit available positions',
      'section' => 'careers_repeater_section',
      'live_title',
      'live_title_id' => 'some_quote',
      'title_format'  => esc_html__('[live_title]'), // [live_title]
      'max_item'      => 10, // Maximum item can add
      'limited_msg'     => wp_kses_post( __( 'Max items added' ) ),
      'fields'    => array(
          'career_title'  => array(
              'title' => esc_html__('Career Title'),
              'type'  =>'text',
          ),
          'career_date_posted' => array(
            'title' => esc_html__('Career date posted'),
            'type'  =>'textarea',
          ),
          'event_career_deadline' => array(
            'title' => esc_html__('Career deadline'),
            'type'  =>'textarea',
          ),
          'event_job_description' => array(
            'title' => esc_html__('Carrer Job Description'),
            'type'  =>'textarea',
          ),
          'career_salary' => array(
            'title' => esc_html__('Career Salary'),
            'type'  =>'textarea',
          ),
          'career_gif' => array(
            'title' => esc_html__('Career gif'),
            'type'  =>'media',
          ),
          'career_requirements' => array(
            'title' => esc_html__('Career requirements'),
            'type'  =>'textarea',
          ),
      ),
    )
  ));
}
add_action('customize_register', 'careers_repeater');




function about_us_customizer($wp_customize)
{
    require 'section_vars.php';
  
    // Initialize Panel + Sections
    $wp_customize->add_panel( $about_us_panel, array(
        'title' => __( 'About Us Panel' ),
        'description' => esc_html__( 'Adjust your cover sections.' ), // Include html tags such as 

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
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $about_us_middle1_picture,
    array(
        'label' => __( 'Image #1' ),
        'description' => esc_html__( 'Header image of the donate page' ),
        'section' => $about_us_middle1_section,
        'button_labels' => array( // Optional.
            'select' => __( 'Select Image' ),
            'change' => __( 'Change Image' ),
            'remove' => __( 'Remove' ),
            'default' => __( 'Default' ),
            'placeholder' => __( 'No image selected' ),
            'frame_title' => __( 'Select Image' ),
            'frame_button' => __( 'Choose Image' ),
        )
    )));

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
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $about_us_middle2_picture1,
    array(
        'label' => __( 'Image #1' ),
        'description' => esc_html__( 'Header image of the donate page' ),
        'section' => $about_us_middle2_section,
        'button_labels' => array( // Optional.
            'select' => __( 'Select Image' ),
            'change' => __( 'Change Image' ),
            'remove' => __( 'Remove' ),
            'default' => __( 'Default' ),
            'placeholder' => __( 'No image selected' ),
            'frame_title' => __( 'Select Image' ),
            'frame_button' => __( 'Choose Image' ),
        )
    )));

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
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $about_us_middle2_picture2,
    array(
        'label' => __( 'Image #2' ),
        'description' => esc_html__( 'Header image of the donate page' ),
        'section' => $about_us_middle2_section,
        'button_labels' => array( // Optional.
            'select' => __( 'Select Image' ),
            'change' => __( 'Change Image' ),
            'remove' => __( 'Remove' ),
            'default' => __( 'Default' ),
            'placeholder' => __( 'No image selected' ),
            'frame_title' => __( 'Select Image' ),
            'frame_button' => __( 'Choose Image' ),
        )
    )));
   
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

add_action('customize_register', 'about_us_customizer');






