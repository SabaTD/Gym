<?php
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
 	
 	$satauri = $_POST["satauri"];
 	$agwera = $_POST["agwera"];
 	$tarigi = $_POST["tarigi"];
 	$id = $_GET['id'];
  
 	$sql = "INSERT INTO `mylist` (`Title`, `Description`, `Date`) VALUES ('$satauri', '$agwera', '2015-6-6')";
  
 
 	mysqli_query($conn, $sql);
 	mysqli_close($conn);
 	header("location: form.php");
 	

  ?>