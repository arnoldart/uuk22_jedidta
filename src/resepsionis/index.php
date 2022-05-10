<?php

require '../config/conn.php';

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UUK 2022 Jedidta | Aplikasi Pesan Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <?php require './header.php'?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Resepsionis</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="content">
    <div class="container">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Tamu</th>
                  <th>Tipe Kamar</th>
                  <th>Jumlah</th>
                  <th>Tanggal Cek In</th>
                  <th>Tanggal Cek Out</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  $query = "SELECT * FROM transaksi 
                            INNER JOIN tb_tamu ON transaksi.id_tamu = tb_tamu.id 
                            INNER JOIN tb_kamar ON transaksi.id_kamar = tb_kamar.id_kamar";
                  $result = mysqli_query($conn, $query);
                  if(!$result) {
                    die("Query Error : ".mysqli_errno($conn).
                    " - ".mysqli_error($conn));
                  }
                  while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?= $no;?></td>
                  <td><?= $row['nama_tamu']?></td>
                  <td><?= $row['tipe']?></td>
                  <td><?= $row['jumlah']?></td>
                  <td><?= $row['tgl_check_in']?></td>
                  <td><?= $row['tgl_check_out']?></td>
                  <td>
                  <?php if($row['status'] == 1) {?>
                    <span class="badge bg-warning">
                      Belum di Konfirmasi
                    </span> 
                  <?php  }else {?>
                    <span class="badge bg-success">
                      Sudah di Konfirmasi
                    </span>
                  <?php }?>
                  </td>
                  <td>
                    <form action="../utils/konfirmasi.php" method="post">
                      <input type="hidden" name="id_pesanan" value="<?= $row['id_pesanan'];?>">
                      <input type="hidden" name="status" value="2">
                      <button class="btn btn-primary">Konfirmasi</button>
                    </form>
                  </td>
                </tr>
                <?php $no++;}?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<?php require './footer.php'?>