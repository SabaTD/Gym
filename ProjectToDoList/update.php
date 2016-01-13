<?php
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
 	
 	if(isset($_POST["id"])) $id = $_POST["id"];
 	if(isset($_POST["satauri"])) $satauri = $_POST["satauri"];
 	if(isset($_POST["agwera"])) $agwera = $_POST["agwera"];

 	echo $id;
 	$message = "chanaceris gaketeba ver moxerxda!";
 	$tarigi = date("Y.m.d");
	
	$update = "UPDATE mylist SET Title='$satauri', Description = '$agwera', Date = '$tarigi' where id='$id'";
	echo $id;
  
 	if ($update) {
 		$message = "chanaceri carmatebit gaketda!";
 	}

 	mysqli_query($conn, $update);
 	mysqli_close($conn);
 	header("location: form.php?msg=$message");
 	

  ?>