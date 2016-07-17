<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "todolist";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	if(isset($_POST["id"])) $id = $_POST["id"];
 	if(isset($_POST["title"])) $title = $_POST["title"];
 	if(isset($_POST["description"])) $description = $_POST["description"];
 	$date = date("Y-m-d h:i:sa");
	$sql = "UPDATE list SET title='$title', description = '$description', dates = '$date' where id='$id'";

	if ($conn->query($sql) === TRUE) {
	    $msg = "Task updated succesfully!";
   		header("Location:index.php?alert=$msg");
	} else {
		$msg = "Can not update task, try again!";
    	header("Location:index.php?alert=$msg");
	}

	$conn->close();
?>