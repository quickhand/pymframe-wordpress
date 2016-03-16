<?php
/* Plugin Name: Pymframe Plugin
Plugin URI: https://github.com/quickhand/pymframe-wordpress
Description: Embed responsively
Version: 1.0
Author: Marc Lajoie
Author URI: http://marclajoie.info/
License: ISC
*/

function handle_pymframe( $atts ) {
    $output = '';
 
    $pymframe_atts = shortcode_atts( array(
        'id' => '',
        'url' => '',
        'class' => ''
    ), $atts );
    
    $output = '
        <div 
            id="'.$pymframe_atts['id'].'"
            data-pym-src="'.$pymframe_atts['url'].'" 
            class="pymframe '.$pymframe_atts['class'].'"
            >
        </div>
    ';
    wp_enqueue_script( 'pymframejs',plugins_url('js/pym.min.js', __FILE__));
    return $output;
}

add_shortcode( 'pymframe', 'handle_pymframe' );

