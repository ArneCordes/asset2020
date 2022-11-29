<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="stylesheet" href="//fonts.typotheque.com/WF-023925-009566.css" type="text/css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/src/fonts/blair/MyFontsWebfontsKit.css">
    <link rel="stylesheet" href="https://i.icomoon.io/public/e4fe634d96/ASSET2022/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php get_template_part( 'partials/page-header' ); ?>
