<?php
	include_once("includes/dbconnect.php");
	if(isset($_POST["title"])) $title = $_POST["title"];
	if(isset($_POST["description"])) $description = $_POST["description"];
	$date = date("Y-m-d h:i:sa");
	$insert = mysql_query("insert into list (title, description, dates) value('$title', '$description', '$date')");
	if($insert)
	{
		$msg = "Task added!";
	    header("Location:index.php?alert=$msg");
	}
	else
	{
		$msg = "Task did not added, try again!";
	    header("Location:index.php?alert=$msg");
	}

?>