<?php
/*
 
Plugin Name: First Shortcode
 
Plugin URI: https://github.com/nathanramsdell/
 
Description: Registering a Shortcode for the first time. 
 
Version: 1.0
 
Author: Nathan Ramsdell
 
Author URI: https://github.com/nathanramsdell/
 
License: GPLv2 or later
 
Text Domain: plugintest
 
*/

add_shortcode( 'my_first_shortcode', 'my_first_shortcode' );
function my_first_shortcode() {
    return 'hi!';
}

?>