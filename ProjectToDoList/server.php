<?php
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
 	
 	if(isset($_POST["title"])) $title = $_POST["title"];
 	if(isset($_POST["description"])) $description = $_POST["description"];
 	$message = "Unable to create a note!";
 	//$date = date("Y.m.d");
	$date = date("Y-m-d h:i:sa");

	
	$insert = "INSERT INTO `mylist` (`Title`, `Description`, `Date`) VALUES ('$title', '$description', '$date')";
  
 	if ($insert) {
 		$message = "Note was succesfully created!";
 	}

 	mysqli_query($conn, $insert);
 	mysqli_close($conn);
 	header("location: form.php?msg=$message");
 	

  ?>