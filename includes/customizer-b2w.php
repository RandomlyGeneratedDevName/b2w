<?php

if ( ! class_exists( 'Kirki' ) ) {
  return;
}

/* PANELS */
new \Kirki\Panel(
    'b2w_theme_option_panel',
    [
      'priority'    =>  10,
      'title'       =>  esc_html__('B2W Theme Options', 'bootstrap2wordpress'),
      'description' =>  esc_html__('Use this to customize the B2W Theme', 'bootstrap2wordpress'),
    ]
  );

  /* SECTIONS */

  // Section -- Subscriber Bar

  new \Kirki\Section(
    'b2w_subscribe_bar',
    [
      'title'       => esc_html__( 'Subscribe Bar', 'bootstrap2wordpress' ),
      'description' => esc_html__( 'This is the subscribe bar', 'bootstrap2wordpress' ),
      'panel'       => 'b2w_theme_option_panel',
      'priority'    => 160,
    ]
  );

  // Section -- Subscriber Bar -- Fields

  new \Kirki\Field\Textarea(
    [
      'settings'    => 'subscribe_text',
      'label'       => esc_html__( 'Subscribe Bar Text', 'bootstrap2wordpress' ),
      'section'     => 'b2w_subscribe_bar',
      'default'     => esc_html__( 'This is a default value', 'bootstrap2wordpress' ),
    ]
  );

  new \Kirki\Field\Code(
    [
      'settings'    => 'subscribe_form',
      'label'       => esc_html__( 'Subscribe Form HTML', 'bootstrap2wordpress' ),
      'description' => esc_html__( 'Please enter HTML code here for your opt-in form.', 'bootstrap2wordpress' ),
      'section'     => 'b2w_subscribe_bar',
      'default'     => '',
      'choices'     => [
        'language' => 'html',
      ],
    ]
  );

    // Section -- Footer

    new \Kirki\Section(
      'b2w_footer_section',
      [
        'title'       => esc_html__( 'Footer', 'bootstrap2wordpress' ),
        'description' => esc_html__( 'This is the Footer section', 'bootstrap2wordpress' ),
        'panel'       => 'b2w_theme_option_panel',
        'priority'    => 160,
      ]
    );

     // Section -- Footer -- Fields

  new \Kirki\Field\Textarea(
    [
      'settings'        => 'footer_copyright',
      'label'           => esc_html__( 'Footer Copyright Text', 'bootstrap2wordpress' ),
      'section'         => 'b2w_footer_section',
      'default'         => esc_html__( 'Copyright SimpleWebsiteCR', 'bootstrap2wordpress' ),
      'partial_refresh' => array(
        'footer_copyright' => array(
          'selector'        => 'footer .copyright p',
          'render_callback' => function() {
            return get_theme_mod('footer_copyright');
          }
        ),
      ),
    ]
  ); 


  // Section -- Footer -- 
