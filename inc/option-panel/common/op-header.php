<?php
    $wp_customize->add_section( 'pe_section_2', array(
        'title' => 'Section 2 Test',
        'panel' => 'educare_header',
        'priority' => 2,
    ));

    $wp_customize->add_setting( 'pe_test_2', array(
        'default' => 'default value here',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control( 'pe_test_2', array(
        'type' => 'text',
        'label' => 'Some text control 2',
        'section' => 'pe_section_2',
    ));

    $wp_customize->add_setting( 'educare_home_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'educare_home_item_ctrl', array(
        'label'                                             => esc_html__('Accordion Item','educare'),
        'section'                                           => 'pe_section_2',
        'settings'                                          =>  'educare_home_item_settings',
        'customizer_repeater_title_control'                 => true,
        'customizer_repeater_text_control'                  => true,
    )));