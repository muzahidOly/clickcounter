<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Counter</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<div class="heading1">

<h1>Click Counter!</h1>

</div>


<?php


?>


<div class="button">
	<form action="increment.php">
		
	
 
<input type="submit" value="Increment">
	</form>
	<form action="decrement.php">
		

	 
	<input type="submit" value="Deccrement">
		</form>


		<form action="reset.php">
	 
	<input type="submit" value="Reset">
		</form>
		
	
		
		</div>

<?php 

/* close connection */
$mysqli->close();
?>





</body>
</html>