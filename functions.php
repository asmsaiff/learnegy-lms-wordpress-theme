<?php
    define( 'CUSTOMIZER_REPEATER_VERSION', '1.1.0' );

    require_once get_template_directory() . '/inc/educare-post-meta.php';
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
        wp_enqueue_style('educare_google-font', '//fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        wp_enqueue_style( 'educare_fontawesome-css', get_template_directory_uri().'/assets/css/all.css');
        wp_enqueue_style( 'educare_bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
        wp_enqueue_style( 'educare_theme-style-css', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style( 'educare_responsive-css', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('educare_main-css', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script( 'comment-reply' );
        wp_enqueue_script( 'educare_popper-js', get_template_directory_uri().'/assets/js/popper.js', array('jquery'),
        null, true );
        wp_enqueue_script( 'educare_bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js',
        array('jquery'), null, true );
        wp_enqueue_script( 'educare_main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null,
        true );
    }
    add_action( 'wp_enqueue_scripts', 'educare_assets_enqueue' );

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
    a:hover {
        text-decoration: underline !important;
    }
</style>
<?php
    }
    add_action('wp_head', 'educare_head_styles');

    function educare_widgets() {
        register_sidebar(array(
            'name'                  =>  __('Newsletter Section', 'educare'),
            'description'           =>  __('Add newsletter shortcode or form in this area', 'educare'),
            'id'                    =>  'educare_newsletter_optin',
            'before_widget'         => '<div>',
            'after_widget'          =>  '</div>'
        ));

        register_sidebar(array(
            'name'                  =>  __('Blog Sidebar', 'educare'),
            'description'           =>  __('Blog archive page sidebar', 'educare'),
            'id'                    =>  'blog-sidebar',
            'before_widget'         => '<div>',
            'after_widget'          =>  '</div>'
        ));
    }
    add_action('widgets_init', 'educare_widgets');

    function educare_skip_link_focus_fix() {
    ?>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
            .addEventListener("hashchange", function () {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (
                    /^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
            }, !1);
    </script>
    <?php
}
add_action( 'wp_print_footer_scripts', 'educare_skip_link_focus_fix' );