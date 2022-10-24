<?php
add_action('init', 'post_type_hero');

function post_type_hero() {
  $labels = array(
  	'name'               => _x('Headers', 'post type general name', 'asset'),
  	'singular_name'      => _x('Header', 'post type singular name', 'asset'),
  	'menu_name'          => _x('Headers', 'admin menu', 'asset'),
  	'name_admin_bar'     => _x('Header', 'add new on admin bar', 'asset'),
  	'add_new'            => _x('Add New', 'hero', 'asset'),
  	'add_new_item'       => __('Add New header', 'asset'),
  	'new_item'           => __('New header', 'asset'),
  	'edit_item'          => __('Edit header', 'asset'),
  	'view_item'          => __('View header', 'asset'),
  	'all_items'          => __('All headers', 'asset'),
  	'search_items'       => __('Search headers', 'asset'),
  	'parent_item_colon'  => __('Parent headers:', 'asset'),
  	'not_found'          => __('No headers found.', 'asset'),
  	'not_found_in_trash' => __('No headers found in Trash.', 'asset')
  );

  $args = array(
  	'labels'             => $labels,
  	'public'             => true,
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
