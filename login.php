<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<?php
	// session_start();
		if (isset($_POST['log_in']) && !empty($_POST['login']) && !empty($_POST['password'])) {
			if ($_POST['login'] == "admin" && $_POST['password'] == "admin123") {
				// $_SESSION['valid'] = true;
				// $_SESSION['login'] = "admin";

				header("location: index.php");
			} else {
				// $error = "wroasng login or password";
				echo '<script languge="javascript">';
				echo 'alert("wrong login or password")';
				echo '</script>';
			}
			
		}
		
	?>
	<h1 align="center">Contact Manager</h1>
	<div align="center">
	<form action="" method="post">
		Login:<br>
		<input type="text" name="login"><br>
		Password:<br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="log_in" value="Log in">
		<input type="submit" name="register" value="Register">
	</form>
	</div>
</body>
</html>