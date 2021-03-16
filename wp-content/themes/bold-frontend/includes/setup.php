<?php 
function bold_features() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

}


function boldfrontend_nav_menu(){
    register_nav_menus( array(
        'product_menu' => __( 'Product Menu', 'bold-frontend' ),
        'engage_menu'  => __( 'Engage Menu', 'bold-frontend' ),
        'earn_menu'  => __( 'Earn Money', 'bold-frontend' ),
     ) );
 }

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

function theme_get_custom_logo() {  
       
        echo '<a class="logo" href="' . get_site_url() . '">' . get_bloginfo( 'name' ) . '</a>';      

}