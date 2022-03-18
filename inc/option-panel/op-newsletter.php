<?php
    $wp_customize->add_section( 'learnegy_newsletter', array(
        'title' => 'Newsletter',
        'panel' => 'learnegy_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('learnegy_show_newsletter_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('learnegy_show_newsletter_ctrl', array(
        'label'             =>  __('Show Newsletter Section', 'learnegy'),
        'section'           =>  'learnegy_newsletter',
        'settings'          =>  'learnegy_show_newsletter_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('learnegy_newsletter_subheading_settings', array(
        'default'           =>  'Subscribe',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_newsletter_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'learnegy'),
        'section'           =>  'learnegy_newsletter',
        'settings'          =>  'learnegy_newsletter_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('learnegy_newsletter_heading_settings', array(
        'default'           =>  'Our Newsletter',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('learnegy_newsletter_heading_ctrl', array(
        'label'             =>  __('Heading', 'learnegy'),
        'section'           =>  'learnegy_newsletter',
        'settings'          =>  'learnegy_newsletter_heading_settings',
        'type'              =>  'text'
    ));
    $wp_customize->add_setting('learnegy_newsletter_desc_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('learnegy_newsletter_desc_ctrl', array(
        'label'             =>  __('Short Description', 'learnegy'),
        'section'           =>  'learnegy_newsletter',
        'settings'          =>  'learnegy_newsletter_desc_settings',
        'type'              =>  'textarea'
    ));

    $wp_customize->add_setting('learnegy_newsletter_bg_settings', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'learnegy_newsletter_bg_ctrl', array(
        'label'             =>  __('Info Featured Image', 'learnegy'),
        'section'           =>  'learnegy_newsletter',
        'settings'          =>  'learnegy_newsletter_bg_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'learnegy'),
            'remove'        => __('Remove Image', 'learnegy'),
            'change'        => __('Change Image', 'learnegy'),
        )
    )));