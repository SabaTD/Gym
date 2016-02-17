<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
</head>
<body>
	<div>
		<h2 id = "first"> To Do List</h2>
		<form class = "form-group" action = "server.php" method = "POST">
			<strong>Title:</strong><input  id = "input1" type = "text" class = "form-control" name = "title" required="required" placeholder = "Enter title"></br>
			<strong>Description:</strong><textarea class = "form-control" id = "input1" rows = "7" name = "description" required = "required" placeholder = "Enter maximum 500 charecter"></textarea></br>
			<input id = "input1" type = "submit"  class = "btn btn-primary" name = "submit">
		</form>
	</div>
		<br><br>
</body>
</html>