<?php

$servername = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "movie";

$conn = mysqli_connect($servername, $dbusername, $dbpwd, $dbname);

if(!$conn) {
	dbname("connection failed: " . mysqli_connect_error());
}