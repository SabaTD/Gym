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
	
	<form class="form-group" action="server.php" method="POST">
		Title:<input type="text" class="form-control" name="satauri"></br>
		Description:<textarea class="form-control" rows="5" name="agwera"></textarea></br>
		Adding Date:<input type="text" id="tarigi" class="form-control" name="tarigi" readonly></br>
		<input type="submit"  class="btn btn-primary" name="submit">
	</form>


	<!-- <form class="form-group" action="deleting.php" method="POST">
		<input type="submit" class="btn btn-primary" value="Delete" name="submit">
	</form> !-->

	<form class="form-group" action="update.php" method="POST">
		<input type="submit"  class="btn btn-primary" value="Update" name="submit">
	</form>

	<?php 
		
 		$conn = mysqli_connect("localhost", "root", "", "mydatabase"); 
 		$sql = "SELECT * FROM `mylist`"; 
 		$result = mysqli_query($conn, $sql);

		
		while($row = mysqli_fetch_array($result))
		{
		   
			$id=$row["id"];
		   echo "<a href=\"updating.php?id=$id\">";
 			echo "<br>" ."Title:" . $row["Title"]. "   ".  "Description:" . " ". 
 			$row["Description"]. "Adding Date:". $row["Date"] ."<br>".$row["id"] ;
 		   echo "</a>";
 		   echo "<input type='submit' class='btn btn-primary' value='Delete' name='submit'>";
 		}
 	
 		mysqli_close($conn);
 		
	?>
</body>
</html>