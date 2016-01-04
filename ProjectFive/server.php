<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$firstName = $_POST["fname"];
	$lastName = $_POST["lname"];
	$email = $_POST["mail"];

	$sql = "INSERT INTO `MyGuests` (`firstname`, `lastname`, `email`) VALUES ('$firstName', '$lastName', '$email')";

	mysqli_query($conn, $sql);
	mysql_close($conn);
	
?>
