<?php
    get_header();
?>

<main id="content">
    <!-- single-event-details-start -->
    <section>
        <!-- single-coureses-start-second  -->
        <div class="main-container">
            <div class="container">
                <div class="row">
                    <?php
                        if(get_theme_mod('learnegy_show_blog_single_sidebar_settings')) {
                            $single_col_width = 8;
                        } else {
                            $single_col_width = 12;
                        }
                    ?>
                    <div class="col-xl-<?php echo esc_attr( $single_col_width ); ?>">
                        <div class="mt-2 event-document">
                            <?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail( 'large', array('class'=>'w-100 mb-4 img-fluid h-auto') );
                                }
                            ?>
                            <h2 class="fw-bold">
                                <?php the_title(); ?>
                            </h2>
                            <?php
                                the_content();

                                wp_link_pages();
                            ?>
                        </div>

                        <div class="comments-box mt-5">
                            <?php
                                if(comments_open()) {
                                    comments_template();
                                }
                            ?>
                        </div>
                    </div>
                    <div class="<?php echo esc_attr(get_theme_mod('learnegy_show_blog_single_sidebar_settings') ? "col-xl-4" : "d-none"); ?>">
                        <?php get_sidebar( 'single' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-coureses-start-second-close  -->
    </section>
</main>

<?php
    get_footer();