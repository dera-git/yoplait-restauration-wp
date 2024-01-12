<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="kl-wrapper">
        <div class="kl-banner-header">
            <div class="container kl-container-1140">
                <div class="kl-banner-content d-flex justify-content-between align-items-center">
                    <div class="kl-banner-content-left">
                        <?php if( get_field('libellle_numbre_phone', 'options') ): ?>
                            <p><?php the_field('libellle_numbre_phone', 'options') ?></p>
                        <?php endif ?>
                        <?php if( get_field('numero_phone_contact', 'options') ): ?>
                            <a href="tel:<?php the_field('numero_phone_contact', 'options') ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/phone.svg" alt="">
                                <?php the_field('numero_phone_contact', 'options') ?>
                            </a>
                        <?php endif ?>
                    </div>
                    <div class="kl-banner-content-center">
                        <?php if( get_field('instagram_url', 'options') ): ?>
                            <a href="<?php the_field('instagram_url', 'options') ?>" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/Instagram.svg" alt="">
                            </a>
                        <?php endif ?>
                        <?php if( get_field('youtube_url', 'options') ): ?>
                            <a href="<?php the_field('youtube_url', 'options') ?>" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/YouTube.svg" alt="">
                            </a>
                        <?php endif ?>
                        <?php if( get_field('facebook_url', 'options') ): ?>
                            <a href="<?php the_field('facebook_url', 'options') ?>" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/fb.svg" alt="">
                            </a>
                        <?php endif ?>
                    </div>
                    <div class="kl-banner-content-right">
                        <a href="<?php the_permalink(get_page_by_path('recherche')); ?>" class="kl-search">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/search.svg" alt="">
                        </a>
                        <?php if( get_field('libelle_bouton_contact_header', 'options') ): ?>
                            <a href="<?php the_field('lien_bouton_contact_header', 'options') ?>" class="kl-link-banner-right"><?php the_field('libelle_bouton_contact_header', 'options') ?></a>
                        <?php endif ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#id-moncompte" class="kl-link-banner-right active">Mon compte</a>
                    </div>
                </div>
            </div>
        </div>
        <header class="kl-header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container kl-container-898">
                    <a class="navbar-brand d-md-none d-block" href="<?php bloginfo( 'url' ) ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_mobile.svg" alt="" class="img-fluid">
                    </a>
                    <button class="navbar-toggler kl-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="kl-icon-menu" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="8" fill="#CF000C"/>
                            <rect x="8" y="26" width="41" height="4" rx="2" fill="white"/>
                            <rect x="8" y="11" width="41" height="4" rx="2" fill="white"/>
                            <rect x="8" y="41" width="41" height="4" rx="2" fill="white"/>
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        if ( is_user_logged_in() && function_exists('wppb_user_has_profile') && wppb_user_has_profile( get_current_user_id() ) ) {
                            // User is logged in and has a profile, show the full menu
                            wp_nav_menu(array(
                                'theme_location' => 'principal',
                                'container' => false,
                                'menu_class' => 'navbar-nav kl-navbar-nav',
                                'fallback_cb' => '__return_false',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        } else {
                            // User is not logged in or does not have a profile, hide the contact page from the menu
                            $menu_args = array(
                                'theme_location' => 'principal',
                                'container' => false,
                                'menu_class' => 'navbar-nav kl-navbar-nav',
                                'fallback_cb' => '__return_false',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            );
                            $menu_items = wp_get_nav_menu_items( $menu_args['theme_location'] );
                            $excluded_ids = array();
                            if ( is_array($menu_items) ) {
                                foreach( $menu_items as $item ) {
                                    if ( $item->object == 'page' && $item->object_id == '17' ) { // Replace CONTACT_PAGE_ID with the ID of your contact page
                                        $excluded_ids[] = $item->ID;
                                    }
                                }
                            }
                            if ( !empty($excluded_ids) ) {
                                $menu_args['exclude'] = $excluded_ids;
                            }
                            wp_nav_menu( $menu_args );
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </header>