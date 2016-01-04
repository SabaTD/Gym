<?php
	if(isset($_POST['submit'])){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn){
			die("Connection failed: ". mysqli_connect_error());
		}
		
		$firstName = $_POST["fname"];
		$lastName = $_POST["lastName"];
		$email = $_POST["email"];

		$sql = "INSERT INTO `MyGuests` (`firstname`, `lastname`, `email`) VALUES ('$firstName', '$lastName', '$email')";

		if(mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		}
		else{
			echo "Error" . $sql. "<br>" . mysqli_error($conn);
		}
		mysql_close($conn);
	}
?>
