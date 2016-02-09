<?php
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
  
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
 	

 	if(isset($_POST["username"])) $username = $_POST["username"];
 	if(isset($_POST["password1"])) $password1 = $_POST["password1"];
 	if(isset($_POST["password2"])) $password2 = $_POST["password2"];
 	if(isset($_POST["email"])) $email = $_POST["email"];
 	if(isset($_POST["personalid"])) $personalid = $_POST["personalid"];
 	if(isset($_POST["phonenumber"])) $phonenumber = $_POST["phonenumber"];
 	if(isset($_POST["birthdate"])) $birthdate = $_POST["birthdate"];


	$registrationdate = date("Y-m-d h:i:sa");

	
	$insert = "INSERT INTO `signup` (`Username`, `Password1` , `Password2` , `Email` , `Gender` , `Personalid` , `Phonenumber` , `Birthdate` , `Registrationdate`)
	VALUES ('$username', '$password1', '$password2' ,  '$password2' ,  '$email' ,  '$personalid' ,  '$phonenumber' ,  '$birthdate' ,  '$registrationdate')";
  
 	
 	mysqli_query($conn, $insert);
 	mysqli_close($conn);
 	header("location: form.php?msg=$message");
 	

  ?>