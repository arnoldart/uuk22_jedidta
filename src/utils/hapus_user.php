<?php

include "../config/conn.php";

if(isset($_GET['id_pengguna'])) {
  $id_pengguna = $_GET['id_pengguna'];
  $query = "SELECT * FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'";
  $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Query gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
  }else {
    $data = mysqli_fetch_assoc($result);
    if($data['level'] == 'tamu') {
      $sql = "DELETE FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'";
      $deleteResult = mysqli_query($conn, $sql);

      $sqlPengguna = "DELETE FROM tb_tamu WHERE id = '$id_pengguna'";
      $deletePengguna = mysqli_query($conn, $sql);

      echo "<script>alert('Data berhasil dihapus.');window.location='../admin/user.php';</script>";
    }
    echo "<script>alert('Data berhasil dihapus.');window.location='../admin/user.php';</script>";
  }
}



?>