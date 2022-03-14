<?php
    get_header();
?>

    <main id="content">
        <!-- blog-section-start  -->
        <section>
            <div class="main-container">
                <div class="container">
                    <div class="row">
                        <?php
                            if(get_theme_mod('learnegy_show_blog_sidebar_settings')) {
                                $col_width = 8;
                            } else {
                                $col_width = 12;
                            }
                        ?>
                        <div class="col-xl-<?php echo esc_attr( $col_width ); ?>">
                            <div class="row">
                                <?php
                                    while(have_posts()) :
                                        the_post();
                                ?>
                                    <div <?php post_class($col_width == 12 ? "col-md-6 col-xl-4" : "col-md-6"); ?>>
                                        <div class="card news-card mt-4">
                                            <?php
                                                if(has_post_thumbnail()) {
                                                    the_post_thumbnail('large', array('class'=>'img-fluid w-100 h-auto'));
                                                }
                                            ?>
                                            <div class="event-header d-flex justify-content-between">
                                                <div class="event-address d-flex">
                                                    <span><i class="fas fa-globe-europe"></i></span>
                                                    <p>
                                                        <?php the_category(' '); ?>
                                                    </p>
                                                </div>
                                                <div class="event-date d-flex">
                                                    <span><i class="far fa-calendar"></i></span>
                                                    <p><?php echo get_the_date(); ?></p>
                                                </div>
                                            </div>
                                            <div class="news-title">
                                                <h4><?php the_title(); ?></h4>
                                                <p class="mt-3"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                                            </div>
                                            <div class="news-read-more mt-2">
                                                <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'learnegy'); ?></a>
                                                <span><i class="fas fa-arrow-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                ?>

                                <div class="container">
                                    <div class="pagination-part d-flex justify-content-center align-items-center">
                                        <nav aria-label="Page navigation example">
                                            <?php
                                                the_posts_pagination();
                                            ?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="<?php echo esc_attr(get_theme_mod('learnegy_show_blog_sidebar_settings') ? "col-xl-4" : "d-none"); ?>">
                            <?php get_sidebar(); ?>
                        </div>
                        
                        <!-- tags-close  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-section-close  -->
    </main>

<?php
    get_footer();