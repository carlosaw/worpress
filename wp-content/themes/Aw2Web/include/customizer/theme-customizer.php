<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/depoimentos.php';

function aa_customize_register( $wp_customize ) {

  aa_social_customizer($wp_customize);

  aa_depoimentos_customizer( $wp_customize);
  
}