<?php
	$search = $_GET['search'];

	try{
		require_once './includes/pdo_dbconnection.php';
		$sql = "SELECT stockid, title, artist, price 
		        FROM currentStock 
		        WHERE title LIKE :title";
		if( !empty($search)){
			$stm = $db->prepare($sql);
			$stm->bindValue(':title', '%'.$search . '%');
			$stm->execute();		
		}        
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
	<form action="">
		<input type="text" name="search" placeholder="CD Title">
		<input type="submit" value="Search">
	</form>
   <?php if( $stm && $stm->rowCount() ): ?>	
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Artist</th>
			<th>Price</th>
		</tr>
		<?php while( $row = $stm->fetch() ):?>
		<tr>
			<td><?php echo $row['stockid']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['artist']; ?></td>
			<td><?php echo $row['price']; ?></td>
		</tr>
	<?php endwhile; ?>
	</table>
   <?php endif; ?>
</body>
</html>