<?php

function index_customizer($wp_customize)
{
    require 'section_vars.php';
  
    // Initialize Panel + Sections
    $wp_customize->add_panel( $index_panel, array(
        'title' => __( 'Home Panel' ),
        'description' => esc_html__( 'Adjust your cover sections.' ), // Include html tags such as 

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
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_middle_picture1,
    array(
        'label' => __( 'Image #1' ),
        'description' => esc_html__( 'Header image of the donate page' ),
        'section' => $index_middle_section,
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
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_middle_picture2,
    array(
        'label' => __( 'Image #2' ),
        'description' => esc_html__( 'Header image of the donate page' ),
        'section' => $index_middle_section,
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
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $index_middle_picture3,
    array(
        'label' => __( 'Image #3' ),
        'description' => esc_html__( 'Header image of the donate page' ),
        'section' => $index_middle_section,
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
add_action( 'customize_register', 'index_customizer' );
add_action( 'customize_register', 'about_us_customizer' );