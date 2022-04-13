
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
                        <img class="d-block w-100" src="./assets/img/hotel-room1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/hotel-room2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/hotel-room3.jpg" alt="Third slide">
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

            <div class="content">
              <div class="container">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Fasilitas Umum</h3>
                    </div>
                    <div class="card-body">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="card card-outline">
                              <div class="card-body">
                                <img src="./assets/img/hotel-room1.jpg" alt="fasilitas" class="d-block w-100">
                                <p>Berbagai Tipe Kamar</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-outline">
                              <div class="card-body">
                                <img src="./assets/img/hotel-room1.jpg" alt="fasilitas" class="d-block w-100">
                                <p>Berbagai Tipe Kamar</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-outline">
                              <div class="card-body">
                                <img src="./assets/img/hotel-room1.jpg" alt="fasilitas" class="d-block w-100">
                                <p>Berbagai Tipe Kamar</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
