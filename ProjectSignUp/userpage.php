<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
	#main
	{
		width:500px;
		height: 600px;
		margin: 0 auto;
	}
	</style>
</head>
<body>

<?php
	
	$conn=mysql_pconnect("localhost","root");
	$dbconn=mysql_select_db("mydatabase");
	$select=mysql_query("select * from mylist8");
	//velebis raodenoba
	$raodenoba=mysql_num_rows($select);
	for ($i=0; $i <$raodenoba ; $i++) 
	{ 
	$personebis_masivi=mysql_fetch_array($select);
	$recorddd=$personebis_masivi[0];
		
	echo "<form action='update_action.php' method='post' class = 'form-group'>";
		echo "User : ".$personebis_masivi['Login']."&nbsp"."&nbsp";
		echo "<input type='hidden' name='record_id' value='$recorddd'>";
		echo "<input type='submit' value='update' class = 'btn btn-primary'>";
	echo "</form>";

	}
?>