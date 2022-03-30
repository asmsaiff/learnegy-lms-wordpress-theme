<?php
    require_once get_template_directory() . '/lib/learnegy-customizer-panels.php';

    function learnegy_customize_register( $wp_customize ) {

        // Has to be at the top
        $wp_customize->register_panel_type( 'learnegy_WP_Customize_Panel' );

        $learnegy_theme_options = new learnegy_WP_Customize_Panel( $wp_customize, 'learnegy_theme_options', array(
            'title'             => __('Learnegy Theme Options', 'learnegy'),
            'capability'        => 'edit_theme_options',
            'priority'          => 1,
        ));
        $wp_customize->add_panel( $learnegy_theme_options );

        /**
         * ================================================
         * ================= Header Panel =================
         * ================================================
         */
        $learnegy_header = new learnegy_WP_Customize_Panel( $wp_customize, 'learnegy', array(
            'title'             => __('General', 'learnegy'),
            'capability'        => 'edit_theme_options',
            'panel'             => 'learnegy_theme_options',
            'priority'          => 1,
        ));
        $wp_customize->add_panel( $learnegy_header );

        require_once get_template_directory() . '/inc/option-panel/op-header.php';
        require_once get_template_directory() . '/inc/option-panel/op-footer.php';

        /**
         * ================================================
         * ================= Homepage Panel ===============
         * ================================================
         */
        $learnegy_homepage = new learnegy_WP_Customize_Panel( $wp_customize, 'learnegy_homepage', array(
            'title'             => __('Homepage Options', 'learnegy'),
            'capability'        => 'edit_theme_options',
            'panel'             => 'learnegy_theme_options',
            'priority'          => 2,
        ));
        $wp_customize->add_panel( $learnegy_homepage );

        require_once get_template_directory() . '/inc/option-panel/op-info.php';
        require_once get_template_directory() . '/inc/option-panel/op-notice.php';
        require_once get_template_directory() . '/inc/option-panel/op-course.php';
        require_once get_template_directory() . '/inc/option-panel/op-teacher.php';
        require_once get_template_directory() . '/inc/option-panel/op-faq.php';
        require_once get_template_directory() . '/inc/option-panel/op-event.php';
        require_once get_template_directory() . '/inc/option-panel/op-blog.php';
        require_once get_template_directory() . '/inc/option-panel/op-newsletter.php';
    }

    add_action( 'customize_register', 'learnegy_customize_register' );