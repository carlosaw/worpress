<?php
function as_color_customizer( $wp_customize ) {
  // Settings
  $wp_customize->add_setting('as_color', array('default'=>'#CCCCCC'));
  $wp_customize->add_setting('as_img', array('default' => ''));

  // Sections
  $wp_customize->add_section('as_color_section', array(
    'title' => 'Cor e Imagem Padrão',
    'priority' => '3'
  ));

  // Controllers
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'as_color',
      array(
        'label' => 'Cor padrão do tema',
        'section' => 'as_color_section',
        'settings' => 'as_color'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize,
      'as_img',
      array(
        'label' => 'Imagem padrão do tema',
        'section' => 'as_color_section',
        'settings' => 'as_img',
        'width' => 500,
        'height' => 500
      )
    )
  );
}