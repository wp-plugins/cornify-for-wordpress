<?php
/*
Plugin Name: Cornify for WordPress
Plugin URI: http://bandonrandon.wordpress.com/
Description: This plugin will cornify your site if the user dosen't move their mouse for 5 seconds. 
Version: 1.0 
Author: Brooke Dukes  
Author URI: http://bandonrandon.wordpress.com/
Date: 2011, April 3rd

This plugin was inspired by Mihai Nica's (http://redecs.net/) 
Upside Down WordPress (http://wordpress.org/extend/plugins/upside-down-wordpress/)
and cornify.com

The javascript used is a modified version of conify.js from http://www.cornify.com/
also uses jquery.idle  (https://github.com/jasonmcleod/jquery.idle) and 
replacejscssfile from javascript kit (http://www.javascriptkit.com/javatutors/loadjavascriptcss2.shtml)


*/
add_action('template_redirect', 'BR_cornify');
 
function BR_cornify() {
	/* //uncomment these lines to make the plugin only active for one day. Default April 1 
	$current_time =  current_time('mysql', '0'); //get current blog time
	$ts =strtotime($current_time); //parse the sql blog time to a php useable format
	$check_date = date('m/d', $ts);  // put the date in a format we can check
	$april_fools_day = "04/01"; // this is April 1  
	if($check_date == $april_fools_day){*/
		if(!is_admin()){
			wp_enqueue_script('cornify', plugins_url('utils.js', __FILE__), array('jquery'), '1.0' );
		}
	/* } // this one too for date check 
	*/
}

?>