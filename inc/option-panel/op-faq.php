<?php
    $wp_customize->add_section( 'learnegy_homepage_faq', array(
        'title' => __('FAQ', 'learnegy'),
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_home_faq_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_home_faq_ctrl', array(
        'label'             =>  __('Show FAQ Section', 'learnegy'),
        'section'           =>  'learnegy_homepage_faq',
        'settings'          =>  'learnegy_show_home_faq_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_homepage_faq_subheading_settings', array(
        'default'           =>  __('Distance Learning', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_homepage_faq_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_homepage_faq',
        'settings'          =>  'learnegy_homepage_faq_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_homepage_faq_heading_settings', array(
        'default'           =>  __('Flexible Study at Your Own Pace, According to Your Own Needs', 'learnegy'),
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_homepage_faq_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_homepage_faq',
        'settings'          =>  'learnegy_homepage_faq_heading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting( 'learnegy_homepage_faq_item_settings', array(
        'sanitize_callback' => 'learnegy_customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Learnegy_Customizer_Repeater( $wp_customize, 'learnegy_homepage_faq_item_ctrl', array(
        'label'                                             => __('Accordion Item','learnegy'),
        'section'                                           => 'learnegy_homepage_faq',
        'settings'                                          =>  'learnegy_homepage_faq_item_settings',
        'customizer_repeater_title_control'                 => true,
        'customizer_repeater_text_control'                  => true,
    )));

    $wp_customize->add_setting('learnegy_homepage_faq_featured_image_settings', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'learnegy_homepage_faq_featured_image_ctrl', array(
        'label'             =>  __('faq Featured Image', 'learnegy'),
        'section'           =>  'learnegy_homepage_faq',
        'settings'          =>  'learnegy_homepage_faq_featured_image_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'learnegy'),
            'remove'        => __('Remove Image', 'learnegy'),
            'change'        => __('Change Image', 'learnegy'),
        )
    )));
