<?php

die('did');

    $wp_customize->add_section( 'educare_topbar', array(
        'title'                 =>      'Top Bar',
        'panel'                 =>      'educare_header',
    ));

    $wp_customize->add_setting( 'educare_topbar_show_settings', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));

    $wp_customize->add_control( 'educare_topbar_show_ctrl', array(
        'label'             =>  __('Show topbar', 'educare'),
        'section'           =>  'educare_header',
        'settings'          =>  'educare_topbar_show_settings',
        'type'              =>  'checkbox'
    ));