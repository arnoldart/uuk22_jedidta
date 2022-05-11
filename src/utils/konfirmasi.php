<?php

require '../config/conn.php';

$id_pesanan = $_POST['id_pesanan'];

$query = "UPDATE transaksi SET status = '2' WHERE transaksi.id_pesanan = $id_pesanan";
$result = mysqli_query($conn, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
}else {
    echo "<script>
      alert('Data Berhasil Disimpan');
      document.location.href = '../resepsionis/pesanan.php';
      </script>";
}


?>