<?php
    $wp_customize->add_section( 'learnegy_teacher', array(
        'title' => 'Teacher',
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_teacher_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_teacher_ctrl', array(
        'label'             =>  __('Show Teacher Section', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_show_teacher_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_teacher_subheading_settings', array(
        'default'           => 'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_teacher_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_teacher_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_teacher_heading_settings', array(
        'default'           => 'Expert Teachers',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_teacher_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_teacher_heading_settings',
        'type'              =>  'text'
    ));

    // Archive Page Options
    // vop = voice of principal
    $wp_customize->add_setting('learnegy_show_principal_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_principal_ctrl', array(
        'label'             =>  __('Show Archive Page Principal Section', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_show_principal_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_vop_sec_heading_settings', array(
        'default'           => 'Principal of learnegy School',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_vop_sec_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_vop_sec_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_principal_image_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' =>  function( $file, $setting ) {
            $mimes = array(
                'jpg|jpeg|jpe' => 'image/jpeg',
                'gif'          => 'image/gif',
                'png'          => 'image/png'
            );

            $file_ext = wp_check_filetype( $file, $mimes );
            return ( $file_ext['ext'] ? $file : $setting->default );
        }
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'learnegy_principal_image_ctrl', array(
        'label'             =>  __('Principal Profile Picture', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_principal_image_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'learnegy'),
            'remove'        => __('Remove Image', 'learnegy'),
            'change'        => __('Change Image', 'learnegy'),
        )
    )));

    $wp_customize->add_setting('learnegy_principal_name_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_principal_name_ctrl', array(
        'label'             =>  __('Principal Name', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_principal_name_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_principal_designation_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_principal_designation_ctrl', array(
        'label'             =>  __('Designation', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_principal_designation_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_principal_info_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_principal_info_ctrl', array(
        'label'             =>  __('Information', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_principal_info_settings',
        'type'              =>  'textarea'
    ));

    $wp_customize->add_setting('learnegy_principal_bio_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_principal_bio_ctrl', array(
        'label'             =>  __('Biography/Speech', 'learnegy'),
        'section'           =>  'learnegy_teacher',
        'settings'          =>  'learnegy_principal_bio_settings',
        'type'              =>  'textarea'
    ));