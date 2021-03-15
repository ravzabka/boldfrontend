<?php 
function bold_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget Menu Area' ),
        'id' => 'footer-sidebar-1',
        'description' => __( 'Appears in the footer' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer__nav-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget Menu Area' ),
        'id' => 'footer-sidebar-2',
        'description' => __( 'Appears in the footer' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer__nav-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget Menu Area' ),
        'id' => 'footer-sidebar-3',
        'description' => __( 'Appears in the footer' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer__nav-title">',
        'after_title' => '</h3>',
    ) );
}