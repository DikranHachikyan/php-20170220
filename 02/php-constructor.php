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
	$user = new UserAccount(array(  'userName'=>'maria'
		                           ,'fsname'=>'Maria'
		                           , 'message'=>'Hello Maria'
		                           ,'lsname'=>'Anderson'
		                           ));
	
?>	
<hr>
<?php echo $user->showInfo(); ?>
<hr>
<h2>Login Time:<?php echo $user->getLoginTime(); ?></h2>

<hr>
<pre><?php var_export($user); ?></pre>
</body>
</html>