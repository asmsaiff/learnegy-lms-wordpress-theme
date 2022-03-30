<?php
    $wp_customize->add_section( 'learnegy_course', array(
        'title' => __('Course', 'learnegy'),
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_course_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_course_ctrl', array(
        'label'             =>  __('Show Course Section', 'learnegy'),
        'section'           =>  'learnegy_course',
        'settings'          =>  'learnegy_show_course_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_course_subheading_settings', array(
        'default'           =>  __('Welcome', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_course_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_course',
        'settings'          =>  'learnegy_course_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_course_heading_settings', array(
        'default'           =>  __('Courses We Offer', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_course_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_course',
        'settings'          =>  'learnegy_course_heading_settings',
        'type'              =>  'text'
    ));