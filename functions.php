<?php
// --------------------Удаление Width и Height у изображений-------------------------
add_filter ('post_thumbnail_html','no_width_height_html',10,1);


function no_width_height_html($html){
    $pos = strpos($html,'src');
    $html ='<img '.substr($html,$pos);
    return $html;
}

// --------------------Регистрация меню верхнее--------------------------------------
add_action('init', 'top_menu');
function top_menu() {
    register_nav_menus(array(
        'top-menu' => 'Меню сайта верхнее'
    ));
}

// --------------------Регистрация поддержки woocommerce--------------------------------------
add_theme_support( 'woocommerce' );

// --------------------"Дополнительная информация" в "Характеристики"--------------------------------------
add_filter( 'woocommerce_product_tabs', 'devise_woo_rename_reviews_tab', 98);
function devise_woo_rename_reviews_tab($tabs) {
$tabs['additional_information']['title'] = 'Характеристики';
return $tabs;
}