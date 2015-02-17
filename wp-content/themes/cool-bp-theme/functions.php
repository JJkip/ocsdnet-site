<?php

//Register new Menu  
 
function register_bp_default_menus() {
  register_nav_menus(
    array( 'header-menu' => ( 'Header Menu' ))
  );
}
 
add_action( 'init', 'register_bp_default_menus' );
 
?>