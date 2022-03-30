<?php
    $wp_customize->add_section( 'learnegy_footer', array(
        'title'         => __('Footer', 'learnegy'),
        'panel'         => 'learnegy',
        'priority'      => 2,
    ));

    $wp_customize->add_setting('learnegy_footer_credit_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('learnegy_footer_credit_ctrl', array(
        'label'             =>  __('Footer Credit', 'learnegy'),
        'section'           =>  'learnegy_footer',
        'settings'          =>  'learnegy_footer_credit_settings',
        'type'              =>  'text'
    ));