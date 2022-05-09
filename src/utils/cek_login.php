<?php

require '../config/conn.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query($conn, "SELECT * FROM tb_tamu WHERE username = '$user' AND password = '$pass'");
$row = mysqli_num_rows($sql);

if($row > 0){
  $data = mysqli_fetch_array($sql);
  session_start();
  $_SESSION['username'] = $user;
  $_SESSION['id'] = $data['id'];
  header("location:../tamu/pemesanan.php");
}else{
  ?>
  <script>
    alert("Username atau Password Salah");
    window.location.href = "../index.php"; 
  </script>
  <?php
  }

?>