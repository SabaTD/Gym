<?php
	
	$conn = mysqli_connect("localhost", "root", "", "mydb");
	
	$firstName = $_POST["fname"];
	$lastName = $_POST["lname"];
	$email = $_POST["mail"];

	$sql = "INSERT INTO `myguests` (`firstname`, `lastname`, `email`) VALUES ('$firstName', '$lastName', '$email')";

	mysqli_query($conn, $sql);
	mysqli_close($conn);
	
?>
