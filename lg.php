<?php

require 'config.php';

if (isset($_POST['Submit'])) {

	// Променливи за потребителя и паролата
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Защита от SQL инжекция
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	$query = "SELECT * FROM users WHERE username= '$username' AND password='$password'";

	$query_run = mysqli_query($conn, $query);

	$row = $query_run->fetch_assoc();

	$role = $row['user_role'];

	if (mysqli_num_rows($query_run)>0) {
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = $row['user_id']; // това не го ползваме в примерната реализация
		$_SESSION['user_role'] = $row['user_role'];
		header('Location: profile.php');
	}
	else {
		echo "Failed login";
	}






}









?>