<?php
$templatepath = get_template_directory();
include( $templatepath . '/function/ajax.php' );

if ( defined( 'DOING_AJAX' ) && DOING_AJAX && is_admin() ) {
	// include( $templatepath . '/function/ajax.php' );
} elseif ( is_admin() ) {
	include( $templatepath . '/function/admin.php' );
} elseif ( ! defined( 'XMLRPC_REQUEST' ) && ! defined( 'DOING_CRON' ) ) {
	include( $templatepath . '/function/front.php' );
}
include( $templatepath . '/function/all.php' );
/*//////////////////////////// Baltazare //////////////////////////////*/

function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

function custom_excerpt_length( $length ) {
    return 60; // This number is the number of words you want your excerpt to be
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>

