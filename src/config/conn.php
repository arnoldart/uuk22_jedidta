<?php

$host = 'localhost';
$user = "root";
$pass = "";
$db = "db_ukk_2022";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn) {
    die("Database not connected: ".mysqli_connect_error());
}

?>