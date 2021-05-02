<?php
function as_info_customizer( $wp_customize ) {
  // Settings
  $wp_customize->add_setting('as_idade', array('default', ''));
  $wp_customize->add_setting('as_endereco', array('default', ''));
  $wp_customize->add_setting('as_email', array('default', ''));
  $wp_customize->add_setting('as_telefone', array('default', ''));
  $wp_customize->add_setting('as_site', array('default', ''));

  // Sections
  $wp_customize->add_section('as_info_section', array(
    'title' => 'Informações Pessoais',
    'priority' => '2'
  ));

  // Controllers
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_idade',
      array(
        'label' => 'Idade',
        'section' => 'as_info_section',
        'settings' => 'as_idade',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_endereco',
      array(
        'label' => 'Endereço',
        'section' => 'as_info_section',
        'settings' => 'as_endereco',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_email',
      array(
        'label' => 'E-mail',
        'section' => 'as_info_section',
        'settings' => 'as_email',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_telefone',
      array(
        'label' => 'Telefone',
        'section' => 'as_info_section',
        'settings' => 'as_telefone',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'as_site',
      array(
        'label' => 'Site',
        'section' => 'as_info_section',
        'settings' => 'as_site',
        'type' => 'text'
      )
    )
  );
}