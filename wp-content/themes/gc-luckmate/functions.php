<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer menu' ),
	  //'corners-menu' => __( 'Corners menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


function my_theme_add_scripts() {
 wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAMlEYJeNBB5YhmQRJgRX3ENA_LWiNo2cQ', array(), '3', true );
 wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/library/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
}
 
add_action( 'wp_enqueue_scripts', 'my_theme_add_scripts' );
 
/*function my_acf_google_map_api( $api ){
 
 $api['key'] = 'AIzaSyAMlEYJeNBB5YhmQRJgRX3ENA_LWiNo2cQ';
 
 return $api;
 
}
 
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');*/

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAMlEYJeNBB5YhmQRJgRX3ENA_LWiNo2cQ');
}

add_action('acf/init', 'my_acf_init');