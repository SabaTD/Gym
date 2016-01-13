<?php
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
 	
 	if(isset($_POST["satauri"])) $satauri = $_POST["satauri"];
 	if(isset($_POST["agwera"])) $agwera = $_POST["agwera"];
 	$message = "chanaceris gaketeba ver moxerxda!";
 	$tarigi = date("Y.m.d");
	
	$chacera = "INSERT INTO `mylist` (`Title`, `Description`, `Date`) VALUES ('$satauri', '$agwera', '$tarigi')";
  
 	if ($chacera) {
 		$message = "chanaceri carmatebit gaketda!";
 	}

 	mysqli_query($conn, $chacera);
 	mysqli_close($conn);
 	header("location: form.php?msg=$message");
 	

  ?>