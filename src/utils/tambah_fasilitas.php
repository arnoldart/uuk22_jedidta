<?php

include '../config/conn.php';

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
    $query = "INSERT INTO tb_fasilitas_umum(nama_fasilitas, gambar) VALUES ('$nama_fasilitas', '$nama_gambar_baru')";
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
  // $query = "INSERT INTO kamar(no_kamar, foto) VALUES ('$no_kamar, null')";
  // $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Queery gagal dijalankan: ".mysqli_errno($conn)."-".mysqli_error($conn));
  }else {
    echo "<script>alert('Data berhasil ditambahkan.');window.location='../admin/fasilitas.php';</script>";
  }
}

?>