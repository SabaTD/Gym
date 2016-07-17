<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "todolist";

	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$id=$_GET["id"];
	
	$sql = "DELETE FROM list WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	    $msg = "Task deleted succesfully!";
   		header("Location:index.php?alert=$msg");
	} else {
	    $msg = "Can not delete task, try again!";
    	header("Location:index.php?alert=$msg");
	}

	$conn->close();
?>