<?php
	function __autoload( $class_name){
		$class_name = str_replace('\\', '/',$class_name);
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
    use User\UserAccount as MyUserAccount;
    //use Framework\User\UserAccount;

	$user = new MyUserAccount;
	echo $user->showInfo();
 ?>
<hr>
 <?php
    use Shop\Items\CurrentStock;

	$item = new CurrentStock;
	var_export($item);
 ?>
</body>
</html>