<?php
	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "DELETE FROM mylist WHERE Title=' '";

	if (mysqli_query($conn, $sql)) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	header("location: form.php");
	
?>