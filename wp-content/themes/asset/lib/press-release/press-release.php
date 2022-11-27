<?php
add_action('init', 'post_type_press_release');

function post_type_press_release() {
  $labels = array(
  	'name'               => 'Medienberichte',
  	'singular_name'      => 'Medienbericht',
  	'menu_name'          => 'Medienberichte',
  	'name_admin_bar'     => 'Medienbericht',
  	'add_new'            => 'Hinzufügen',
  	'add_new_item'       => 'Neuen Medienbericht hinzufügen',
  	'new_item'           => 'Neuer Medienbericht',
  	'edit_item'          => 'Medienbericht bearbeiten',
  	'view_item'          => 'Medienbericht ansehen',
  	'all_items'          => 'Alle Medienberichte',
  	'search_items'       => 'Medienberichte suchen',
  	'parent_item_colon'  => 'Übergeordnete Medienberichte:',
  	'not_found'          => 'Keine Medienberichte gefunden.',
  	'not_found_in_trash' => 'Keine Medienbericht im Papierkorb gefunden.',
  );

  $args = array(
  	'labels'             => $labels,
    'public'             => true,
    'rewrite'            => array('slug' => 'medienberichte'),
    'has_archive'        => true,
  	'capability_type'    => 'post',
    'supports'           => array('title', 'thumbnail'),
    'menu_icon'          => 'dashicons-media-document',
  );

  register_post_type('press_release', $args);
}
