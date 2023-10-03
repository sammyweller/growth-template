<?php 
function growthagency_theme_support(){
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'growthagency_theme_support');


function growthagency_menus() {
    $locations = array(
        'primary' => "Desktop Nav Bar"
    );
    register_nav_menus($locations);
}
add_action('init', 'growthagency_menus');





function growthagency_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('growthagency-style', get_template_directory_uri() . "/style.css", 
        array('growthagency-bootstrap'), $version, 'all');
    wp_enqueue_style('growthagency-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css", array(), '4.1.3', 'all');
    wp_enqueue_style('growthagency-googlefonts', "https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700;800&display=swap", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'growthagency_register_styles');





function growthagency_register_scripts() {
    wp_enqueue_script('growthagency-jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array(), null, true);
    wp_enqueue_script('growthagency-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js", array('growthagency-jquery'), null, true);
    wp_enqueue_script('growthagency-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js", array('growthagency-popper'), null, true);
    wp_enqueue_script('growthagency-main', get_template_directory_uri() . "/assets/javascript/main.js", array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'growthagency_register_scripts');




?>
