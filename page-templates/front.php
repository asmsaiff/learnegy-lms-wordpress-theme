<?php
    /**
     * Template Name: Front Page
     */

    get_header();
?>

    <main>
        <?php
            $educare_home_slider = new WP_Query(array(
                'category_name'         =>  'slider',
            ));

            $educare_home_slider_post_data = array();
            while ( $educare_home_slider->have_posts() ) {
                $educare_home_slider->the_post();

                $educare_home_slider_post_data[] = array(
                    "title"             =>  get_the_title(),
                    "permalink"         =>  get_permalink(),
                    "thumbnail"         =>  get_the_post_thumbnail_url(get_the_ID(),"large"),
                    "excerpt"           =>  get_the_excerpt(),
                );
            }

            if($educare_home_slider->post_count > 0) :
        ?>
        <!-- hero-section-strat  -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="main-container slider-img" style="background-image: url('<?php echo esc_url($educare_home_slider_post_data[0]['thumbnail']); ?>');">
                        <div class="slider-overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="hero-content">
                                            <h1>
                                                <?php echo esc_html($educare_home_slider_post_data[0]['title']); ?>
                                            </h1>
                                            <p>
                                                <?php echo esc_html($educare_home_slider_post_data[0]['excerpt']); ?>
                                            </p>
                                        </div>

                                        <div class="hero-btn-grp">
                                            <a class="contact-btn"
                                                href="<?php echo esc_url($educare_home_slider_post_data[0]['permalink']) ?>">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    for($i = 1; $i < count($educare_home_slider_post_data); $i++) :
                ?>
                <div class="carousel-item">
                    <div class="main-container slider-img" style="background-image: url('<?php echo esc_url($educare_home_slider_post_data[$i]['thumbnail']); ?>');">
                        <div class="slider-overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="hero-content">
                                            <h1>
                                                <?php echo esc_html($educare_home_slider_post_data[$i]['title']) ?>
                                            </h1>
                                            <p>
                                                <?php echo esc_html($educare_home_slider_post_data[$i]['excerpt']) ?>
                                            </p>
                                        </div>
                                        <div class="hero-btn-grp">
                                            <a class="contact-btn" href="<?php echo esc_url($educare_home_slider_post_data[$i]['permalink']) ?>">
                                                <?php _e('Read More', 'educare') ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon slider-btn" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon slider-btn" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
        <!-- hero-section-close  -->
        <?php 
            endif;
            wp_reset_query();

            if(get_theme_mod('educare_show_home_info_settings')) :
        ?>

        <!-- information-section  -->
        <section>
            <div class="main-container">
                <div class="container">
                    <div class="section-header">
                        <h4>
                            <?php echo esc_html( get_theme_mod('educare_homepage_info_subheading_settings', 'Welcome') ); ?>
                        </h4>
                        <h2><?php echo esc_html( get_theme_mod('educare_homepage_info_heading_settings', 'Educare School & College') ); ?></h2>
                        <p><?php echo esc_html( get_theme_mod('educare_homepage_info_desc_settings') ); ?></p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <?php
                                $educare_homepage_info_item_settings = get_theme_mod('educare_homepage_info_item_settings');
                                $educare_homepage_info_item_settings_decoded = json_decode($educare_homepage_info_item_settings);

                                if(!empty($educare_homepage_info_item_settings_decoded)) :
                                
                            ?>
                            <aside>
                                <?php foreach($educare_homepage_info_item_settings_decoded as $info_repeater_item) : ?>
                                <div class="aside-box">
                                    <div class="row align-items-center">
                                        <div class="aside-icon col-md-2 col-sm-12 text-center">
                                            <span><i class="far fa-check-square fa-3x"></i></span>
                                        </div>
                                        <div class="aside-text col-md-10">
                                            <h2>
                                                <?php echo esc_html($info_repeater_item->title); ?>
                                            </h2>
                                            <p>
                                                <?php echo esc_html($info_repeater_item->text); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </aside>
                            <?php endif; ?>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="about-img" src="<?php echo esc_url(get_theme_mod('educare_homepage_info_featured_image_settings')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- information-section-close  -->
        <?php
            endif;

            if(get_theme_mod('educare_show_home_notice_settings')) :
        ?>
        <!-- Notice-board-section-start  -->
        <section class="notice-board">
            <div class="main-container p-3">
                <div class="section-header">
                    <h4>
                        <?php echo esc_html(get_theme_mod('educare_homepage_notice_subheading_settings', 'Update Notice')); ?>
                    </h4>
                    <h2>
                        <?php echo esc_html(get_theme_mod('educare_homepage_notice_heading_settings', 'Notice Board')); ?>
                    </h2>
                </div>
                <div class="container">
                    <div class="row">
                        <?php
                            $educare_notice = new WP_Query(array(
                                'category_name'         =>  'notice',
                                'posts_per_page'        =>  6
                            ));

                            if($educare_notice->post_count >= 1) :
                                while($educare_notice->have_posts()) :
                                    $educare_notice->the_post();
                        ?>
                        <div class="col-xl-6 mt-2">
                            <div class="notice-card overflow-hidden">
                                <div class="row justify-content-between">
                                    <div class="notice-date d-flex justify-content-center align-items-center col-md-1 p-0">
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
                                                <?php _e('View Notice', 'educare'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Notice-board-section-close  -->
        <?php
            endif;

            if(get_theme_mod('educare_show_course_settings')) :
        ?>
        <!-- course-saection-start -->
        <section>
            <div class="main-container">
                <div class="section-header pb-0">
                    <h4>
                        <?php esc_html_e(get_theme_mod('educare_course_subheading_settings', 'Welcome')); ?>
                    </h4>
                    <h2>
                        <?php esc_html_e(get_theme_mod('educare_course_heading_settings', 'Couress We Offer')); ?>
                    </h2>
                </div>
                <?php
                    $educare_course = new WP_Query(array(
                        'category_name'         =>  'course',
                        'posts_per_page'        =>  8,
                    ));

                    if($educare_course->post_count >= 1) :
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="courses-items mt-5">
                                <div class="row">
                                    <?php
                                        while($educare_course->have_posts()) :
                                            $educare_course->the_post();
                                    ?>
                                    <div class="col-xl-3 col-md-6 card-items" data-item="computer">
                                        <div class="card mt-4 course-card computer">
                                            <?php
                                                if(has_post_thumbnail()) {
                                                    the_post_thumbnail( 'large', array('class'=>'computer-img h-auto') );
                                                }
                                            ?>
                                            <h4>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p>
                                                <?php echo get_the_excerpt(); ?>
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center course-card-footer">
                                                <div class="date d-flex">
                                                    <span><i class="far fa-calendar"></i></span>
                                                    <p>
                                                        <?php esc_html(the_field('time_length')); ?>
                                                    </p>
                                                </div>
                                                <div class="read-more d-flex">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php _e('Read More', 'educare'); ?>
                                                    </a>
                                                    <span><i class="fas fa-arrow-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- course-section-close  -->
        <?php
            endif;

            if(get_theme_mod('educare_show_teacher_settings')) :
        ?>
        <!-- expaer-teacher-section-start  -->
        <section class="teacher-section">
            <div class="main-container">
                <div class="section-header pb-0">
                    <h4>
                        <?php esc_html_e(get_theme_mod('educare_teacher_subheading_settings', 'Welcome')); ?>
                    </h4>
                    <h2>
                        <?php esc_html_e(get_theme_mod('educare_teacher_heading_settings', 'Expert Teachers')); ?>
                    </h2>
                </div>
                <?php
                    $educare_teacher = new WP_Query(array(
                        'category_name'         =>  'teacher',
                        'posts_per_page'        =>  4,
                    ));

                    if($educare_teacher->post_count >= 1) :
                ?>
                <div class="container">
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
                                    <a href="<?php echo esc_url( $t_twitter['tlink'] ); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php
                                        endif;

                                        $t_linkedin = get_field('linkedin');
                                        if($t_linkedin['l_show'] == true) :
                                    ?>
                                    <a href="<?php echo esc_url( $t_linkedin['llink'] ); ?>"><i class="fab fa-linkedin"></i></a>
                                    <?php
                                        endif;

                                        $t_instagram = get_field('instagram');
                                        if($t_instagram['i_show'] == true) :
                                    ?>
                                    <a href="<?php echo esc_url( $t_instagram['ilink'] ); ?>"><i class="fab fa-instagram"></i></a>
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
        <?php
            endif;

            if(get_theme_mod('educare_show_home_faq_settings')) :
        ?>
        <!-- learning-section-start  -->
        <section>
            <div class="main-container">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 mb-5 d-flex justify-content-center align-items-center">
                            <img src="<?php echo esc_url(get_theme_mod('educare_homepage_faq_featured_image_settings')); ?>" alt="">
                        </div>
                        <div class="col-xl-6 d-flex justify-content-center align-items-center">
                            <div class="learning-wrapper w-100">
                                <div class="learning-title">
                                    <p>
                                        <?php echo esc_html(get_theme_mod('educare_homepage_faq_subheading_settings', 'Distance Learning')); ?>
                                    </p>
                                    <h2>
                                        <?php echo esc_html(get_theme_mod('educare_homepage_faq_heading_settings', 'Flexible Study at Your Own Pace, According to Your Own Needs')); ?>
                                    </h2>
                                </div>
                                <?php
                                    $educare_homepage_faq_item_settings = get_theme_mod('educare_homepage_faq_item_settings');
                                    $educare_homepage_faq_item_settings_decoded = json_decode($educare_homepage_faq_item_settings);

                                    if(!empty($educare_homepage_faq_item_settings_decoded)) :
                                    
                                ?>
                                <div class="learning-items mt-2">
                                    <div class="accordion" id="educareFaq">
                                        <?php foreach($educare_homepage_faq_item_settings_decoded as $key => $faq_repeater_item) : ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <a class="accordion-button collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'home_faq_' . $key; ?>" aria-expanded="true" aria-controls="collapseOne">
                                                    <?php echo esc_html( $faq_repeater_item->title ); ?>
                                                </a>
                                            </h2>
                                            <div id="<?php echo 'home_faq_' . $key; ?>" class="accordion-collapse collapse" data-bs-parent="#educareFaq">
                                                <div class="accordion-body">
                                                    <?php echo esc_html( $faq_repeater_item->text ); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- learning-section-close  -->
        <?php
            endif;

            if(get_theme_mod('educare_show_event_settings')) :
        ?>
        <!-- our-event-strat  -->
        <section class="event">
            <div class="main-container">
                <div class="container">
                    <div class="section-header-wrapper d-flex justify-content-between">
                        <div class="section-header-title">
                            <p>
                                <?php
                                    echo esc_html( get_theme_mod('educare_event_subheading_settings', 'Our Recent') );
                                ?>
                            </p>
                            <h2>
                                <?php
                                    echo esc_html( get_theme_mod('educare_event_heading_settings', 'Events') );
                                ?>
                            </h2>
                        </div>
                        <?php
                            if(get_theme_mod('educare_show_event_btn_settings')) :
                        ?>
                        <div class="details-btn-wrapper">
                            <a class="view-btn" href="<?php echo esc_url(get_theme_mod('educare_event_btn_link_settings')); ?>">
                                <?php echo esc_html(get_theme_mod('educare_event_btn_label_settings', 'See More')); ?>
                            </a>
                        </div>
                        <?php
                            endif;
                        ?>
                    </div>
                    <?php
                        $educare_event = new WP_Query(array(
                            'category_name'         =>  'event'
                        ));

                        if($educare_event->post_count >= 1) :
                    ?>
                    <div class="row mt-5">
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
                                                <?php echo get_the_excerpt(); ?>
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
        <?php
            endif;

            if(get_theme_mod('educare_show_newsletter_settings')) {
                get_template_part('template-parts/educare-newsletter');
            }
        
            if(get_theme_mod('educare_show_blog_settings')) :
        ?>
        <!-- news-section-start  -->
        <section class="news-section">
            <div class="main-container">
                <div class="section-header">
                    <h4>
                        <?php echo esc_html(get_theme_mod('educare_blog_subheading_settings', 'Discover Your Perfect')); ?>
                    </h4>
                    <h2><?php echo esc_html(get_theme_mod('educare_blog_heading_settings', 'Latest News')); ?></h2>
                </div>
                
                <?php
                    $educare_posts = new WP_Query(array(
                        'category_name'         =>  'blog',
                        'posts_per_page'        =>  3,
                    ));

                    if($educare_posts->post_count > 0) :
                ?>
                <div class="container">
                    <div class="row">
                        <?php
                            while($educare_posts->have_posts()) :
                                $educare_posts->the_post();
                        ?>
                        <div class="col-xl-4 col-md-6">
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
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- news-section-close  -->
        <?php
            endif;
        ?>
    </main>
      
<?php
    get_footer();