<?php
    $wp_customize->add_section( 'educare_event', array(
        'title' => 'Event',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_event_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_event_ctrl', array(
        'label'             =>  __('Show Event Section', 'educare'),
        'section'           =>  'educare_event',
        'settings'          =>  'educare_show_event_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_event_subheading_settings', array(
        'default'           =>  'Our Recent',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_event_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_event',
        'settings'          =>  'educare_event_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_event_heading_settings', array(
        'default'           =>  'Events',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_event_heading_ctrl', array(
        'label'             =>  __('Heading', 'educare'),
        'section'           =>  'educare_event',
        'settings'          =>  'educare_event_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_show_event_btn_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_event_btn_ctrl', array(
        'label'             =>  __('Show Event Section Button', 'educare'),
        'section'           =>  'educare_event',
        'settings'          =>  'educare_show_event_btn_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_event_btn_label_settings', array(
        'default'           =>  'See More',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_event_btn_label_ctrl', array(
        'label'             =>  __('Button Label', 'educare'),
        'section'           =>  'educare_event',
        'settings'          =>  'educare_event_btn_label_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_event_btn_link_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_event_btn_link_ctrl', array(
        'label'             =>  __('Button Link', 'educare'),
        'section'           =>  'educare_event',
        'settings'          =>  'educare_event_btn_link_settings',
        'type'              =>  'text'
    ));