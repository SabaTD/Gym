<?php
	if(isset($_POST['submit'])){
		$servername = "loclahost";
		$username = "username";
		$password = "password";
		$dbname = "mydb";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn){
			die("Connection failed: ". mysqli_connect_error());
		}

		$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ($_POST[fname], $_POST[lname], $_POST[mail])";

		if(mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		}
		else{
			echo "Error" . $sql. "<br>" . mysqli_error($conn);
		}
		mysql_close($conn);
	}
?>