<?php
	if (!empty($_POST['login'])
		&& !empty($_POST['password'])) {
		if ($_POST['login'] == "admin" && $_POST['password'] == "admin123") {

			header("location: index.php");
		} else {
			header("location: login.php");
		}
	} else {
		header("location: login.php");
	}