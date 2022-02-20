<?php
    define( 'CUSTOMIZER_REPEATER_VERSION', '1.1.0' );

    require_once get_template_directory() . '/inc/educare-repeater.php';
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
        wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        wp_enqueue_style( 'fontawesome-css', get_template_directory_uri().'/assets/css/all.css');
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
        wp_enqueue_style( 'theme-style-css', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style( 'educare-customize-controls', get_template_directory_uri().'/assets/css/educare-customize-controls.css', array(), '1.0' );
        wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('main-css', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script( 'popper-js', get_template_directory_uri().'/assets/js/popper.js', array('jquery'), null, true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'), null, true );
        wp_enqueue_script( 'educare-customize-controls-js', get_template_directory_uri().'/assets/js/educare-customize-controls.js', array(), '1.0', true );
        wp_enqueue_script( 'main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'educare_assets_enqueue' );

    remove_filter( 'the_content', 'wpautop');
    remove_filter( 'the_excerpt', 'wpautop');

    function educare_head_styles() {
?>
<style>
    .news-letter-section {
        background: url("<?php echo esc_url( get_theme_mod('educare_newsletter_bg_settings')); ?>");
        background-size: cover;
        background-repeat: no-repeat;
        padding: 100px 0;
        position: relative;
        z-index: 11;
    }
</style>
<?php
    }
    add_action('wp_head', 'educare_head_styles');