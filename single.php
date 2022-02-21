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
                    <div class="col-xl-8">
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
                                } else {
                                    _e('<p class="py-5">You can not comment in this post right now!</p>', 'educare');
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <?php
                            echo the_field('educare_post_meta');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-coureses-start-second-close  -->
    </section>
</main>


<?php
    get_footer();