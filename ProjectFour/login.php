<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sing IN</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/singin.css" rel="stylesheet">
</head>

<body cz-shortcut-listen="true">
	<div class="container">
		<form action="auth.php" method="POST" class="form-singin">

			<?php if(isset($S_SESSION['message']) && $_SESSION['message'] == 'error') :?>
				<div class="alert alert-warning">
					იმეილი ან პაროლი არასწორია!
				</div>
			<?php
			$S_SESSION['message'] = '';
			endif; ?>

			<h2 class="form-singin-heading"> Please sing in </h2>
			<label for="inputEmail" class="sr-only">Email adress</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email adress" required/>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required/>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="sublim">Sign in</button>
		</form>

	</div>

</body>
</html>