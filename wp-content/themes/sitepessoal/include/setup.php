<?php
function as_theme_styles() {
  // CSS
  wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
  wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css', array('bootstrap_css'));

  // JAVA SCRIPT
  wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);
}
function as_after_setup() {
  add_theme_support('title-tag');
}