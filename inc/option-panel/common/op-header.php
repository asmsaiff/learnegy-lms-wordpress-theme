<?php
    $wp_customize->add_section( 'pe_section', array(
        'title' => 'Header',
        'panel' => 'educare_main_panel',
    ));

    $wp_customize->add_setting( 'pe_test', array(
        'default' => 'default value here',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control( 'pe_test', array(
        'type' => 'text',
        'label' => 'Some text control',
        'section' => 'pe_section',
    ));