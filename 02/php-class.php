<?php
	require_once './lib/UserAccount.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP Test</title>
</head>
<body>
<?php
	$user = new UserAccount;
	//$user->userName = 'maria';
	$user->fsname= 'Maria';
	$user->lsname = 'Anderson';
	$user->loginTime = time();
	$user->email = /*$user->userName . */ '@dow.com';
	$user->setPassword('123456');
?>	



<hr>
<pre><?php var_export($user); ?></pre>
</body>
</html>