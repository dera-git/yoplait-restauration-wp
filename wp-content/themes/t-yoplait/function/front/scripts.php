<?php
function add_theme_scripts() {

    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];

    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/./node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_style('lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null);
    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_style('select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $template_version);
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), $template_version);

    wp_enqueue_script('jquery.min', get_template_directory_uri().'/assets/./node_modules/jquery/dist/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/assets/./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array(), $template_version, true);
    wp_enqueue_script('counter', get_template_directory_uri().'/assets/js/libs/counter.js', array(), $template_version, true);
    wp_enqueue_script('match-height', get_template_directory_uri().'/assets/js/match.height.js', array(), $template_version, true);
    wp_enqueue_script('dropdown-checkbox-multiple', get_template_directory_uri().'/assets/js/libs/dropdown_checkbox_multiple.js', array(), $template_version, true);
    wp_enqueue_script('app', get_template_directory_uri().'/assets/js/app.js', array(), $template_version, true);
    wp_enqueue_script('filter-recettes', get_template_directory_uri().'/assets/js/_tri_filter_recettes.js', array(), $template_version, true);

	wp_localize_script('app', 'wpAjax',
            array( 'ajaxUrl' => admin_url('admin-ajax.php') )
    );
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );