<?php

include '../config/conn.php';

$id_kamar = $_POST['id_kamar'];
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
    $query = "UPDATE tb_kamar SET tipe='$tipe', jumlah='$jumlah', harga='$harga', gambar='$nama_gambar_baru', keterangan='$keterangan'";
    $query .= "WHERE id_kamar='$id_kamar'";
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
  $query = "UPDATE tb_kamar SET tipe='$tipe', jumlah='$jumlah', harga='$harga', gambar='$nama_gambar_baru', keterangan='$keterangan'";
  $query .= "WHERE id_kamar='$id_kamar'";
  $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Queery gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
  }else {
    echo "<script>alert('Data berhasil ditambahkan.');window.location='../kamar.php';</script>";
  }
}

?>