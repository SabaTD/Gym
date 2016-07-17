	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "todolist";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT id, title, description, dates FROM list";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    
		    while($row = $result->fetch_assoc())
		    {
		    	$id = $row["id"];
		    	$title = $row['title'];
    			$description = $row['description'];
    			$date = $row['dates'];   
		    }    
		} 
		else 
		{
		    echo "0 results";
		}

		$conn->close();

	?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<form class="form-group" action="update_action.php" method="post">
			Title:<input type="text" class="form-control" name="title" value="<?php echo $title; ?>"></br>
			Description:<textarea class="form-control" rows="5" name="description"><?php echo $description; ?></textarea></br>
			<input type="text" value="<?php echo $id ?>" name="id" readonly />
			<input type="submit"  class="btn btn-primary" value="Update" name="submit">
		</form> 
	</body>
</html>