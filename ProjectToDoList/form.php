<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
</head>
<body>
	<form action="server.php" method="POST">
		Title:<input type="text" name="satauri"></br></br>
		Description:<input type="text" name="agwera"></br></br>
		Adding Date:<input type="text" name="tarigi"></br></br>
		<input type="submit" name="submit">
	</form>

	<br>

	<form action="delete.php" method="POST">
		<input type="submit" value="Delete" name="submit">
	</form>

	<br>

	<form action="update.php" method="POST">
		<input type="submit" value="Update" name="submit">
	</form>

	<?php 
		
 		$conn = mysqli_connect("localhost", "root", "", "mydatabase"); 
 		$sql = "SELECT * FROM `mylist`"; 
 		$result = mysqli_query($conn, $sql);

		
		while($row = mysqli_fetch_array($result))
		{
 			echo "<br>" ."Title:" . $row["Title"]. "   ".  "Description:" . " ". $row["Description"]. "Adding Date:". $row["Date"]. "<br>";
 		}
 	
 		mysqli_close($conn);
 		
	?>
</body>
</html>