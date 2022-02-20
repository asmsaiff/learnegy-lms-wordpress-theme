<?php
    $wp_customize->add_section( 'educare_blog', array(
        'title' => 'Blog',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_blog_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_blog_ctrl', array(
        'label'             =>  __('Show Blog Section', 'educare'),
        'section'           =>  'educare_blog',
        'settings'          =>  'educare_show_blog_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_blog_subheading_settings', array(
        'default'           =>  'Discover Your Perfect',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_blog_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_blog',
        'settings'          =>  'educare_blog_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_blog_heading_settings', array(
        'default'           =>  'Latest News',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_blog_heading_ctrl', array(
        'label'             =>  __('Heading', 'educare'),
        'section'           =>  'educare_blog',
        'settings'          =>  'educare_blog_heading_settings',
        'type'              =>  'text'
    ));