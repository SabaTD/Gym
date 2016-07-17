<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>
<body>

	<?php 
		if(isset($_GET["alert"]) )
		{
			$msg=$_GET["alert"]; 
			echo "<center>$msg</center>";
		} 
	?>

	<div>

		<h2 id = "header"> To Do List</h2>
		<form class = "form-group" action = "insert.php" method = "POST">
			<strong>Title:</strong><input  id = "titleinput" type = "text" class = "form-control" name = "title" required="required" placeholder = "Enter title"></br>
			<strong>Description:</strong><textarea class = "form-control" id = "descriptioninput" rows = "7" name = "description" required = "required" placeholder = "Enter description"></textarea></br>
			<input id = "submitinput" type = "submit"  class = "btn btn-primary" name = "submit">
		</form>
	</div>
	<br><br>

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
		        echo "<div id = 'div1'>";
			    	echo "<div id = 'div2'>"; 

					    echo "<h3 id = 'title1'>".'Title:' . $row['title']. "</h3>";
					    echo "<h4 id = 'date1'>" ."Adding Date:". $row["dates"]."</h4>" ."</h3>" ."<br>";
			 			echo "<br>";
			 			echo "<h4 id = 'description1'>"."Description:". "</h4>" ."<br>" ."<p id = 'p1'>". $row["description"] ."</p>";
			 			echo "</br>";
			 			echo "<div id = 'div3'>"; 
				 			echo "<a href = \"delete.php?id=$id\" class = \"btn btn-primary\" >Delete </a>";
				 		    echo "<a href = \"update.php?id=$id\" class = \"btn btn-primary\" style='float:left; margin-right:10px; ' >Update </a>";
			 		    echo "</div>";
		 		    echo "</div>";
	 		    echo "</div>";

		    }
		echo "</br>"; echo "</br>";echo "</br>";
		    
		} 
		else 
		{
		    echo "0 results";
		}

		$conn->close();

	?>

</body>
</html>