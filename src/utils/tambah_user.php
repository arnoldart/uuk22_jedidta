<?php

include '../config/conn.php';

$nama_pengguna = $_POST['nama_pengguna'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$no_hp = $_POST['no_hp'];

$query = "INSERT INTO tb_pengguna(nama_pengguna, username, password, level, no_hp) VALUES ('$nama_pengguna', '$username', '$password', '$level', '$no_hp')";
$result = mysqli_query($conn, $query);

if(!$result) {
  die("Query gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
}else {
  echo "<script>alert('Data berhasil ditambahkan.');window.location='../admin/user.php';</script>";
}

?>