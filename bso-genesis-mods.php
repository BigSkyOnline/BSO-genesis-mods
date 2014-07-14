<?php

/*
Plugin Name: BSO Genesis Mods
Plugin URI: https://github.com/BigSkyOnline/BSO-genesis-mods/
Description: Add additional customizations to Genesis Theme.
Version: 1.7.9
Author: Bradford Knowlton
Author URI: http://bradknowlton.com/
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Domain Path:       /languages
Text Domain:       BSO-genesis-mods
GitHub Plugin URI: https://github.com/BigSkyOnline/BSO-genesis-mods
GitHub Branch:     bevxusa.com
*/


remove_action( 'genesis_header', 'genesis_do_header' ); 
add_action( 'genesis_header', 'genesis_do_new_header' ); 
function genesis_do_new_header() { 
    echo '<div id="title-area"><img src="your/logo/image.jpg" alt="Site Logo" />'; 
    do_action( 'genesis_site_title' ); 
    do_action( 'genesis_site_description' ); 
    echo '</div><!-- end #title-area -->'; 
    if ( is_active_sidebar( 'header-right' ) || has_action( 'genesis_header_right' ) ) { 
        echo '<div class="widget-area">'; 
        do_action( 'genesis_header_right' ); 
        dynamic_sidebar( 'header-right' ); 
        echo '</div><!-- end .widget-area -->'; 
    } 
} 