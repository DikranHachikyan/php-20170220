<?php
	$dsn = 'mysql:host=localhost;port=3306;dbname=music_store';
	$db = new PDO( $dsn, 'student','student');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$db = new PDO( $dsn, 'root','');//за XAMPP