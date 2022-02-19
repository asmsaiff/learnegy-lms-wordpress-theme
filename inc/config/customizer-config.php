<?php
    require_once get_template_directory() . '/lib/educare-customizer-panels.php';

    function pe_customize_register( $wp_customize ) {

        // Has to be at the top
        $wp_customize->register_panel_type( 'PE_WP_Customize_Panel' );

        $educare_theme_options = new PE_WP_Customize_Panel( $wp_customize, 'educare_theme_options', array(
            'title'             => 'EduCare Theme Options',
            'capability'        => 'edit_theme_options',
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
            'capability'        => 'edit_theme_options',
            'panel'             => 'educare_theme_options',
        ));
        $wp_customize->add_panel( $educare_header );

        require_once get_template_directory() . '/inc/option-panel/common/op-header.php';
    }

    add_action( 'customize_register', 'pe_customize_register' );