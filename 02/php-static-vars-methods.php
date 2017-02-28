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
	UserAccount::show();
?>	
<hr>
<?php echo UserAccount::$dbTable; ?>
<hr>
<?php 
	$u1 = new UserAccount( array( 'level'=>UserAccount::STAFF));
	$u2 = new UserAccount;
	$u1::$dbTable = 'MyTable';
	$u3 = new UserAccount;
 ?>
<pre><?php echo $u2::$dbTable; ?></pre>
<hr>
<pre><?php echo UserAccount::$dbTable; ?></pre>
<hr>
<pre>Objects:<?php echo UserAccount::$count; ?></pre>
<hr>
<pre><?php var_export($u1) ?></pre>
</body>
</html>