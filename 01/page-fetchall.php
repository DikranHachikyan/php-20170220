<?php
	try{
		require_once './includes/pdo_dbconnection.php';
		$sql = 'SELECT stockID sid, title, artist, price  FROM currentStock';
		$result = $db->query( $sql );
		$rows = $result->fetchAll(PDO::FETCH_ASSOC);

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
<pre>
	<?php print_r($rows); ?>
</pre>

</body>
</html>