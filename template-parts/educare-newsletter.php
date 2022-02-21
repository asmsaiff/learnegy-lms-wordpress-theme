<!-- Our Newsletter-start  -->
<section class="p-0">
    <div class="main-container news-letter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-letter">
                        <div class="news-letter-header">
                            <h4>
                                <?php echo esc_html(get_theme_mod('educare_newsletter_subheading_settings', 'Subscribe')); ?>
                            </h4>
                            <h2 class="text-white">
                                <?php echo esc_html(get_theme_mod('educare_newsletter_heading_settings', 'Our Newsletter')); ?>
                            </h2>
                            <p class="text-white">
                                <?php echo esc_html(get_theme_mod('educare_newsletter_desc_settings')); ?>
                            </p>
                        </div>
                        <?php
                            if(is_active_sidebar( 'educare_newsletter_optin' )) {
                                dynamic_sidebar( 'educare_newsletter_optin' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Newsletter-close  -->