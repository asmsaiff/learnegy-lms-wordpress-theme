<?php
    require_once get_template_directory() . '/lib/educare-customizer-panels.php';

    function pe_customize_register( $wp_customize ) {

        // Has to be at the top
        $wp_customize->register_panel_type( 'PE_WP_Customize_Panel' );
        $wp_customize->register_section_type( 'PE_WP_Customize_Section' );

        $educare_theme_options = new PE_WP_Customize_Panel( $wp_customize, 'educare_theme_options', array(
            'title'             => 'EduCare Theme Options',
            'priority'          => 1,
        ));
        $wp_customize->add_panel( $educare_theme_options );

        /**
         * ================================================
         * ================= Header Panel =================
         * ================================================
         */
        $educare_header = new PE_WP_Customize_Panel( $wp_customize, 'educare_header', array(
            'title'             => 'Header',
            'panel'             => 'educare_theme_options',
        ));
        $wp_customize->add_panel( $educare_header );

        require_once get_template_directory() . '/inc/option-panel/common/op-header.php';

        // // Add example section and controls to the middle (second) panel
        // $wp_customize->add_section( 'pe_section_2', array(
        //     'title'             => 'Section 2 Test',
        //     'panel'             => 'educare_header',
        //     'priority'          => 2,
        // ));

        // $wp_customize->add_setting( 'pe_test_2', array(
        //     'default'           => 'default value here',
        //     'sanitize_callback' => 'wp_kses_post',
        //     'transport'         => 'postMessage',
        // ));

        // $wp_customize->add_control( 'pe_test_2', array(
        //     'type'              => 'text',
        //     'label'             => 'Some text control 2',
        //     'section'           => 'pe_section_2',
        // ));
    }

    add_action( 'customize_register', 'pe_customize_register' );