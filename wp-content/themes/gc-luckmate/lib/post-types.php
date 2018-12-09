<?php

add_post_type_support('page', 'excerpt');

// Home slide
add_action('init', 'home_banner_register');
function home_banner_register() {
  $labels = array(
      'name' => _x('Mainpage slide', 'post type general name'),
      'singular_name' => _x('Mainpage slide', 'post type singular name'),
      'add_new' => _x('Add Mainpage slide', 'rep'),
      'add_new_item' => __('Add New Mainpage slide'),
      'edit_item' => __('Edit Mainpage slide'),
      'new_item' => __('New Mainpage slide'),
      'view_item' => __('View Mainpage slide'),
      'search_items' => __('Search Mainpage slide'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 8,
      'supports'      => array( 'title', 'editor', 'revisions', 'thumbnail')
  );
  register_post_type( 'mainpage slide' , $args );
}
?>
