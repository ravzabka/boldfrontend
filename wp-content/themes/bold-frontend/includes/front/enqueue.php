<?php 

function bold_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('faos', '//unpkg.com/aos@2.3.1/dist/aos.css');

  wp_enqueue_script('counter', get_theme_file_uri('/js/third-part/counter.js'), NULL, '1.0', true);
  wp_enqueue_script('aos', '//unpkg.com/aos@2.3.1/dist/aos.js');
  wp_enqueue_script('aos-init', get_theme_file_uri('/js/third-part/aos.js'), NULL, '1.0', true);
  
  if (strstr($_SERVER['SERVER_NAME'], 'bold-frontend.local')) {
    wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.24d997ebbc93d4ed3bb9.js'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.f7a04b38ed77f26dd44c.js'), NULL, '1.0', true);   
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.f7a04b38ed77f26dd44c.css'));
  }

  
}