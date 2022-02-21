<?php
    $wp_customize->add_section( 'educare_topbar', array(
        'title' => 'Header',
        'panel' => 'educare',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_topbar_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_topbar_ctrl', array(
        'label'             =>  __('Show topbar', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_show_topbar_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_topbar_left_text_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_topbar_left_text_ctrl', array(
        'label'             =>  __('Left Text', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_topbar_left_text_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_topbar_tel_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_topbar_tel_ctrl', array(
        'label'             =>  __('Phone Number', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_topbar_tel_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_topbar_email_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_topbar_email_ctrl', array(
        'label'             =>  __('Email Address', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_topbar_email_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_show_topbar_right_btn_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_topbar_right_btn_ctrl', array(
        'label'             =>  __('Show right side button', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_show_topbar_right_btn_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_show_topbar_right_btn_label_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_show_topbar_right_btn_label_ctrl', array(
        'label'             =>  __('Button Label', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_show_topbar_right_btn_label_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_show_topbar_right_btn_link_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_show_topbar_right_btn_link_ctrl', array(
        'label'             =>  __('Button Link', 'educare'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_show_topbar_right_btn_link_settings',
        'type'              =>  'text'
    ));