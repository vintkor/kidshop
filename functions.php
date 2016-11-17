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

// --------------------Регистрация меню самое верхнее--------------------------------------
add_action('init', 'super_top_menu');
function super_top_menu() {
    register_nav_menus(array(
        'super-top-menu' => 'Меню сайта самое верхнее'
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

// --------------------Виджет левый сайдбар---------------------------
function left_sidebar_text_widget_init() {
  register_sidebar( array(
    'name'          => 'Виджет левый сайдбар',
    'id'            => 'left_sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<span class="hidden">',
    'after_title'   => '</span>',
  ) );
}
add_action( 'widgets_init', 'left_sidebar_text_widget_init' );

// -------------------- удаление из панели элементов меню start---------------------------

function wph_new_toolbar() {
    global $wp_admin_bar;
    // $wp_admin_bar->remove_menu('comments');    //меню "комментарии"
    // $wp_admin_bar->remove_menu('my-account');  //меню "мой профиль"
    // $wp_admin_bar->remove_menu('edit');        //меню "редактировать запись"
    // $wp_admin_bar->remove_menu('new-content'); //меню "добавить"
    // $wp_admin_bar->remove_menu('updates');     //меню "обновления"
    $wp_admin_bar->remove_menu('wp-logo');     //меню "о wordpress"
    // $wp_admin_bar->remove_menu('site-name');   //меню "сайт"
    // $wp_admin_bar->remove_menu('my-sites');    //меню "мои сайты"
}
add_action('wp_before_admin_bar_render', 'wph_new_toolbar');