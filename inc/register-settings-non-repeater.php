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
}

add_action( 'customize_register', 'index_customizer' );
add_action( 'customize_register', 'about_us_customizer' );