<?php

include '../config/conn.php';

$id_fasilitas_umum = $_POST['id_fasilitas_umum'];
$foto = $_FILES['foto']['name'];
$nama_fasilitas = $_POST['nama_fasilitas'];

if($foto !== "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $x = explode('.', $foto);
  $extensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];
  $angka_acak = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto;

  if(in_array($extensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../gambar/'.$nama_gambar_baru);
    $query = "UPDATE tb_fasilitas_umum SET nama_fasilitas='$nama_fasilitas', gambar='$nama_gambar_baru' WHERE id=$id_fasilitas_umum";
    $result = mysqli_query($conn, $query);

    if(!$result) {
      die("query gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
    }else {
      echo "<script>alert('Data berhasil ditambahkan.');window.location='../admin/fasilitas.php';</script>";
    }
  }else {
    echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='../admin/fasilitas.php';</script>";
  }
}else {
  $query = "UPDATE tb_kamar SET  id=$id_fasilitas_umum, nama_fasilitas=$nama_fasilitas, gambar=$foto";
  $query .= "WHERE id='$id_fasilitas_umum'";
  $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Queery gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
  }else {
    echo "<script>alert('Data berhasil ditambahkan.');window.location='../admin/fasilitas.php';</script>";
  }
}

?>