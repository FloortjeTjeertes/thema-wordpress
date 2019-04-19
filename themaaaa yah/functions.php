<?php
function themaFlorian_bronnen(){
   wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','themaFlorian_bronnen');





// <!-- registreer menus -->
register_nav_menus( array (
  'hoofd' => _('hoofdmenu'),
  'footer' => _('menu in footer'),

));


?>
