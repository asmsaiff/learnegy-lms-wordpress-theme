<?php
    $wp_customize->add_section( 'educare_course', array(
        'title' => 'Course',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_course_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_course_ctrl', array(
        'label'             =>  __('Show Course Section', 'educare'),
        'section'           =>  'educare_course',
        'settings'          =>  'educare_show_course_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_course_subheading_settings', array(
        'default'           =>  'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_course_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_course',
        'settings'          =>  'educare_course_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_course_heading_settings', array(
        'default'           =>  'Courses We Offer',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_course_heading_ctrl', array(
        'label'             =>  __('Heading', 'educare'),
        'section'           =>  'educare_course',
        'settings'          =>  'educare_course_heading_settings',
        'type'              =>  'text'
    ));