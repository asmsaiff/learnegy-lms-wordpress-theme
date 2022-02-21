<?php
    $wp_customize->add_section( 'educare_footer', array(
        'title'         => 'Footer',
        'panel'         => 'educare',
        'priority'      => 2,
    ));

    $wp_customize->add_setting('educare_footer_credit_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('educare_footer_credit_ctrl', array(
        'label'             =>  __('Footer Credit', 'educare'),
        'section'           =>  'educare_footer',
        'settings'          =>  'educare_footer_credit_settings',
        'type'              =>  'textarea'
    ));