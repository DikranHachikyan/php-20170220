<?php
	try{
		require_once './includes/pdo_dbconnection.php';
		$sql = 'SELECT stockID sid, title, artist, price  FROM currentStock  WHERE 1=1';
		$result = $db->query( $sql );
		$errorInfo = $db->errorInfo();
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
	<?php if( $result && ($numrows = $result->rowCount()) ):?>
		<h3>Found <?php echo $numrows; ?> row(s)</h3>
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Artist</th>
			<th>Price</th>
		</tr>
		<?php while( $row = $result->fetch() ):?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['artist']; ?></td>
			<td><?php echo $row['price']; ?></td>
		</tr>
	<?php endwhile; ?>
	</table>
   <?php endif;?>
   <pre><?php print_r($errorInfo); ?></pre>
</body>
</html>