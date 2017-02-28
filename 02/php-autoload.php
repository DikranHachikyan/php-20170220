<?php
	function __autoload( $class_name){
		echo 'Auto Load:'.$class_name.'<br>';
		require_once './lib/'.$class_name.'.class.php';	
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP Test</title>
</head>
<body>

<hr>
<?php 
	$user = new UserAccount;
	echo $user->showInfo();
 ?>
<hr>
 <?php 
	$item = new CurrentStock;
	var_export($item);
 ?>
</body>
</html>