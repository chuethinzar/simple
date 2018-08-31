<?php
function theme_relatedPost_header_customizer($wp_customize)
{
  $wp_customize->add_section('scm_beautiful_relatedPost_scheme', array(
    'title'    => '関連する投稿のヘッダー',
    'priority' => 80,
  ));
  // Page Title
  $wp_customize->add_setting('relatedPost_header', array(
    'default' => '関連記事',
  ));
  $wp_customize->add_control('relatedPost_header', array(
    'label'   => '関連する投稿のヘッダー',
    'section' => 'scm_beautiful_relatedPost_scheme',
    'type'    => 'text',
  ));
}
add_action('customize_register', 'theme_relatedPost_header_customizer');

// Display related post header
function the_custom_relatedPost_header()
{
  echo '<h2>';
  echo get_theme_mod('relatedPost_header', '関連記事');
  echo '</h2>';
}
