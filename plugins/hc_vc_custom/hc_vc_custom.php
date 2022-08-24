<?php
 
/* 
Plugin Name: HC VC Custom
Description: Plugin regroupant différents shortcode pour Visual Composer (map OSM, etc)
Author: Human's Connexion - Lambert Delaye
Author URI: https://www.humansconnexion.com
Version: 1.0
*/
 
define( 'HCVC_PLUGIN', __FILE__ );
 
define( 'HCVC_PLUGIN_BASENAME',
 plugin_basename( HCVC_PLUGIN ) );
 
define( 'HCVC_PLUGIN_DIR',
 untrailingslashit( dirname( HCVC_PLUGIN ) ) );
 
// USE hcvc_plugin_url to display plugin URL
function hcvc_plugin_url( $path = '' ) {
 $url = plugins_url( $path, HCVC_PLUGIN );
 
 if ( is_ssl() && 'http:' == substr( $url, 0, 5 ) ) {
 $url = 'https:' . substr( $url, 5 );
 }
 
 return $url;
}
 
/**
* Register Custom Visual Composer Elements
*/
 add_action( 'vc_before_init', 'hcvc_before_init_actions' );
 
 function hcvc_before_init_actions() {
/*  require_once HCVC_PLUGIN_DIR . '/inc/vc-elements/hc_map_multimarker.php'; */
 require_once HCVC_PLUGIN_DIR . '/inc/vc-elements/hc_img_menu.php';
 require_once HCVC_PLUGIN_DIR . '/inc/vc-elements/hc_img_recherche.php';
 }
 
/**
* Enqueue Scripts and CSS needed files
*/