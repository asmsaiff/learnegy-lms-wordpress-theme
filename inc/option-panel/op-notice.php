<?php
    $wp_customize->add_section( 'learnegy_homepage_notice', array(
        'title' => 'Notice Board',
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_home_notice_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_home_notice_ctrl', array(
        'label'             =>  __('Show Notice Section', 'learnegy'),
        'section'           =>  'learnegy_homepage_notice',
        'settings'          =>  'learnegy_show_home_notice_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_homepage_notice_subheading_settings', array(
        'default'           =>  'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_homepage_notice_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_homepage_notice',
        'settings'          =>  'learnegy_homepage_notice_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_homepage_notice_heading_settings', array(
        'default'           =>  'learnegy School & College',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_homepage_notice_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_homepage_notice',
        'settings'          =>  'learnegy_homepage_notice_heading_settings',
        'type'              =>  'text'
    ));