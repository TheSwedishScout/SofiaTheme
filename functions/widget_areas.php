<?php
  function sofia_max_widgets_init() {
      register_sidebar( array(
        'name'          => __( 'Sid panel', 'sofiascoutkar' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets i denna sidpanel visas på alla sidor förutom start sidan', 'sofiascoutkar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
      ) );
      register_sidebar(array(
        'name' 			=> __('action', 'sofiascoutkar' ),
        'id'            => 'action',
        'description'   => __( 'Action knapp i under kår namn. Ska bara vara en knapp!', 'sofiascoutkar' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
      ));
      register_sidebar(array(
        'name' 			=> __('Kontakt foten', 'sofiascoutkar' ),
        'id'            => 'contact',
        'description'   => __( 'kontaktinformation i foten', 'sofiascoutkar' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
      ));
  }
  add_action( 'widgets_init', 'sofia_max_widgets_init' );
?>
