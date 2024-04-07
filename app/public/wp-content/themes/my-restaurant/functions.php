<?php


function custom_add_to_cart_redirect() {
    return wc_get_cart_url();
}
add_filter('woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect');


function register_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", $version, 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

?>