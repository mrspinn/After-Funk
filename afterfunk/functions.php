<?php
function theme_enqueue_styles() {
    $parent_style = 'parent‐style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'child‐style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_theme_support('woocommerce');

function my_custom_script_load(){
  wp_enqueue_script( 'my_script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );

function storeMenu() {
  return wp_nav_menu( array( 
    'menu' => 'Store Nav', 
    'container_class' => 'store-nav secondary',
    'depth' => '1',
    'sort_column' => 'menu_order' 
  ) );
}

add_shortcode('store-menu', 'storeMenu');

add_filter( 'wc_product_sku_enabled', '__return_false' );


?>