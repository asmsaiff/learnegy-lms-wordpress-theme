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
                    <div class="col">
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
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-coureses-start-second-close  -->
    </section>
</main>


<?php
    get_footer();