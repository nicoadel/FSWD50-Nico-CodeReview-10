<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cr10_nico_adelmann_biglibrary";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}





?>