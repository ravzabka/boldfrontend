<?php

function plans_post_types() {
  register_post_type('plan', array(
    'public' => true,
    'labels' => array(
      'name' => 'Plans',
      'add_new_item' => 'Add New Plan',
      'edit_item' => 'Edit Plan',
      'all_items' => 'All Plans',
      'singular_name' => 'Plan'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  ));
}

add_action('init', 'plans_post_types');