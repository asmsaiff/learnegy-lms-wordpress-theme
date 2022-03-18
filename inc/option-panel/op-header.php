<?php
    $wp_customize->add_section( 'learnegy_topbar', array(
        'title' => 'Header',
        'panel' => 'learnegy',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_topbar_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_topbar_ctrl', array(
        'label'             =>  __('Show topbar', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_show_topbar_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_topbar_left_text_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_topbar_left_text_ctrl', array(
        'label'             =>  __('Left Text', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_topbar_left_text_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_topbar_tel_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_topbar_tel_ctrl', array(
        'label'             =>  __('Phone Number', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_topbar_tel_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_topbar_email_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_topbar_email_ctrl', array(
        'label'             =>  __('Email Address', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_topbar_email_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_show_topbar_right_btn_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_topbar_right_btn_ctrl', array(
        'label'             =>  __('Show right side button', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_show_topbar_right_btn_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_show_topbar_right_btn_label_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_show_topbar_right_btn_label_ctrl', array(
        'label'             =>  __('Button Label', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_show_topbar_right_btn_label_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_show_topbar_right_btn_link_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_show_topbar_right_btn_link_ctrl', array(
        'label'             =>  __('Button Link', 'learnegy'),
        'section'           =>  'learnegy_topbar',
        'settings'          =>  'learnegy_show_topbar_right_btn_link_settings',
        'type'              =>  'text'
    ));