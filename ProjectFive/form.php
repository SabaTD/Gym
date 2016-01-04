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
	
 		$conn = mysqli_connect("localhost", "root", "", "mydb"); //რადგან აქ გიწერია ის ზედა აღარ უნდა, პირდაპირ აქ ჩაწერე
 		$sql = "SELECT `fname`, `lname`, `mail` FROM `myguests`"; // ` სიმბოლო  გამოიყენე როცა  SQL ბრძანებაში იყენებ თეიბლის სახელს, თეიბლის  ველებს, 
 		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($result))
		{
 			echo "FirstName:" . $row["fname"]. "LastName:" . $row["lname"]. "Email:". $row["mail"]. "<br>";
 		}
 	
 		mysqli_close($conn);
	?>
</body>
</html>
