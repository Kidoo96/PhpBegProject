<?php

require('config.php');


if (isset($_POST['Regme'])) {
	
	$fname = $_POST['firstname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repeatPassword = $_POST['passwordr'];

	//SQl инжекция

	$fname = stripcslashes($fname);
	$email = stripcslashes($email);
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$repeatPassword = stripcslashes($repeatPassword);

	$fname = mysql_real_escape_string($fname);
	$email = mysql_real_escape_string($email);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$repeatPassword = mysql_real_escape_string($repeatPassword);


	$query = "INSERT INTO users". "(username, password, email, first_name)". "VALUES('$username', '$password', '$email', '$fname')";

	$query_run = mysqli_query($conn, $query);

if ( !$query_run ) {
	die('Неможе се вкара инфото' . mysql_error());
} else {
	echo "Регистрацията е успешна";
}

}







?>