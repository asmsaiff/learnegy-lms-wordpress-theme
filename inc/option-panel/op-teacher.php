<?php
    $wp_customize->add_section( 'educare_teacher', array(
        'title' => 'Teacher',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_teacher_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_teacher_ctrl', array(
        'label'             =>  __('Show Teacher Section', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_show_teacher_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_teacher_subheading_settings', array(
        'default'           => 'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_teacher_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_teacher_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_teacher_heading_settings', array(
        'default'           => 'Expert Teachers',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_teacher_heading_ctrl', array(
        'label'             =>  __('Heading', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_teacher_heading_settings',
        'type'              =>  'text'
    ));

    // Archive Page Options
    // vop = voice of principal
    $wp_customize->add_setting('educare_show_principal_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_principal_ctrl', array(
        'label'             =>  __('Show Archive Page Principal Section', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_show_principal_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_vop_sec_heading_settings', array(
        'default'           => 'Principal of EduCare School',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_vop_sec_heading_ctrl', array(
        'label'             =>  __('Heading', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_vop_sec_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_principal_image_settings', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'educare_principal_image_ctrl', array(
        'label'             =>  __('Principal Profile Picture', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_principal_image_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'educare'),
            'remove'        => __('Remove Image', 'educare'),
            'change'        => __('Change Image', 'educare'),
        )
    )));

    $wp_customize->add_setting('educare_principal_name_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_principal_name_ctrl', array(
        'label'             =>  __('Principal Name', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_principal_name_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_principal_designation_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_principal_designation_ctrl', array(
        'label'             =>  __('Designation', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_principal_designation_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_principal_info_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_principal_info_ctrl', array(
        'label'             =>  __('Information', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_principal_info_settings',
        'type'              =>  'textarea'
    ));

    $wp_customize->add_setting('educare_principal_bio_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_principal_bio_ctrl', array(
        'label'             =>  __('Biography/Speech', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_principal_bio_settings',
        'type'              =>  'textarea'
    ));