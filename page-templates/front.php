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
                    <div class="main-container slider-img" style="background-image: url('<?php echo esc_html($educare_home_slider_post_data[$i]['thumbnail']); ?>');">
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
                                            <a class="contact-btn"
                                                href="<?php echo esc_url($educare_home_slider_post_data[$i]['permalink']) ?>">Read
                                                More</a>
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
                                            <h2><?php echo $info_repeater_item->title; ?></h2>
                                            <p>
                                                <?php echo $info_repeater_item->text; ?>
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
                        <?php echo get_theme_mod('educare_homepage_notice_subheading_settings', 'Update Notice'); ?>
                    </h4>
                    <h2>
                        <?php echo get_theme_mod('educare_homepage_notice_heading_settings', 'Notice Board'); ?>
                    </h2>
                </div>
                <div class="container">
                    <div class="row">
                        <?php
                            $educare_notice = new WP_Query(array(
                                'category_name'         =>  'notice'
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
                                                <p><?php the_field('date_time'); ?></p>
                                            </div>
                                            <div class="time d-flex">
                                                <span><i class="far fa-clock"></i></span>
                                                <p><?php the_field('en_category'); ?></p>
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
                                                <?php the_excerpt(); ?>
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
        ?>
        <!-- learning-section-start  -->
        <section>
            <div class="main-container">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 mb-5 d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content-img/learning-img.png" alt="learning-img">
                        </div>
                        <div class="col-xl-6 d-flex justify-content-center align-items-center">
                            <div class="learning-wrapper">
                            <div class="learning-title">
                                <p>Distance Learning</p>
                                <h2>Flexible Study at Your Own Pace, According to Your Own Needs</h2>
                            </div>
                            <div class="learning-items mt-2">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <a class="accordion-button collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Who is a digital business card suitable for?
                                        </a>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse ratione iusto, perferendis aut deleniti voluptatem eligendi ut velit veniam distinctio animi tenetur soluta dolor sint voluptas quidem in, assumenda incidunt?
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                        <a class="accordion-button collapsed collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Do I have to create the card myself?
                                        </a>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio officiis voluptatibus, quia repellat provident sunt ullam quis expedita omnis consequuntur nisi architecto eos ipsa voluptatum delectus aspernatur quod molestias est?
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                        <a class="accordion-button collapsed collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who is a digital business card suitable for?
                                        </a>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti fuga magni perspiciatis unde expedita corporis est doloribus magnam laudantium et officiis voluptate, sint excepturi, temporibus quis animi nisi debitis.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfour">
                                        <a class="accordion-button collapsed collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who is a digital business card suitable for?
                                        </a>
                                        </h2>
                                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti fuga magni perspiciatis unde expedita corporis est doloribus magnam laudantium et officiis voluptate, sint excepturi, temporibus quis animi nisi debitis.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfive">
                                        <a class="accordion-button collapsed collapse-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who is a digital business card suitable for?
                                        </a>
                                        </h2>
                                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti fuga magni perspiciatis unde expedita corporis est doloribus magnam laudantium et officiis voluptate, sint excepturi, temporibus quis animi nisi debitis.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- learning-section-close  -->
        <!-- our-event-strat  -->
        <section class="event">
            <div class="main-container">
                <div class="container">
                    <div class="section-header-wrapper d-flex justify-content-between">
                        <div class="section-header-title">
                            <p>Our Recent</p>
                            <h2>Events</h2>
                        </div>
                        <div class="details-btn-wrapper">
                            <a class="view-btn" href="#">view all</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="card mt-4 event-card">
                            <div class="row">
                                <div class="col-xl-4 col-md-12 text-md-center">
                                    <div class="event-img text-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event/event-1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="event-header d-flex justify-content-between">
                                        <div class="event-address d-flex">
                                        <span><i class="fas fa-globe-europe"></i></span>
                                        <p>Auditorium Lagoon</p>
                                        </div>
                                        <div class="event-date d-flex">
                                        <span><i class="far fa-calendar"></i></span>
                                        <p>February 19, 2015</p>
                                        </div>
                                    </div>
                                    <div class="event-card-title">
                                        <h5>Ultimate University Conference</h5>
                                    </div>
                                    <div class="event-card-info">
                                        <p>Our set he for firmament morning sixth subdue today .</p>
                                    </div>
                                    <a class="event-view-details mt-2" href="#">View  Details</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4 event-card">
                            <div class="row">
                                <div class="col-xl-4 col-md-12 text-md-center">
                                    <div class="event-img text-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event/event-2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="event-header d-flex justify-content-between">
                                        <div class="event-address d-flex">
                                        <span><i class="fas fa-globe-europe"></i></span>
                                        <p>Auditorium Lagoon</p>
                                        </div>
                                        <div class="event-date d-flex">
                                        <span><i class="far fa-calendar"></i></span>
                                        <p>February 19, 2015</p>
                                        </div>
                                    </div>
                                    <div class="event-card-title">
                                        <h5>Ultimate University Conference</h5>
                                    </div>
                                    <div class="event-card-info">
                                        <p>Our set he for firmament morning sixth subdue today .</p>
                                    </div>
                                    <a class="event-view-details mt-2" href="#">View  Details</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4 event-card">
                            <div class="row">
                                <div class="col-xl-4 col-md-12 text-md-center">
                                    <div class="event-img text-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event/event-3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="event-header d-flex justify-content-between">
                                        <div class="event-address d-flex">
                                        <span><i class="fas fa-globe-europe"></i></span>
                                        <p>Auditorium Lagoon</p>
                                        </div>
                                        <div class="event-date d-flex">
                                        <span><i class="far fa-calendar"></i></span>
                                        <p>February 19, 2015</p>
                                        </div>
                                    </div>
                                    <div class="event-card-title">
                                        <h5>Ultimate University Conference</h5>
                                    </div>
                                    <div class="event-card-info">
                                        <p>Our set he for firmament morning sixth subdue today .</p>
                                    </div>
                                    <a class="event-view-details mt-2" href="#">View  Details</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4 event-card">
                            <div class="row">
                                <div class="col-xl-4 col-md-12 text-md-center">
                                    <div class="event-img text-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event/event-4.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-12">
                                    <div class="event-header d-flex justify-content-between">
                                        <div class="event-address d-flex">
                                        <span><i class="fas fa-globe-europe"></i></span>
                                        <p>Auditorium Lagoon</p>
                                        </div>
                                        <div class="event-date d-flex">
                                        <span><i class="far fa-calendar"></i></span>
                                        <p>February 19, 2015</p>
                                        </div>
                                    </div>
                                    <div class="event-card-title">
                                        <h5>Ultimate University Conference</h5>
                                    </div>
                                    <div class="event-card-info">
                                        <p>Our set he for firmament morning sixth subdue today .</p>
                                    </div>
                                    <a class="event-view-details mt-2" href="#">View  Details</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-events-close  -->
        <!-- testimonial-section-strat  -->
        <section>
            <div class="main-container py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 text-end">
                            <div class="position-relative testimonial-slider-image-wrapper">
                            <img src="assets/img/testimonial/man-person-suit-hair-male-portrait-65154-pxhere.com 1.png" alt="">
                            <img src="assets/img/testimonial/man-person-suit-hair-male-portrait-65154-pxhere.com 1.png" alt="">
                            <img src="assets/img/testimonial/man-person-suit-hair-male-portrait-65154-pxhere.com 1.png" alt="">
                            <img src="assets/img/testimonial/man-person-suit-hair-male-portrait-65154-pxhere.com 1.png" alt="">
                            <img src="assets/img/testimonial/man-person-suit-hair-male-portrait-65154-pxhere.com 1.png" alt="">
                            <img src="assets/img/testimonial/man-person-suit-hair-male-portrait-65154-pxhere.com 1.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-qute">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/“.svg" alt="">
                            </div>
                            <div class="testimonial-content">
                            <p>Excellent content and assignments that build on your knowledge, reinforce, and then expand. I recently secured new employment using PHP and couldn't have done so without the Professional Web Development courses.</p>
                            </div>
                            <div class="testimonial-person mt-3">
                            <h5>David Backhome</h5>
                            <p>Bsc in CSE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section-close  -->
        <!-- news-section-start  -->
        <section class="news-section">
            <div class="main-container">
                <div class="section-header">
                    <h4>Discover Your Perfect</h4>
                    <h2>Latest News </h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card news-card mt-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/news-01.png" alt="news-img">
                            <div class="event-header d-flex justify-content-between">
                                <div class="event-address d-flex">
                                    <span><i class="fas fa-globe-europe"></i></span>
                                    <p>Auditorium Lagoon</p>
                                </div>
                                <div class="event-date d-flex">
                                    <span><i class="far fa-calendar"></i></span>
                                    <p>February 19, 2015</p>
                                </div>
                            </div>
                            <div class="news-title">
                                <h4>Ultimate University Conference</h4>
                                <p class="mt-3">I must explain to you how all this mistaken idea of denoung  the system.</p>
                            </div>
                            <div class="news-read-more mt-2">
                                <a href="#">Read More</a>
                                <span><i class="fas fa-arrow-right"></i></span>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card news-card mt-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/news-02.png" alt="news-img">
                            <div class="event-header d-flex justify-content-between">
                                <div class="event-address d-flex">
                                    <span><i class="fas fa-globe-europe"></i></span>
                                    <p>Auditorium Lagoon</p>
                                </div>
                                <div class="event-date d-flex">
                                    <span><i class="far fa-calendar"></i></span>
                                    <p>February 19, 2015</p>
                                </div>
                            </div>
                            <div class="news-title">
                                <h4>Ultimate University Conference</h4>
                                <p class="mt-3">I must explain to you how all this mistaken idea of denoung  the system.</p>
                            </div>
                            <div class="news-read-more mt-2">
                                <a href="#">Read More</a>
                                <span><i class="fas fa-arrow-right"></i></span>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card news-card mt-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/news-03.png" alt="news-img">
                            <div class="event-header d-flex justify-content-between">
                                <div class="event-address d-flex">
                                    <span><i class="fas fa-globe-europe"></i></span>
                                    <p>Auditorium Lagoon</p>
                                </div>
                                <div class="event-date d-flex">
                                    <span><i class="far fa-calendar"></i></span>
                                    <p>February 19, 2015</p>
                                </div>
                            </div>
                            <div class="news-title">
                                <h4>Ultimate University Conference</h4>
                                <p class="mt-3">I must explain to you how all this mistaken idea of denoung  the system.</p>
                            </div>
                            <div class="news-read-more mt-2">
                                <a href="#">Read More</a>
                                <span><i class="fas fa-arrow-right"></i></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section-close  -->

        <!-- Our Newsletter-start  -->
        <section class="p-0">
            <div class="main-container news-letter-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-letter">
                            <div class="news-letter-header">
                                <h4>Subscribe</h4>
                                <h2 class="text-white">Our Newsletter</h2>
                                <p class="text-white">Your Download Should Start Automatically, If Not Click Here. Should I Give Up, Huh?.</p>
                            </div>
                            
                                <form action="#">
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <input placeholder="Enter your email" class="news-letter-input" type="text">
                                        <input class="subscribe-btn" type="submit" value="Subscribe">
                                    </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Newsletter-close  -->
    </main>
      
<?php
    get_footer();