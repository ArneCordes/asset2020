<?php
if(strstr($_SERVER['SERVER_NAME'], '.local')) {
  require_once('lib/vendor/krumo/class.krumo.php');
}

require_once('lib/customizer.php');
require_once('lib/hero/hero.php');
require_once('lib/project/project.php');
require_once('lib/press-release/press-release.php');

// Theme setup
add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
  load_theme_textdomain('asset', get_template_directory() . '/languages');

  add_theme_support('post-thumbnails');

  register_nav_menus( array(
    'primary' => 'Hauptmenü',
    'footer-1' => 'Footer-Menü 1',
    'footer-2' => 'Footer-Menü 2',
    'footer-3' => 'Footer-Menü 3',
    'footer-4' => 'Footer-Menü 4'
  ) );
}

// Remove editor from pages
add_action('admin_init', 'remove_editor');

function remove_editor() {
  remove_post_type_support('page', 'editor');
}

// Enqueue stylesheets & scripts
add_action('wp_enqueue_scripts', 'theme_assets', 100);

function theme_assets() {
  wp_enqueue_style('asset', get_stylesheet_directory_uri() . "/dist/bundle-v1.css");
  wp_enqueue_script('jquery');
  wp_enqueue_script('asset', dirname(get_bloginfo('stylesheet_url')) . '/dist/bundle-v1.js', NULL, false, true);
  wp_enqueue_style('fancybox', dirname(get_bloginfo('stylesheet_url')) . '/src/vendor/fancybox/fancybox.css');
}

// Add AFC option pages
// add_action('init', 'add_option_pages', 10);
//
// function add_option_pages() {
//   if(function_exists('acf_add_options_page')) {
//     acf_add_options_page(array(
//   		'menu_title'  => __('Options', 'asset'),
//       'page_title'  => __('Options', 'asset'),
//       'menu_slug'   => 'theme-options',
//     ));
//   }
// }

// Move Yoast to bottom
add_filter('wpseo_metabox_prio', 'yoasttobottom');

function yoasttobottom() {
  return 'low';
}
