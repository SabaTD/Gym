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
	<title>To Do List</title>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
</head>
<body>
	<div>
		<h2 id = "first"> To Do List</h2>
		<form class = "form-group1" action = "server.php" method = "POST">
			<strong>Title:</strong><input  id = "input2" type = "text" class = "form-control" name = "title" required="required" placeholder = "Enter title"></br>
			<strong>Description:</strong><textarea class = "form-control" id = "input2" rows = "7" name = "description" required = "required" placeholder = "Enter maximum 500 charecter"></textarea></br>
			<input id = "input3" type = "submit"  class = "btn btn-danger" value = "Cencel">
			<input id = "input3" type = "submit"  class = "btn btn-success" value= "Update">
		</form>
	</div>
		<br><br>
</body>
</html>