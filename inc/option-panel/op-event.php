<?php
    $wp_customize->add_section( 'learnegy_event', array(
        'title' => __('Event', 'learnegy'),
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_event_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_event_ctrl', array(
        'label'             =>  __('Show Event Section', 'learnegy'),
        'section'           =>  'learnegy_event',
        'settings'          =>  'learnegy_show_event_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_event_subheading_settings', array(
        'default'           =>  __('Our Recent', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_event_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_event',
        'settings'          =>  'learnegy_event_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_event_heading_settings', array(
        'default'           =>  __('Events', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_event_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_event',
        'settings'          =>  'learnegy_event_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_show_event_btn_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_event_btn_ctrl', array(
        'label'             =>  __('Show Event Section Button', 'learnegy'),
        'section'           =>  'learnegy_event',
        'settings'          =>  'learnegy_show_event_btn_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_event_btn_label_settings', array(
        'default'           =>  __('See More', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_event_btn_label_ctrl', array(
        'label'             =>  __('Button Label', 'learnegy'),
        'section'           =>  'learnegy_event',
        'settings'          =>  'learnegy_event_btn_label_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_event_btn_link_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_event_btn_link_ctrl', array(
        'label'             =>  __('Button Link', 'learnegy'),
        'section'           =>  'learnegy_event',
        'settings'          =>  'learnegy_event_btn_link_settings',
        'type'              =>  'text'
    ));