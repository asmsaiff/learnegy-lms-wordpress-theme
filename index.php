<?php
    get_header();

    if(have_posts()) :
?>

    <main>
        <!-- blog-section-start  -->
        <section>
            <div class="main-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <?php
                                    while(have_posts()) :
                                        the_post();
                                ?>
                                    <div class="col-md-6">
                                        <div class="card news-card mt-4">
                                            <?php
                                                if(has_post_thumbnail()) {
                                                    the_post_thumbnail('large', array('class'=>'img-fluid w-100 h-auto'));
                                                }
                                            ?>
                                            <div class="event-header d-flex justify-content-between">
                                                <div class="event-address d-flex">
                                                    <span><i class="fas fa-globe-europe"></i></span>
                                                    <p>Algolia</p>
                                                </div>
                                                <div class="event-date d-flex">
                                                    <span><i class="far fa-calendar"></i></span>
                                                    <p><?php echo get_the_date(); ?></p>
                                                </div>
                                            </div>
                                            <div class="news-title">
                                                <h4><?php the_title(); ?></h4>
                                                <p class="mt-3"><?php echo get_the_excerpt(); ?></p>
                                            </div>
                                            <div class="news-read-more mt-2">
                                                <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'educare'); ?></a>
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
                            
                        <?php get_sidebar(); ?>
                        <!-- tags-close  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-section-close  -->
    </main>

<?php
    endif;
    get_footer();