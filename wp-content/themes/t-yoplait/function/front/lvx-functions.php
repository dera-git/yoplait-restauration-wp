<?php

function lvx_theme_setup(){
    add_theme_support( 'title-tag' );
    load_theme_textdomain( 'yoplait_lvx' );
    add_theme_support('post-thumbnails');
    add_image_size( 'post-image', 263, 180 );
    add_image_size( 'product-image', 221, 221 );
    add_image_size( 'recette-image', 318, 221 );
    add_image_size( 'recette-single', 1440, 437 );
}

add_action('after_setup_theme', 'lvx_theme_setup');

/*
 * Change Send Credentials via Email text. Tags: send credentials, email
 */
/**
 * Verifie si l'utilisateur est connecter
 * Ajouter une data-bss-toggle="modal" si l'utilsateur n'est pas connecter 
 *
 * @return boolean
 */
function isConnected() {
    if(is_user_logged_in() == true){
        echo 'data-connected="true"';
    }else{
        echo 'data-bs-toggle="modal" data-bs-target="#id-moncompte"';
    }
}

/**
 * Si l'utilisateur est connecter ajouter l'url de l'attribut
 *
 * @param [string] $url
 * @return boolean
 */
function isConnectedUrl($url) {
    if(is_user_logged_in() == true){
        echo $url;
    }else{
        echo "javascript.void(0)";
    }
}

function addClassUserLogged() {
    if(is_user_logged_in() == true){
        echo "d-none";
    }
}

function addClassUserLogout() {
    if(is_user_logged_in() !== true){
        echo "d-none";
    }
}

add_action('wp_logout','auto_redirect_after_logout');

function auto_redirect_after_logout(){
  wp_safe_redirect( home_url() );
  exit;
}

?>
