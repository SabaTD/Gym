<?php

 	$con = mysqli_connect("localhost", "root", "", "mydatabase");
 	$id = $_GET['id'];
  	
 	if (!$con)
 	    die("Connection failed: " . mysqli_connect_error());
  	
    $result = mysqli_query($con, "SELECT * FROM `mylist` WHERE `id` = '$id'");
     
 	$row = mysqli_fetch_array($result);
 	$title = $row['Title'];
    $description = $row['Description'];
    $date = $row['Date'];

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<form class="form-group" action="update.php" method="post">
			Title:<input type="text" class="form-control" name="title" value="<?php echo $title; ?>"></br>
			Description:<textarea class="form-control" rows="5" name="description"><?php echo $description; ?></textarea></br>
			<input type="text" value="<?php echo $id ?>" name="id" readonly />
			<input type="submit"  class="btn btn-primary" value="Update" name="submit">
		</form> 
	</body>
</html>
