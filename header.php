<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>
    <!-- header-start  -->
    <header>
        <?php
            if(get_theme_mod('educare_show_topbar_settings')) :
        ?>
        <!-- top-header-strat  -->
        <div class="main-container top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-5 address">
                                <div class="top-header-items">
                                    <span><i class="fas fa-home"></i></span>
                                    <p>Mirpur , Dhaka, Bangladesh</p>
                                </div>
                            </div>
                            <div class="col-3 phone">
                                <a href="#" class="top-header-phone top-header-items">
                                    <span><i class="fas fa-phone"></i></span>
                                    <p>39885677834390</p>
                                </a>
                            </div>
                            <div class="col-2 gmail">
                                <a href="#" class="top-header-mail top-header-items">
                                    <span><i class="far fa-envelope"></i></span>
                                    <p>Info@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-side-btn">
                            <div class="d-flex justify-content-end">
                                <div class="login-btn header-btn">
                                    <a class="login" href="#"><i class="fas fa-sign-in-alt"></i>Admission</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top-header-close  -->
        <?php endif; ?>

        <!-- nav-bar-start  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 sticky-top shadow-sm">
            <div class="container-xl sticky-top">
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="logo-text-1">EDU</span><span class="logo-text-2">CARE</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu(array(
                            'theme_location'            =>  'primary-menu',
                            'menu_class'                =>  '',
                            'menu-container'            =>  'false',
                            'fallback_cb'               => '__return_false',
                            'items_wrap'                => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 text-sm %2$s">%3$s</ul>',
                            'depth'                     => 2,
                            'walker'                    => new educare_wp_nav_menu_walker(),
                        ));
                    ?>
                </div>
            </div>
        </nav>
        <!-- nav-bar-close  -->
    </header>
    <!-- header-close  -->