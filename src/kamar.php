<?php
include './config/conn.php'
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
            <h1 class="m-0">Hotel Skayesa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <?php 
          $query = "SELECT * FROM tb_kamar ORDER BY id_kamar ASC";
          $result = mysqli_query($conn, $query);
          if(!$result) {
            die("Query error : ".mysqli_errno($conn)."-".mysqli_error($conn));
          }
          $no = 1;
          while($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card-body">
                      <table> 
                        <tr>
                          <th><h4><b><?= $row['tipe']; ?></b></h4></th>
                        </tr>
                        <tr>
                          <td>Fasilitas</td>
                        </tr>
                        <tr>
                          <td colspan="2"><?= $row['keterangan'];?></td>
                        </tr>
                        <tr>
                          <td>Harga : </td>
                          <td><?= $row['harga'];?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <img src="./admin/gambar/<?= $row['gambar']; ?>" alt="ndak tau" class="d-block w-100">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $no++;}?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <?php require './footer.php'?>
  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/dist/js/demo.js"></script>
</body>
</html>
