<?php
    $wp_customize->add_section( 'educare_newsletter', array(
        'title' => 'Newsletter',
        'panel' => 'educare_homepage',
        'priority' => 2,
    ));

    $wp_customize->add_setting('educare_show_newsletter_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('educare_show_newsletter_ctrl', array(
        'label'             =>  __('Show Newsletter Section', 'educare'),
        'section'           =>  'educare_newsletter',
        'settings'          =>  'educare_show_newsletter_settings',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('educare_newsletter_subheading_settings', array(
        'default'           =>  'Subscribe',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_newsletter_subheading_ctrl', array(
        'label'             =>  __('Sub Heading', 'educare'),
        'section'           =>  'educare_newsletter',
        'settings'          =>  'educare_newsletter_subheading_settings',
        'type'              =>  'text'
    ));

    $wp_customize->add_setting('educare_newsletter_heading_settings', array(
        'default'           =>  'Our Newsletter',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('educare_newsletter_heading_ctrl', array(
        'label'             =>  __('Heading', 'educare'),
        'section'           =>  'educare_newsletter',
        'settings'          =>  'educare_newsletter_heading_settings',
        'type'              =>  'text'
    ));
    $wp_customize->add_setting('educare_newsletter_desc_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('educare_newsletter_desc_ctrl', array(
        'label'             =>  __('Short Description', 'educare'),
        'section'           =>  'educare_newsletter',
        'settings'          =>  'educare_newsletter_desc_settings',
        'type'              =>  'textarea'
    ));

    $wp_customize->add_setting('educare_newsletter_bg_settings', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'educare_newsletter_bg_ctrl', array(
        'label'             =>  __('Info Featured Image', 'educare'),
        'section'           =>  'educare_newsletter',
        'settings'          =>  'educare_newsletter_bg_settings',
        'button_labels'     => array(
            'select'        => __('Select Image', 'educare'),
            'remove'        => __('Remove Image', 'educare'),
            'change'        => __('Change Image', 'educare'),
        )
    )));