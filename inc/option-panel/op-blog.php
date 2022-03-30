<?php
    $wp_customize->add_section( 'learnegy_blog', array(
        'title' => __('Blog', 'learnegy'),
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_blog_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_blog_ctrl', array(
        'label'             =>  __('Show Blog Section', 'learnegy'),
        'section'           =>  'learnegy_blog',
        'settings'          =>  'learnegy_show_blog_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_show_blog_sidebar_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_blog_sidebar_ctrl', array(
        'label'             =>  __('Show Blog Page Sidebar', 'learnegy'),
        'section'           =>  'learnegy_blog',
        'settings'          =>  'learnegy_show_blog_sidebar_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_show_blog_single_sidebar_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_blog_single_sidebar_ctrl', array(
        'label'             =>  __('Show Blog Single Page Sidebar', 'learnegy'),
        'section'           =>  'learnegy_blog',
        'settings'          =>  'learnegy_show_blog_single_sidebar_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_blog_subheading_settings', array(
        'default'           =>  __('Discover Your Perfect', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('learnegy_blog_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_blog',
        'settings'          =>  'learnegy_blog_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_blog_heading_settings', array(
        'default'           =>  __('Latest News', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_blog_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_blog',
        'settings'          =>  'learnegy_blog_heading_settings',
        'type'              =>  'text'
    ));