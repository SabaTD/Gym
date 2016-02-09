<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<script type="text/javascript">
		function myfunc()
		{
			var d= new Date();
			var a = d.getDate();
			var b = d.getMonth()+1;
			var c = d.getFullYear();
			var x = d.getHours();
			var y = d.getMinutes();
			var z = d.getSeconds();
			v = a+"/" +b+"/"+ c+ " " +x+":"+y+":"+z;
			document.getElementById("tarigi").value = v;
		}
			setInterval(myfunc, 1000);
		</script>

	</head>

	<body>

		<div>
			<h2 id = "first"> Sign Up</h2>
			<form class = "form-group" action = "server.php" method = "POST">
				<strong>Username</strong><input  id = "input1" type = "text" class = "form-control" name = "username" required="required" placeholder = "Username"></br>
				<strong>Password</strong><input  id = "input1" type = "text" class = "form-control" name = "password1" required="required" placeholder = "Password"></br>
				<strong>Re-Write Password</strong><input  id = "input1" type = "text" class = "form-control" name = "password2" required="required" placeholder = "Password"></br>
				<strong>E-mail</strong><input  id = "input1" type = "text" class = "form-control" name = "email" required="required" placeholder = "Enter Correct E-mail"></br>
				<strong>Gender</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      			<input type="radio" name="optradio">Male &nbsp;&nbsp;
	      			<input type="radio" name="optradio">Female<br><br>
				<strong>Personal ID</strong><input  id = "input1" type = "text" class = "form-control" name = "personalid" required="required" placeholder = "Enter your personal ID"></br>
				<strong>Phone Number</strong><input  id = "input1" type = "text" class = "form-control" name = "phonenumber" required="required" placeholder = ""></br>
				<strong>Date Of Birth</strong><input  id = "input1" type = "text" class = "form-control" name = "birthdate" required="required" placeholder = ""></br>

				<input id = "input1" type = "submit"  class = "btn btn-primary" name = "submit">
			</form>
		</div><br><br>

	</body>

</html>