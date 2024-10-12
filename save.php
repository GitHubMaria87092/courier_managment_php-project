<?php
	include 'config.php';
	$name=$_POST['name'];

	$sql = "INSERT INTO `category`( `name`) VALUES ('$name')";
	if (mysqli_query($con, $sql)) {
		echo 1;
	} 
	else {
		echo 0;
	}

?>