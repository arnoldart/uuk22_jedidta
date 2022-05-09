<?php

include '../config/conn.php';

$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$keterangan = $_POST['keterangan'];

if($foto !== "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $x = explode('.', $foto);
  $extensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];
  $angka_acak = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto;

  if(in_array($extensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../gambar/'.$nama_gambar_baru);
    $query = "INSERT INTO tb_kamar(id_kamar, tipe, jumlah, harga, gambar, keterangan) VALUES ('$no_kamar', '$tipe', '$jumlah', '$harga', '$nama_gambar_baru', '$keterangan')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
      die("query gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
    }else {
      echo "<script>alert('Data berhasil ditambahkan.');window.location='../admin/kamar.php';</script>";
    }
  }else {
    echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='../admin/kamar.php';</script>";
  }
}else {
  // $query = "INSERT INTO kamar(no_kamar, foto) VALUES ('$no_kamar, null')";
  // $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Queery gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
  }else {
    echo "<script>alert('Data berhasil ditambahkan.');window.location='../admin/kamar.php';</script>";
  }
}

?>