<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	//php
	<?php
		if (isset($_POST['log_in']) && !empty($_POST['login']) && !empty($_POST['password'])) {
			if ($_POST['login'] == "admin" && $_POST['password'] == "admin123") {

				header("location: index.php");
			} else {
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
