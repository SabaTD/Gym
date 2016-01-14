<?php
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
			<label>Title:</label></br><input type="text" class="form-control" name="satauri" value="<?php echo $ragaca1; ?>"></br>
			<label>Description:</label><textarea class="form-control" rows="5" name="agwera"><?php echo $ragaca2; ?></textarea></br>
			<input type="text" value="<?php echo $id ?>" name="id" readonly />
			<input type="submit"  class="btn btn-primary" value="Update" name="submit" />
		</form> 
	</body>
</html>
