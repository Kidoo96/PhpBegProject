<?php

session_start(); // Стартирване на сесията

$upload_path = 'images/upl/'; // Задаване на пътя за качените снимки

// Свързване с датабазата

$mysqlserver = "localhost";
$mysqluser = "root";
$mysqlpass = "";

$conn = mysqli_connect($mysqlserver, $mysqluser, $mysqlpass) or die("Неможе се свърже!");
mysqli_select_db($conn, 'db_parts');

// Проверка на свързването
if (!$conn) {
	die("Неуспешно свързване: ". mysqli_connect_error());
}



?>