<?php

include '../config/conn.php';

$id_pengguna = $_POST['id_pengguna'];
$nama_pengguna = $_POST['nama_pengguna'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$no_hp = $_POST['no_hp'];

$query = "UPDATE tb_pengguna SET nama_pengguna = '$nama_pengguna', username = '$username', password = '$password', level = '$level', no_hp = '$no_hp' WHERE id_pengguna = '$id_pengguna'";
$result = mysqli_query($conn, $query);

if(!$result) {
  die("Query gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
}else {
  echo "<script>alert('Data berhasil diubah.');window.location='../admin/user.php';</script>";
}

?>