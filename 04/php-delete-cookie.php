<?php
	if( isset( $_COOKIE['num_visits'])){
		setcookie( 'num_visits'
		     ,  $count
		     ,  mktime( 0,0,0, 1, 1, 1990)
		     , ''
		     , ''
		     , false
		     , true  
		     );
	}
    header('location:http://web-dev/php-projects/php-internet-app-online-20170206/php-app/04/php-cookies.php');
    exit;
