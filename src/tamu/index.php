<?php

require '../config/conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UUK 2022 Jedidta | Aplikasi Pesan Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
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
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Carousel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/hotel-room1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/hotel-room2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/hotel-room3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                      </span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

            <div class="col-md-12">
              <div class="card-body">
                <form action="../utils/proses_pemesanan.php" method="POST">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Tanggal Cek In</label>
                        <input type="date" class="form-control" name="tgl_in">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Tanggal Cek Out</label>
                        <input type="date" class="form-control" name="tgl_out">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Jumlah Kamar</label>
                        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Kamar">
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Pesan">Pesan</button>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="Pesan">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Form Pemesanan</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <!-- <form method="POST" action="../utils/tambah_kamar.php" enctype="multipart/form-data"> -->
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Nama Tamu</label>
                              <select name="id_tamu" class="form-control">
                                <?php
                                  $nama = $_SESSION['username'];
                                  $data = mysqli_query($conn, "SELECT * FROM tb_tamu where tb_tamu.username = '$nama'");
                                  while ($row = mysqli_fetch_array($data)) { ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['nama_tamu']; ?></option>
                                <?php }?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Tipe Kamar</label>
                              <select name="id_kamar" class="form-control">
                                <option value="">---Pilih Tipe---</option>
                                <?php
                                  $data = mysqli_query($conn, "SELECT * FROM tb_kamar");
                                  while ($row = mysqli_fetch_array($data)) { ?>
                                    <option value="<?= $row['id_kamar']; ?>"><?= $row['tipe']; ?></option>
                                <?php }?>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        <!-- </form> -->
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="text-center">Tentang Kami</h3>
                </div>
                <div>
                  <div class="card-body">
                    <p class="text-center">
                      Selamat datang di Skayesa Hotel, kami menyediakan kamar yang membuat anda nyaman untuk menginap, liburan atau yang lainnya
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- /.col -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <?php require './footer.php'?>
</div>

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>
