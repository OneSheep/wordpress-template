<?php
/*
	Proxy front loader that just passes the control over to wordpress
 */ 

define('WP_USE_THEMES', true);
require( dirname( __FILE__ ) . '/wordpress/wp-blog-header.php' );


/*
	end public/index.php
*/