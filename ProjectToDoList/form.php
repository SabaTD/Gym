<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<script type="text/javascript">
	function myfunc()
	{
		var d= new Date();
		var a = d.getDate();
		var b = d.getMonth()+1;
		var c = d.getFullYear();
		var x=d.getHours();
		var y=d.getMinutes();
		var z=d.getSeconds();
		v=a+"/" +b+"/"+ c+ " " +x+":"+y+":"+z;
		document.getElementById("tarigi").value=v;//new Date;
		
	}
		setInterval(myfunc, 1000);
	
	</script>
</head>
<body>
	<h2 id="first"> To Do List</h2>
	<form class="form-group" action="server.php" method="POST">
		Title:<input type="text" class="form-control" name="satauri"></br>
		Description:<textarea class="form-control" rows="7" name="agwera"></textarea></br>
		<!--Adding Date:<input type="text" id="tarigi" class="form-control" name="tarigi" readonly></br>-->
		<input type="submit"  class="btn btn-primary" name="submit">
	</form>
	<br><br>


	<!-- <form class="form-group" action="deleting.php" method="POST">
		<input type="submit" class="btn btn-primary" value="Delete" name="submit">
	</form> -->

	<!--  <form class="form-group" action="update.php" method="POST">
		<input type="submit"  class="btn btn-primary" value="Update" name="submit">
	</form> -->

	<?php 
		
 		$conn = mysqli_connect("localhost", "root", "", "mydatabase"); 
 		$sql = "SELECT * FROM `mylist`"; 
 		$result = mysqli_query($conn, $sql);

		
		while($row = mysqli_fetch_array($result))
		{
		   
			$id=$row["id"];
			echo "<div id='div1'>";

		    	echo "<div id='div2'>"; 

				    echo "<h3 id='title1'>".'Title:' . $row['Title']. "</h3>";
				    echo "<h4 id='date1'>" ."Adding Date:". $row["Date"]."</h4>" ."</h3>" ."<br>";
		 			//echo "Adding Date:". $row["Date"] ."<br>"."<br>"."<br>";
		 			echo "<br>";
		 			echo "<h4 id='description1'>"."Description:". "</h4>" ."<br>" ."<p id='p1'>". $row["Description"] ."</p>";


		 			//echo "<br>".$row["id"];

				    //echo "<br>" ."Title:" . $row["Title"]. " " .
		 			//"Adding Date:". $row["Date"] ."<br>".
		 			//"Description:" . " ". $row["Description"] .
		 			//"<br>".$row["id"];

		 			//echo "</div>";
 		    
		 			echo "</br>";
		 			echo "<div id='div3'>"; 
			 			echo "<a href=\"deleting.php?id=$id\">Delete &nbsp;&nbsp;</a>";
			 		    echo "<a href=\"updating.php?id=$id\">Update </a>";
		 		    echo "</div>";
	 		    echo "</div>";
 		    echo "</div>";
 		}
 		echo "</br>";
 		echo "</br>";
 	
 		mysqli_close($conn);
 		
	?>
</body>
</html>