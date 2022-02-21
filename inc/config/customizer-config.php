<?php
    require_once get_template_directory() . '/lib/educare-customizer-panels.php';

    function educare_customize_register( $wp_customize ) {

        // Has to be at the top
        $wp_customize->register_panel_type( 'EduCare_WP_Customize_Panel' );

        $educare_theme_options = new EduCare_WP_Customize_Panel( $wp_customize, 'educare_theme_options', array(
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
        $educare_header = new EduCare_WP_Customize_Panel( $wp_customize, 'educare', array(
            'title'             => 'Educare',
            'capability'        => 'edit_theme_options',
            'panel'             => 'educare_theme_options',
            'priority'          => 1,
        ));
        $wp_customize->add_panel( $educare_header );

        require_once get_template_directory() . '/inc/option-panel/op-header.php';
        require_once get_template_directory() . '/inc/option-panel/op-footer.php';

        /**
         * ================================================
         * ================= Homepage Panel ===============
         * ================================================
         */
        $educare_header = new EduCare_WP_Customize_Panel( $wp_customize, 'educare_homepage', array(
            'title'             => 'Educare Homepage Options',
            'capability'        => 'edit_theme_options',
            'panel'             => 'educare_theme_options',
            'priority'          => 2,
        ));
        $wp_customize->add_panel( $educare_header );

        require_once get_template_directory() . '/inc/option-panel/op-info.php';
        require_once get_template_directory() . '/inc/option-panel/op-notice.php';
        require_once get_template_directory() . '/inc/option-panel/op-course.php';
        require_once get_template_directory() . '/inc/option-panel/op-teacher.php';
        require_once get_template_directory() . '/inc/option-panel/op-faq.php';
        require_once get_template_directory() . '/inc/option-panel/op-event.php';
        require_once get_template_directory() . '/inc/option-panel/op-blog.php';
        require_once get_template_directory() . '/inc/option-panel/op-newsletter.php';
    }

    add_action( 'customize_register', 'educare_customize_register' );