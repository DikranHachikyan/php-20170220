<?php
	try{
		require_once './includes/pdo_dbconnection.php';

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
	<?php if( $db ): ?>
		<h2>Successful connection</h2>
	<?php elseif (isset($error)):?>
		<h2>Error:<?php echo $error; ?></h2>
	<?php endif; ?>
</body>
</html>