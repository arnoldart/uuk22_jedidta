<?php include './header.php'?>
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
                        <img class="d-block w-100" src="../assets/img/golf.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/swimming-pool.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/gym-room.jpg" alt="Third slide">
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
                          <?php
                            $sql = "SELECT * FROM tb_fasilitas_umum";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                          ?>
                            <div class="col-md-4">
                              <div class="card card-outline">
                                <div class="card-body">
                                  <img src="../gambar/<?= $row['gambar']; ?>" alt="fasilitas" class="d-block w-100">
                                  <p><?= $row['nama_fasilitas'];  ?></p>
                                </div>
                              </div>
                            </div>
                          <?php }?>
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
  </div>
  <?php require './footer.php'?>
