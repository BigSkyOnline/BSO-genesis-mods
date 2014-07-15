<?php

/*
Plugin Name: BSO Genesis Mods
Plugin URI: https://github.com/BigSkyOnline/BSO-genesis-mods/
Description: Add additional customizations to Genesis Theme.
Version: 1.8.4
Author: Bradford Knowlton
Author URI: http://bradknowlton.com/
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Domain Path:       /languages
Text Domain:       BSO-genesis-mods
GitHub Plugin URI: https://github.com/BigSkyOnline/BSO-genesis-mods
GitHub Branch:     bevxusa.com
*/

function BSO_after_setup_theme() {
    remove_action( 'genesis_header', 'genesis_do_header' ); 
    add_action( 'genesis_header', 'genesis_do_new_header' ); 
    add_action('wp_head','hook_css');

}

add_action( 'after_setup_theme', 'BSO_after_setup_theme' );

function genesis_do_new_header() { 
    echo '<div id="title-area">';
    
    echo '<img src="/wp-content/uploads/2014/07/BEV_X_Logo-250x250.jpg" alt="BEV X Logo" />';
    echo '<img src="/wp-content/uploads/2014/07/Launch_Logo-300x179.jpg" alt="Launch Logo" />'; 
    
    // do_action( 'genesis_site_title' ); 
    // do_action( 'genesis_site_description' ); 
    echo '</div><!-- end #title-area -->'; 
    
    if ( is_active_sidebar( 'header-right' ) || has_action( 'genesis_header_right' ) ) { 
        echo '<div class="widget-area">'; 
        do_action( 'genesis_header_right' ); 
        dynamic_sidebar( 'header-right' ); 
        echo '</div><!-- end .widget-area -->'; 
    } 
} 


function hook_css()
{

$output="<style> 
#header {
    background: none !important;
}
div#title-area img {
	width: 50%;
	max-width: 160px;
	height: auto;
}
</style>";

echo $output;

}