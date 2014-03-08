<?php 
/**
*Plugin Name: Aaron's Custom Login
*Plugin URL: http://aaronjcksn.net
*Description: This is a custom login for WordPress
*Version: 1.0
*Author: Aaron Jackson
*Author URL: http://aaronjckson.net
**/

function custom_login_css() { 
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url( '/styles.css' ,__FILE__) . '"/> ';
}
add_action ('login_head','custom_login_css');

add_filter('login_headerurl', 'custom_login_header_url');
function custom_login_heder_url($url) { 
	return 'http://wp-sandbox.dev/';
}


 ?>