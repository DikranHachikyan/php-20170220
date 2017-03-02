<?php
	session_start();

	foreach ($_SESSION as $key => $value) {
		unset($_SESSION[$key]);
	}

	$_SESSION = array();
	$params = session_get_cookie_params();
	setcookie( session_name()
		      , ''
		      , mktime(0,0,0,1,1,1990)
		      , $params['path']
		      , $params['domain']
		      , $params['secure']
		      , $params['httponly']
		      );
	session_destroy();

	header('location:http://web-dev/php-projects/php-internet-app-online-20170206/php-app/04/php-sessions.php');
	exit;