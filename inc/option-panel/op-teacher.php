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
        'default'           =>  'Welcome',
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
        'default'           =>  'Expert Teachers',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_teacher_heading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_teacher',
        'settings'          =>  'educare_teacher_heading_settings',
        'type'              =>  'text'
    ));