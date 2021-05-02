<?php
require get_template_directory().'/include/theme-customizer/social.php';
require get_template_directory().'/include/theme-customizer/info.php';
require get_template_directory().'/include/theme-customizer/color.php';

function as_customize_register( $wp_customize ) {

  as_social_customizer( $wp_customize );
  as_info_customizer( $wp_customize );
  as_color_customizer( $wp_customize );
}