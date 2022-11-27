<?php
add_action('init', 'post_type_project');

function post_type_project() {
  $labels = array(
  	'name'               => _x('Projects', 'post type general name', 'asset'),
  	'singular_name'      => _x('Project', 'post type singular name', 'asset'),
  	'menu_name'          => _x('Projects', 'admin menu', 'asset'),
  	'name_admin_bar'     => _x('Project', 'add new on admin bar', 'asset'),
  	'add_new'            => _x('Add New', 'project', 'asset'),
  	'add_new_item'       => __('Add New project', 'asset'),
  	'new_item'           => __('New project', 'asset'),
  	'edit_item'          => __('Edit project', 'asset'),
  	'view_item'          => __('View project', 'asset'),
  	'all_items'          => __('All projects', 'asset'),
  	'search_items'       => __('Search projects', 'asset'),
  	'parent_item_colon'  => __('Parent projects:', 'asset'),
  	'not_found'          => __('No projects found.', 'asset'),
  	'not_found_in_trash' => __('No projects found in Trash.', 'asset')
  );

  $args = array(
  	'labels'             => $labels,
    'public'             => true,
    'rewrite'            => array('slug' => 'projekte'),
    'has_archive'        => true,
  	'capability_type'    => 'post',
    'supports'           => array('title', 'thumbnail'),
    'menu_icon'          => 'dashicons-admin-multisite',
  );

  register_post_type('project', $args);
}
