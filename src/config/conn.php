<?php

$host = 'localhost';
$user = "root";
$pass = "";
$db = "reservasi_jedidta";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn) {
    die("Database not connected: ".mysqli_connect_error());
}

?>