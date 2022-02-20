<?php
    $wp_customize->add_section( 'educare_topbar', array(
        'title' => 'Topbar',
        'panel' => 'educare_header',
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
        'label'             =>  __('Show topbar', 'craftnce'),
        'section'           =>  'educare_topbar',
        'settings'          =>  'educare_show_topbar_settings',
        'type'              =>  'checkbox'
    ));
