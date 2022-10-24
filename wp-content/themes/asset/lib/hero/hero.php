<?php
add_action('init', 'post_type_hero');

function post_type_hero() {
  $labels = array(
  	'name'               => _x('Headers', 'post type general name', 'wp-boilerplate'),
  	'singular_name'      => _x('Header', 'post type singular name', 'wp-boilerplate'),
  	'menu_name'          => _x('Headers', 'admin menu', 'wp-boilerplate'),
  	'name_admin_bar'     => _x('Header', 'add new on admin bar', 'wp-boilerplate'),
  	'add_new'            => _x('Add New', 'hero', 'wp-boilerplate'),
  	'add_new_item'       => __('Add New header', 'wp-boilerplate'),
  	'new_item'           => __('New header', 'wp-boilerplate'),
  	'edit_item'          => __('Edit header', 'wp-boilerplate'),
  	'view_item'          => __('View header', 'wp-boilerplate'),
  	'all_items'          => __('All headers', 'wp-boilerplate'),
  	'search_items'       => __('Search headers', 'wp-boilerplate'),
  	'parent_item_colon'  => __('Parent headers:', 'wp-boilerplate'),
  	'not_found'          => __('No headers found.', 'wp-boilerplate'),
  	'not_found_in_trash' => __('No headers found in Trash.', 'wp-boilerplate')
  );

  $args = array(
  	'labels'             => $labels,
  	'public'             => false,
  	'publicly_queryable' => false,
  	'show_ui'            => true,
  	'show_in_menu'       => true,
  	'query_var'          => false,
  	'capability_type'    => 'post',
  	'has_archive'        => false,
    'supports'           => array('title'),
    'menu_icon'          => 'dashicons-align-none',
  );

  register_post_type('hero', $args);
}