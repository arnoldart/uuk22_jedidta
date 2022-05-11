<?php

require "../config/conn.php";

$tgl_in = $_POST['tgl_in'];
$tgl_out = $_POST['tgl_out'];
$jumlah = $_POST['jumlah'];
$id_tamu = $_POST['id_tamu'];
$jumlah_orang = $_POST['jumlah_orang'];
$id_kamar = $_POST['id_kamar'];

$Query = "INSERT INTO transaksi (tgl_check_in, tgl_check_out, jumlah_orang, id_tamu, id_kamar, jumlah, status) VALUES ('$tgl_in', '$tgl_out', $jumlah_orang, '$id_tamu', '$id_kamar', '$jumlah', '1')";
$Result = mysqli_query($conn, $Query);

if(!$Result) {
  die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
}else {
  echo "<script>
          alert('Data Berhasil Disimpan');
          document.location.href = '../tamu/tamu.php';
        </script>";
}

?>