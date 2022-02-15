<?php
    require_once get_template_directory() . '/lib/educare-customizer-panels.php';

    function pe_customize_register( $wp_customize ) {
        $wp_customize->register_panel_type( 'EduCare_WP_Customize_Panel' );
        $wp_customize->register_section_type( 'EduCare_WP_Customize_Section' );

        /**
         *  ================================================
         *  ================= Header Panel =================
         *  ================================================
         * 
         *  You can customize those information from Customizer > Craftnce Options > Footer Section Panel.
         *  You can also override the functions using child theme provided by Craftnce
         */
        $educare_main_panel = new EduCare_WP_Customize_Panel( $wp_customize, 'educare_main_panel', array(
            'title'             =>      'EduCare Theme Options',
            'priority'          =>      1,
        ));
        $wp_customize->add_panel( $educare_main_panel );

        require_once get_theme_file_path('/inc/option-panel/common/op-header.php');
    }

    add_action( 'customize_register', 'pe_customize_register' );