<?php
add_action('customize_register', 'theme_customizer');

function theme_customizer($wp_customize) {
  $wp_customize->add_section('logo_section', array(
    'title' => __('Logo', 'wp-boilerplate'),
  ));

  $wp_customize->add_setting('logo');

  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo', array(
    'label'    => __('Logo', 'wp-boilerplate'),
    'section'  => 'logo_section',
    'settings' => 'logo',
  )));

  $wp_customize->add_setting('logo_brand');

  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_brand', array(
    'label'    => __('Logo (Brand)', 'wp-boilerplate'),
    'section'  => 'logo_section',
    'settings' => 'logo_brand',
  )));
}
