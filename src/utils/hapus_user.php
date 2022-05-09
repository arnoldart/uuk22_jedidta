<?php

include "../config/conn.php";

if(isset($_GET['id_pengguna'])) {
  $id_pengguna = $_GET['id_pengguna'];
  $query = "DELETE FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'";
  $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Query gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
  }else {
    echo "<script>alert('Data berhasil dihapus.');window.location='../admin/user.php';</script>";
  }
}



?>