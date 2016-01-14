<?php
	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "mydatabase";
 /* 
	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
*/
    $conn=mysql_connect("localhost", "root");
    $db=mysql_select_db("mydatabase");
	$id = $_GET['id'];
	
    $shedegi=mysql_query("select * from mylist where id='$id'");
    
   
    $shedegi_array=mysql_fetch_array($shedegi);
    $ragaca1=$shedegi_array['Title'];
    $ragaca2=$shedegi_array['Description'];
    $ragaca3=$shedegi_array['Date'];
	//$sql = "SELECT mylist SET Title='$satauri', Description = '$agwera', Date = '$tarigi' where id='$id'";


	/*if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	*/
	//mysqli_close($conn);
	
	
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

		Title:<input type="text" class="form-control" name="satauri" value="<?php echo $ragaca1; ?>"></br>
		Description:<textarea class="form-control" rows="5" name="agwera"><?php echo $ragaca2; ?></textarea></br>
		<!-- Adding Date:<input type="text" id="tarigi" class="form-control" name="tarigi" value=" <?php echo $ragaca3 ?>"  readonly></br> -->
		<input type="text" value="<?php echo $id ?>" name="id" readonly />
		<input type="submit"  class="btn btn-primary" value="Update" name="submit">

</form> 



</body>
</html>
