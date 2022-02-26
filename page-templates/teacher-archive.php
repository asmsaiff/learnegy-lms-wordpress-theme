<?php
    /**
     * Template Name: Teacher Archive
     */

    get_header();
?>

<main id="content">
    <?php
        if(get_theme_mod('educare_show_principal_settings')) :
    ?>
    <section>
        <div class="main-container">
            <div class="container">
                <div class="teachers-header-title">
                    <h2>
                        <?php
                            echo esc_html(get_theme_mod('educare_vop_sec_heading_settings', 'Principal of EduCare School'));
                        ?>
                    </h2>
                </div>
                <div class="row align-items-center justify-content-center mt-3">
                    <div class="col-xl-4 col-md-6">
                        <div class="card mt-4 p-5 teacher-info">
                            <img src="<?php echo esc_url(get_theme_mod('educare_principal_image_settings')); ?>">
                            <div class="teacher-details">
                                <h2>
                                    <?php
                                        echo esc_html(get_theme_mod('educare_principal_name_settings'));
                                    ?>
                                </h2>
                                <p>
                                    <?php
                                        echo esc_html(get_theme_mod('educare_principal_designation_settings'));
                                    ?>
                                </p>
                            </div>
                            <div class="my-3">
                                <?php
                                    echo esc_html(get_theme_mod('educare_principal_info_settings'));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 d-flex justify-content-center align-items-center">
                        <div class="principal-document w-100">
                            <h2 class="principal-name mt-3"><?php _e('From', 'educare') . esc_html_e(get_theme_mod('educare_principal_name_settings')); ?></h2>
                            <div class="about-principal">
                                <p class="lead mt-4">
                                    <?php
                                        echo esc_html(get_theme_mod('educare_principal_bio_settings'));
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- expaer-teacher-section-start  -->
    <section class="teacher-section">
        <div class="main-container">
            <?php
                    $educare_teacher = new WP_Query(array(
                        'category_name'         =>  'teacher',
                    ));

                    if($educare_teacher->post_count >= 1) :
                ?>
            <div class="container">
                <div class="teachers-header-title">
                    <h2>
                        <?php _e('All Teachers', 'educare'); ?>
                    </h2>
                </div>
                <div class="row">
                    <?php
                            while($educare_teacher->have_posts()) :
                                $educare_teacher->the_post();
                        ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mt-4 teacher-info">
                            <?php
                                    if(has_post_thumbnail()) {
                                        the_post_thumbnail('large', array('class'=>'h-auto'));
                                    }
                                ?>
                            <div class="teacher-details">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="social-icon">
                                <?php
                                        $t_fb = get_field('facebook');
                                        if($t_fb['show'] == true) :
                                    ?>
                                <a href="<?php echo esc_url( $t_fb['flink'] ); ?>">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <?php
                                        endif;

                                        $t_twitter = get_field('twitter');
                                        if($t_twitter['t_show'] == true) :
                                    ?>
                                <a href="<?php echo esc_url( $t_twitter['tlink'] ); ?>"><i
                                        class="fab fa-twitter"></i></a>
                                <?php
                                        endif;

                                        $t_linkedin = get_field('linkedin');
                                        if($t_linkedin['l_show'] == true) :
                                    ?>
                                <a href="<?php echo esc_url( $t_linkedin['llink'] ); ?>"><i
                                        class="fab fa-linkedin"></i></a>
                                <?php
                                        endif;

                                        $t_instagram = get_field('instagram');
                                        if($t_instagram['i_show'] == true) :
                                    ?>
                                <a href="<?php echo esc_url( $t_instagram['ilink'] ); ?>"><i
                                        class="fab fa-instagram"></i></a>
                                <?php
                                        endif;
                                    ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- expaer-teacher-section-close  -->
</main>

<?php
    get_footer();