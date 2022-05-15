<?php
// https://developer.wordpress.org/reference/functions/wp_enqueue_style/
// https://developer.wordpress.org/reference/functions/wp_enqueue_script/
function add_theme_scripts() {
 
  wp_enqueue_style( 'cnr-detailing-styles', get_template_directory_uri() . '/dist/styles.css', array(), '1.0', 'all');

  wp_enqueue_script( 'cnr-detailing-script', get_template_directory_uri() . '/dist/all.js', array ( 'jquery', 'jquery-effects-slide' ), '1.0', true);

  // This will output a script data in the html which can be used in other javascript scripts
  wp_localize_script('cnr-detailing-script', 'cnrdetailingData', array(
    'root_url' => get_site_url(),
  ));
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );