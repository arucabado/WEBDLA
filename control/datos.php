<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdladb";

$conn = new mysqli($servername, $username, $password, $dbname);

$acentos = $conn -> query("SET NAMES 'utf8'");

?>
