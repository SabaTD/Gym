<?php
 	
 	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
 	
 	if(isset($_POST["id"])) $id = $_POST["id"];
 	if(isset($_POST["title"])) $title = $_POST["title"];
 	if(isset($_POST["description"])) $description = $_POST["description"];

 	echo $id;
 	$message = "Unable to update a note!";
 	$date = date("Y-m-d h:i:sa");
	
	$update = "UPDATE mylist SET Title='$title', Description = '$description', Date = '$date' where id='$id'";
	echo $id;
  
 	if ($update) {
 		$message = "Note was updated succesfully!";
 	}

 	mysqli_query($conn, $update);
 	mysqli_close($conn);
 	header("location: form.php?msg=$message");
 	

  ?>