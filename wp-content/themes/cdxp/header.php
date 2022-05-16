<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seomondo_CDXP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site site-content">
        <!-- START HEADER -->
        <header class="header_wrap  header_with_topbar">
            <div class="main_header dark_skin main_menu_uppercase">
                <div class="container">
                    <nav class="navbar navbar-expand-lg justify-content-between">
                        <h1 class="m-0">
                            <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                                <img class="img-fluid" src="<?php
                                                            $custom_logo_id = get_theme_mod('custom_logo');
                                                            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                                            echo $image[0];
                                                            ?>" alt="logo" />
                            </a>
                        </h1>
                        <div class="mobile-menu-icon d-none">
                            <span class="icon"><i class="fas fa-bars"></i></span>
                        </div>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => false, 'menu_class' => 'menu navbar-nav primary-menu')); ?>
                            <!-- <ul class="navbar-nav">
                                <li><a class="nav-link nav_item" href="salesmanago.php">SALESMANAGO CDXP</a></li>
                                <li><a class="nav-link nav_item" href="">CDP – CUSTOMER DATA PLATFORM </a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#">MARKETING
                                        AUTOMATION </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">E-MAIL MARKETING</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item" href="#">OMNICHANNEL
                                                    MARKETING</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                        <?php
                        $header_right_buttons = get_field('header_right_buttons', 'option');
                        if ($header_right_buttons) {
                            $button_1 = (isset($header_right_buttons['button_1'])) ? $header_right_buttons['button_1'] : false;
                            $button_2 = (isset($header_right_buttons['button_2'])) ? $header_right_buttons['button_2'] : false;
                            if ($button_1 || $button_2) { ?>
                                <div class="menu-btn d-flex">
                                    <?php if ($button_1) { ?>
                                        <div class="contact-btn">
                                            <a href="<?php echo esc_url($button_1['url']); ?>" class="btn btn-dark"><?php echo esc_html($button_1['title']); ?></a>
                                        </div>
                                    <?php }
                                    if ($button_2) { ?>
                                        <div class="book-mode">
                                            <a href="<?php echo esc_url($button_2['url']); ?>" class="btn ml-3"><?php echo esc_html($button_2['title']); ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                        <?php }
                        } ?>
                    </nav>
                </div>
            </div>
        </header>

        <!-- mobile menu  -->

        <div class="mobile-navigation">
            <div class="side-menu-header mb-3">
                <div class="logo">
                    <a class="navbar-brand" href="index.php">
                        <img class="img-fluid" src="assets/images/Seomondo CDXP.svg" alt="logo" />
                    </a>
                </div>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => false, 'menu_class' => 'mobile-menu', 'menu_id' => 'menu-primary-menu')); ?>
            <!-- <ul id="menu-primary-menu" class="mobile-menu">
                <li class="menu-item">
                    <a href="salesmanago.php">SALESMANAGO CDXP</a>
                </li>
                <li class="menu-item">
                    <a href="#">CDP – CUSTOMER DATA PLATFORM </a>
                </li>
                <li class="parent">
                    <a href="#">MARKETING AUTOMATION </a>
                    <ul class="children">
                        <li><a href="#">E-MAIL MARKETING</a>
                        </li>
                        <li><a href="#">OMNICHANNEL MARKETING</a></li>
                    </ul>
                </li>
            </ul> -->
        </div>

        <div class="body-overlay"></div>
        <!-- END HEADER -->
        <?php
        if (!is_front_page() && function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="page-menu"><div class="container"><p id="breadcrumbs">', '</div></div><p>');
        }
        ?>