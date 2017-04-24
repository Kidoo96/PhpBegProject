<?php


session_start(); // Стартирване на сесията

$upload_path = 'images/upl/'; // Задаване на пътя за качените снимки

// Свързване с датабазата

$mysqlserver = "localhost";
$mysqluser = "root";
$mysqlpass = "";
$mysqldb = "db_parts";

$conn = new mysqli($mysqlserver, $mysqluser, $mysqlpass, $mysqldb);

if ($conn->connect_error) {
	die("Неуспешно свързване: ". $conn->connect_error);
}



?>