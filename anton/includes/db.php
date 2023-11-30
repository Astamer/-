<?php
$host = "anton";
$username = "root";
$password = "";
$database = "distance_learning";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
