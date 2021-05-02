<?php
function as_social_customizer( $wp_customize ) {
  // Settings
  $wp_customize->add_setting('as_facebook', array('default', ''));
  $wp_customize->add_setting('as_instagram', array('default', ''));
  $wp_customize->add_setting('as_twitter', array('default', ''));
  $wp_customize->add_setting('as_wordpress', array('default', ''));
  $wp_customize->add_setting('as_youtube', array('default', ''));

  // Sections
  $wp_customize->add_section('as_social_section', array(
    'title' => 'Redes Sociais',
    'priority' => '1
    '
  ));
  // Controllers
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_facebook',
      array(
        'label' => 'Link do Facebook',
        'section' => 'as_social_section',
        'settings' => 'as_facebook',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_instagram',
      array(
        'label' => 'Link do Instagram',
        'section' => 'as_social_section',
        'settings' => 'as_instagram',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_twitter',
      array(
        'label' => 'Link do Twitter',
        'section' => 'as_social_section',
        'settings' => 'as_twitter',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_wordpress',
      array(
        'label' => 'Link do Wordpress',
        'section' => 'as_social_section',
        'settings' => 'as_wordpress',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_youtube',
      array(
        'label' => 'Link do Youtube',
        'section' => 'as_social_section',
        'settings' => 'as_youtube',
        'type' => 'text'
      )
    )
  );
}