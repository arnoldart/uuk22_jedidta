<?php

include '../config/conn.php';

if(isset($_GET['id_fasilitas_umum'])) {
  $id_fasilitas_umum = $_GET['id_fasilitas_umum'];
  $query = "DELETE FROM tb_fasilitas_umum WHERE id=$id_fasilitas_umum";
  $result = mysqli_query($conn, $query);

  if($result) {
    echo "<script>alert('Data berhasil dihapus');window.location='../admin/fasilitas.php'</script>";

  }else {
    echo "<script>alert('Data tidak berhasil dihapus');window.location='../admin/fasilitas.php'</script>";
  }

}

?>

