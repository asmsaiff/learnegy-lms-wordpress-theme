<?php
    $wp_customize->add_section( 'educare_homepage_notice', array(
        'title' => 'Notice Board',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_home_notice_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_home_notice_ctrl', array(
        'label'             =>  __('Show Notice Section', 'educare'),
        'section'           =>  'educare_homepage_notice',
        'settings'          =>  'educare_show_home_notice_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_homepage_notice_subheading_settings', array(
        'default'           =>  'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_homepage_notice_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_homepage_notice',
        'settings'          =>  'educare_homepage_notice_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_homepage_notice_heading_settings', array(
        'default'           =>  'Educare School & College',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_homepage_notice_heading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_homepage_notice',
        'settings'          =>  'educare_homepage_notice_heading_settings',
        'type'              =>  'text'
    ));