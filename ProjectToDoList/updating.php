<?php
<<<<<<< HEAD

 	$con = mysqli_connect("localhost", "root", "", "mydatabase");
 	$id = $_GET['id'];
  	
 	if (!$con)
 	    die("Connection failed: " . mysqli_connect_error());
  	
    $result = mysqli_query($con, "SELECT * FROM `mylist` WHERE `id` = '$id'");
     
 	$row = mysqli_fetch_array($result);
 	$title = $row['Title'];
    $description = $row['Description'];
    $date = $row['Date'];

=======
	$id = $_GET['id'];

	//როცა ასე წერ, აღარაა საჭირო ზემოთ განსაზღვრო. პირდაპირ აქ ჩაწერე
	$con = mysqli_connect("localhost", "root", "", "mydatabase");
	
	if (!$con)
	    die("Connection failed: " . mysqli_connect_error());
	
	//ქართული სახელები ცვლადზე არის  საშინელება ;დ
	//არასოდეს არ გამოიყენო mysql_ ფუნქციები, გამოიყენე mysqli
	//განსხვავება თუ გაინტერესებს დაგუგლე
    	$result = mysqli_query($con, "SELECT * FROM `mylist` WHERE `id` = '$id'");
    
	$row = mysqli_fetch_array($result);
		$title = $row['Title'];
    		$description = $row['Description'];
    		$date = $row['Date'];
>>>>>>> 7feac4394eb68e32ad674613e6677c459b32058d
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
<<<<<<< HEAD
			Title:<input type="text" class="form-control" name="title" value="<?php echo $title; ?>"></br>
			Description:<textarea class="form-control" rows="5" name="description"><?php echo $description; ?></textarea></br>
			<input type="text" value="<?php echo $id ?>" name="id" readonly />
			<input type="submit"  class="btn btn-primary" value="Update" name="submit">
=======
			<label>Title:</label></br><input type="text" class="form-control" name="satauri" value="<?php echo $ragaca1; ?>"></br>
			<label>Description:</label><textarea class="form-control" rows="5" name="agwera"><?php echo $ragaca2; ?></textarea></br>
			<input type="text" value="<?php echo $id ?>" name="id" readonly />
			<input type="submit"  class="btn btn-primary" value="Update" name="submit" />
>>>>>>> 7feac4394eb68e32ad674613e6677c459b32058d
		</form> 
	</body>
</html>
