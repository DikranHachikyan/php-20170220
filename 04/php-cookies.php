<?php 
	if( isset($_COOKIE['num_visits'])){
		$count = $_COOKIE['num_visits'];
	}
	$count++;
	setcookie( 'num_visits'
		     ,  $count
		     ,  time() + 3600
		     , ''
		     , ''
		     , false
		     , true  
		     );
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Вие посетихте странцата <?php echo $count; ?> път(и)</h2>
	<form action="./php-delete-cookie.php">
 	 <input type="submit" value="Delete Cookie">
 	</form>
</body>
</html>