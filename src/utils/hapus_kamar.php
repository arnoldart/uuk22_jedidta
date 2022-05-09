<?php

include '../config/conn.php';

if(isset($_GET['id_kamar'])) {
  $id_kamar = $_GET['id_kamar'];
  $query = "DELETE FROM tb_kamar WHERE id_kamar=$id_kamar";
  $result = mysqli_query($conn, $query);

  if($result) {
    echo "<script>alert('Data berhasil dihapus');window.location='../admin/kamar.php'</script>";

  }else {
    echo "<script>alert('Data tidak berhasil dihapus');window.location='../kamar.php'</script>";
  }

}

?>

