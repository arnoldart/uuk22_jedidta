<?php

$host = 'db';
$user = "root";
$pass = "MYSQL_ROOT_PASSWORD";
$db = "db_ukk_2022";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn) {
    die("Database not connected: ".mysqli_connect_error());
}

?>