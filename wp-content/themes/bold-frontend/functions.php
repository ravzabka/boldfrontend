<?php
// Includes

include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/setup.php'));
include(get_theme_file_path('includes/widgets.php'));
include(get_theme_file_path('includes/theme-customizer.php'));
include(get_theme_file_path('includes/customizer/social.php'));
include(get_theme_file_path('includes/customizer/misc.php'));



//Filters
add_filter('upload_mimes', 'my_myme_types', 1, 1);

// Hooks
add_action('wp_enqueue_scripts', 'bold_files');
add_action( 'after_setup_theme', 'bold_features' );
add_action( 'widgets_init', 'bold_widgets_init' );
add_action( 'after_setup_theme', 'boldfrontend_nav_menu', 0 );
add_action('customize_register', 'ju_customize_register');
