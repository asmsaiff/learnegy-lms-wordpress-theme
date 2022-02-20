<?php
    $wp_customize->add_section( 'educare_homepage_info', array(
        'title' => 'Info',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_home_info_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_home_info_ctrl', array(
        'label'             =>  __('Show Info Section', 'educare'),
        'section'           =>  'educare_homepage_info',
        'settings'          =>  'educare_show_home_info_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_homepage_info_subheading_settings', array(
        'default'           =>  'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_homepage_info_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_homepage_info',
        'settings'          =>  'educare_homepage_info_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_homepage_info_heading_settings', array(
        'default'           =>  'Educare School & College',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_homepage_info_heading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_homepage_info',
        'settings'          =>  'educare_homepage_info_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_homepage_info_desc_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('educare_homepage_info_desc_ctrl', array(
        'label'             =>  __('Short Description', 'educare'),
        'section'           =>  'educare_homepage_info',
        'settings'          =>  'educare_homepage_info_desc_settings',
        'type'              =>  'textarea'
    ));

    $wp_customize->add_setting( 'educare_homepage_info_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'educare_homepage_info_item_ctrl', array(
        'label'                                             => esc_html__('Accordion Item','educare'),
        'section'                                           => 'educare_homepage_info',
        'settings'                                          =>  'educare_homepage_info_item_settings',
        'customizer_repeater_title_control'                 => true,
        'customizer_repeater_text_control'                  => true,
    )));

    $wp_customize->add_setting('educare_homepage_info_featured_image_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' =>  function( $file, $setting ) {
            $mimes = array(
                'jpg|jpeg|jpe' => 'image/jpeg',
                'gif'          => 'image/gif',
                'png'          => 'image/png'
            );

            $file_ext = wp_check_filetype( $file, $mimes );
            return ( $file_ext['ext'] ? $file : $setting->default );
        }
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'educare_homepage_info_featured_image_ctrl', array(
        'label'             =>  __('Info Featured Image', 'educare'),
        'section'           =>  'educare_homepage_info',
        'settings'          =>  'educare_homepage_info_featured_image_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'educare'),
            'remove'        => __('Remove Image', 'educare'),
            'change'        => __('Change Image', 'educare'),
        )
    )));
