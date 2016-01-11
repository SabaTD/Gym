<?php
	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	$id = $_POST['id'];
	$satauri = $_POST["satauri"];
 	$agwera = $_POST["agwera"];
 	$tarigi = $_POST["tarigi"];

	$sql = "UPDATE mylist SET Title='$satauri', Description = '$agwera', Date = '$tarigi' where id='$id'";

	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	header("location: form.php");
	
?>