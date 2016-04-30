<?php



    #Entfernt Admin Toolbar bei Homepage Ansicht
    add_filter('show_admin_bar', '__return_false');



  #Menue Bearbeitungsfunktion
  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Haupt Menu' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  #Content-Bilder mit Klassen versehen
  function image_tag_class($class) {
      $class .= ' img-responsive img-full img-shadow';
      return $class;
  }
  add_filter('get_image_tag_class', 'image_tag_class' );


?>
