<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "licenta";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if( !$conn) {
	die("Conexiunea a eșuat: " . mysqli_connect_error());
}
