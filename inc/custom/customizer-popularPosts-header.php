<?php
function theme_popularPost_header_customizer($wp_customize)
{
  $wp_customize->add_section('scm_beautiful_popularPost_scheme', array(
    'title'    => '人気の記事タイトル',
    'priority' => 80,
  ));
  // Page Title
  $wp_customize->add_setting('popularPost_header', array(
    'default' => '人気の記事',
  ));
  $wp_customize->add_control('popularPost_header', array(
    'label'   => '人気の記事タイトル',
    'section' => 'scm_beautiful_popularPost_scheme',
    'type'    => 'text',
  ));
}
add_action('customize_register', 'theme_popularPost_header_customizer');

// Display popular post header
function the_custom_popularPost_header()
{
  echo '<h2>';
  echo get_theme_mod('popularPost_header', '人気の記事');
  echo '</h2>';
}
