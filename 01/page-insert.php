<?php
	try{
		require_once './includes/pdo_dbconnection.php';
		$sql_insert = "INSERT INTO userInfo
					   (username,passwd,fsname,lsname,email) 
					   VALUES
					   ('maria', sha1('123456'),'Maria','Anderson','maria@no.com')";
		 $result = $db->exec($sql_insert);
	}
	catch( Exception $e){
		$error = $e->getMessage();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connect to Music Store</title>
</head>
<body>
	<h1>Connect to Music Store</h1>
	<?php if (isset($error)):?>
		<h2>Error:<?php echo $error; ?></h2>
		<?php exit; ?>
	<?php endif; ?>
	<?php if( $result):?>
	<h4><?php echo $result ?> row(s) inserted</h4>	
   <?php endif;?>
   
</body>
</html>