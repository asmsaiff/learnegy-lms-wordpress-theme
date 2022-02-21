<?php
    /**
     * Template Name: Event Archive
     */

    get_header();
?>

      <main>
        <!-- our-event-strat  -->
        <section class="event">
            <div class="main-container">
                <div class="container">
                    <?php
                        $educare_event = new WP_Query(array(
                            'category_name'         =>  'event',
                            'posts_per_page'        =>  10
                        ));

                        if($educare_event->post_count >= 1) :
                    ?>
                    <div class="row">
                        <?php
                            while($educare_event->have_posts()) :
                                $educare_event->the_post();
                        ?>
                        <div class="col-md-6">
                            <div class="card mt-4 event-card">
                                <div class="row">
                                    <div class="col-xl-4 col-md-12 text-md-center">
                                        <div class="event-img text-center">
                                            <?php
                                                if(has_post_thumbnail()) {
                                                    the_post_thumbnail();
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-md-12">
                                        <div class="event-header d-flex justify-content-between">
                                            <?php
                                                $event_meta = get_field('event_information');

                                                if($event_meta['place_location_auditorium']) :
                                            ?>
                                            <div class="event-address d-flex">
                                                <span><i class="fas fa-globe-europe"></i></span>
                                                <p>
                                                    <?php
                                                        echo esc_html($event_meta['place_location_auditorium']);
                                                    ?>
                                                </p>
                                            </div>
                                            <?php
                                                endif;

                                                if($event_meta['event_date_time']) :
                                            ?>
                                            <div class="event-date d-flex">
                                                <span><i class="far fa-calendar"></i></span>
                                                <p>
                                                    <?php
                                                        echo esc_html($event_meta['event_date_time']);
                                                    ?>
                                                </p>
                                            </div>
                                            <?php
                                                endif;
                                            ?>
                                        </div>
                                        <div class="event-card-title">
                                            <h5>
                                                <?php the_title(); ?>
                                            </h5>
                                        </div>
                                        <div class="event-card-info">
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                        <a class="event-view-details mt-2" href="<?php the_permalink(); ?>">
                                            <?php _e('View Details', 'educare'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </section>
        <!-- our-events-close  -->

        <?php get_template_part('template-parts/educare-newsletter'); ?>
      </main>
      
<?php
    get_footer();