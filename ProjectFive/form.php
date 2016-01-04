<!DOCTYPE html>
<html>
<head>
	<title>Insert into Database</title>
</head>
<body>
	<form action="server.php" method="POST">
		Firstname:<input type="text" name="fname"></br></br>
		Lastname:<input type="text" name="lname"></br></br>
		Email:<input type="text" name="mail"></br></br>
		<input type="submit" name="submit">
	</form>

	<?php 
		$servername = "localhost";
 		$username = "root";
 		$password = "";
 		$dbname = "mydb";

 		$conn = mysqli_connect("localhost", "root", "", "mydb");
 		$sql = "SELECT fname, lname, mail FROM myguests";
 		$result = mysqli_query($conn, $sql);

 		if(mysqli_num_rows($result) > 0) {
 			while($row = mysqli_fetch_assoc($result)){
 				echo "FirstName:" . $row["fname"]. "LastName:" . $row["lname"]. "Email:". $row["mail"]. "<br>";
 			}
 		}
 		else{
 			echo "0 results";
 		}

 		mysqli_close($conn);
	?>
</body>
</html>