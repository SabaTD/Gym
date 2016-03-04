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
	
	
	echo "<div id='main'>";
		if(isset($_GET["alert"])){ $msg=$_GET["alert"]; echo $msg;}
		echo "<br />"."<br />";
		echo "Login"."<br />"."<br />";
		echo "<form action='login_action.php' method='post' class = 'form-group' >";
		echo "<input type='text' name='Login' class = 'form-control' placeholder='Login'>"."<br />";
		echo "<input type='password' name='password' class = 'form-control' placeholder='Password'>"."<br />";
		echo "<input type='submit' value='Login' class = 'btn btn-primary'>";
		echo "</form>";
	echo "</div>";
?>
</body>
</html>