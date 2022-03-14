<?php
    /**
     * Template Name: Notice Archive
     */

    get_header();
?>

    <main id="content">
        <!-- Notice-board-section-start  -->
        <section class="notice-board">
            <div class="main-container p-3">
                <div class="container">
                    <div class="row">
                        <?php
                        $learnegy_notice = new WP_Query(array(
                            'category_name'         =>  'notice',
                            'posts_per_page'        =>  24
                        ));

                        if($learnegy_notice->post_count >= 1) :
                            while($learnegy_notice->have_posts()) :
                                $learnegy_notice->the_post();
                    ?>
                        <div class="col-xl-6 mt-2">
                            <div class="notice-card overflow-hidden">
                                <div class="row justify-content-between">
                                    <div
                                        class="notice-date d-flex justify-content-center align-items-center col-md-1 p-0">
                                        <div class="p-3 text-center">
                                            <i class="fa fa-bell fs-2 ps-3" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="pt-4">
                                            <?php the_title(); ?>
                                        </h5>
                                        <div class="d-flex notice-footer gap-3">
                                            <div class="time d-flex">
                                                <span><i class="far fa-clock"></i></span>
                                                <p><?php esc_html(the_field('date_time')); ?></p>
                                            </div>
                                            <div class="time d-flex">
                                                <span><i class="far fa-clock"></i></span>
                                                <p><?php esc_html(the_field('en_category')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <div class="notice-btn-btn d-flex justify-content-end pb-3">
                                            <a class="notice-btn mt-4" href="<?php the_permalink(); ?>">
                                                <?php _e('View Notice', 'learnegy'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Notice-board-section-close  -->


        <?php get_template_part('template-parts/learnegy-newsletter'); ?>
    </main>

<?php
    get_footer();