    <!-- footer-start  -->
    <footer class="footer">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-massage">
                    <?php
                        if(get_theme_mod('educare_footer_credit_settings')) {
                            echo esc_html( get_theme_mod('educare_footer_credit_settings'));
                        } else {
                            echo '@ EduCare | Developed by <a href="https://mamurjor.com/">Mamurjor IT</a> | 2022';
                        }
                    ?>
                </div>
            </div>
        </div>
    </footer> 
    <!-- footer-close  -->

    <!-- back-to-top  -->
    <button onclick="topFunction()" id="myBtn" title="<?php _e('Go to top', 'educare'); ?>"><i class="fas fa-arrow-up"></i></button>

    <?php wp_footer(); ?>
</body>
</html>