<?php
    $wp_customize->add_section( 'learnegy_homepage_info', array(
        'title' => 'Info',
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_home_info_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_home_info_ctrl', array(
        'label'             =>  __('Show Info Section', 'learnegy'),
        'section'           =>  'learnegy_homepage_info',
        'settings'          =>  'learnegy_show_home_info_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_homepage_info_subheading_settings', array(
        'default'           =>  'Welcome',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_homepage_info_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_homepage_info',
        'settings'          =>  'learnegy_homepage_info_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_homepage_info_heading_settings', array(
        'default'           =>  'learnegy School & College',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_homepage_info_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_homepage_info',
        'settings'          =>  'learnegy_homepage_info_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_homepage_info_desc_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('learnegy_homepage_info_desc_ctrl', array(
        'label'             =>  __('Short Description', 'learnegy'),
        'section'           =>  'learnegy_homepage_info',
        'settings'          =>  'learnegy_homepage_info_desc_settings',
        'type'              =>  'textarea'
    ));

    $wp_customize->add_setting( 'learnegy_homepage_info_item_settings', array(
        'sanitize_callback' => 'learnegy_customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Learnegy_Customizer_Repeater( $wp_customize, 'learnegy_homepage_info_item_ctrl', array(
        'label'                                             => esc_html__('Accordion Item','learnegy'),
        'section'                                           => 'learnegy_homepage_info',
        'settings'                                          =>  'learnegy_homepage_info_item_settings',
        'customizer_repeater_title_control'                 => true,
        'customizer_repeater_text_control'                  => true,
    )));

    $wp_customize->add_setting('learnegy_homepage_info_featured_image_settings', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'learnegy_homepage_info_featured_image_ctrl', array(
        'label'             =>  __('Info Featured Image', 'learnegy'),
        'section'           =>  'learnegy_homepage_info',
        'settings'          =>  'learnegy_homepage_info_featured_image_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'learnegy'),
            'remove'        => __('Remove Image', 'learnegy'),
            'change'        => __('Change Image', 'learnegy'),
        )
    )));
