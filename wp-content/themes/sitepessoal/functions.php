<?php
// Includes
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/theme-customizer/theme-customizer.php';
// Hooks
add_action('wp_enqueue_scripts', 'as_theme_styles');
add_action('after_setup_theme', 'as_after_setup');
add_action('customize_register', 'as_customize_register');