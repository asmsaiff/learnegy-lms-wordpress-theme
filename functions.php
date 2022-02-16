<?php
    require_once get_template_directory() . '/lib/educare-nav.php';
    require_once get_template_directory() . '/inc/config/customizer-config.php';
    require_once get_template_directory() . '/inc/educare-plugins.php';

    if(!function_exists('educare_theme_setup')) {
        function educare_theme_setup() {
            // Load Theme TextDomain
            load_theme_textdomain('educare');
    
            // Theme Supports
            add_theme_support('title-tag');
            add_theme_support('description');
            add_theme_support('widgets');
            add_theme_support('post-thumbnails');
            add_theme_support('custom-header');
            add_theme_support('custom-logo');
            add_theme_support('custom-background');
            add_theme_support( 'automatic-feed-links' );
    
            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
            );
    
            register_nav_menus(array(
                'primary-menu'              =>  __('Primary Menu', 'educare'),
            ));
        }
        add_action('after_setup_theme', 'educare_theme_setup');
    }

    function educare_assets_enqueue() {
        // CSS Enqueue
        wp_enqueue_style('gFont-one', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,800;1,300;1,400;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap');
        wp_enqueue_style('gFont-two', 'https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,800;1,300;1,400;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap');
        wp_enqueue_style( 'fontawesome-css', get_template_directory_uri().'/assets/css/all.css');
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
        wp_enqueue_style( 'theme-style-css', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('main-css', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script( 'popper-js', get_template_directory_uri().'/assets/js/popper.js', array('jquery'), null, true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'), null, true );
        wp_enqueue_script( 'main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'educare_assets_enqueue' );