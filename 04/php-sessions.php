<?php 
	function __autoload( $class_name){
		$class_name = str_replace('\\', '/',$class_name);
		require_once './lib/'.$class_name.'.class.php';	
	}
	session_start();
    if( isset($_COOKIE['PHPSESSID'])){
    	$SES = $_COOKIE['PHPSESSID'];
    	session_id($SES);
    }
    else{
    	$SES = session_id();
    }

    $user = array('user' => 'maria', 'email'=>'maria.no.com', 'loginTime'=>time() );

    $account = new \User\UserAccount;

    $_SESSION['user'] = $user;
    $_SESSION['account'] = $account;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session</title>
</head>
<body>
	<h2>Session ID:<?php echo  $SES; ?></h2>
	<form action="./php-session-destroy.php">
		<input type="submit" value="Destroy Session">
	</form>
</body>
</html>