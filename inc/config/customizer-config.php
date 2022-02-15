<?php
    require_once get_template_directory() . '/lib/educare-customizer-panels.php';

    function pe_customize_register( $wp_customize ) {
        // Has to be at the top
        $wp_customize->register_panel_type( 'EduCare_WP_Customize_Panel' );
        $wp_customize->register_section_type( 'EduCare_WP_Customize_Section' );


        $lvl1ParentPanel = new EduCare_WP_Customize_Panel( $wp_customize, 'lvl_1_parent_panel', array(
            'title' => 'Level 1',
            'priority' => 131,
        ));

        $wp_customize->add_panel( $lvl1ParentPanel );

        $lvl2ParentPanel = new EduCare_WP_Customize_Panel( $wp_customize, 'lvl_2_parent_panel', array(
            'title' => 'Level 2',
            'panel' => 'lvl_1_parent_panel',
        ));

        $wp_customize->add_panel( $lvl2ParentPanel );

        $lvl3ParentPanel = new EduCare_WP_Customize_Panel( $wp_customize, 'lvl_3_parent_panel', array(
            'title' => 'Level 3',
            'panel' => 'lvl_2_parent_panel',
            'priority' => 1,
        ));

        $wp_customize->add_panel( $lvl3ParentPanel );

        // Add example section and controls to the final (third) panel
        $wp_customize->add_section( 'pe_section', array(
            'title' => 'Section Test',
            'panel' => 'lvl_3_parent_panel',
        ));

        $wp_customize->add_setting( 'pe_test', array(
            'default' => 'default value here',
            'sanitize_callback' => 'wp_kses_post',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control( 'pe_test', array(
            'type' => 'text',
            'label' => 'Some text control',
            'section' => 'pe_section',
        ));

        // Add example section and controls to the middle (second) panel
        $wp_customize->add_section( 'pe_section_2', array(
            'title' => 'Section 2 Test',
            'panel' => 'lvl_2_parent_panel',
            'priority' => 2,
        ));

        $wp_customize->add_setting( 'pe_test_2', array(
            'default' => 'default value here',
            'sanitize_callback' => 'wp_kses_post',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control( 'pe_test_2', array(
            'type' => 'text',
            'label' => 'Some text control 2',
            'section' => 'pe_section_2',
        ));

        // Add example section and controls to another section
        $lvl1ParentSection = new EduCare_WP_Customize_Section( $wp_customize, 'lvl_1_parent_section', array(
            'title' => 'Level 1 Section',
            'panel' => 'lvl_3_parent_panel',
        ));

        $wp_customize->add_section( $lvl1ParentSection );

        $lv21ParentSection = new EduCare_WP_Customize_Section( $wp_customize, 'lvl_2_parent_section', array(
            'title' => 'Level 2 Section',
            'section' => 'lvl_1_parent_section',
            'panel' => 'lvl_3_parent_panel',
        ));

        $wp_customize->add_section( $lv21ParentSection );

        $wp_customize->add_setting( 'pe_test_3', array(
            'default' => 'default value here',
            'sanitize_callback' => 'wp_kses_post',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control( 'pe_test_3', array(
            'type' => 'text',
            'label' => 'Some text control 3',
            'section' => 'lvl_2_parent_section',
        ));
    }

    add_action( 'customize_register', 'pe_customize_register' );