<?php
/**
* Plugin Name: WP Textarea Autosize
* Plugin URI: https://github.com/programmieraffe/wp-textarea-autosize
* Description: Simple plugin which adds autosize to all textareas
* Version: 0.9
* Author: programmieraffe
* Author URI: https://github.com/programmieraffe
* License:  MIT
* License URI: https://opensource.org/licenses/MIT
**/

/* add script in footer, require jquery */


function wp_textarea_autosize_scripts() {

    wp_enqueue_script('autosize', plugins_url( '/js/autosize/autosize.min.js' , __FILE__ ), array('jquery'), '4.0.2', true);

    wp_enqueue_script( 'wp-textarea-autosize', plugins_url( '/js/wp-textarea-autosize.js' , __FILE__ ), array( 'autosize', 'jquery' ), '0.9', true );

}

add_action( 'wp_enqueue_scripts', 'wp_textarea_autosize_scripts' );
