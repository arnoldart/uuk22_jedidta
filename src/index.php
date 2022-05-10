  <?php 
    require './header.php';

    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['user']);

  ?>

  <div class="content-wrapper">
    <div class="col-md-19">
      <div class="card card-info">
        <div class="card-header">
          <h4 class="text-center">
            Untuk dapat melakukan pemesanan, silahkan daftar terlebih dahulu dilanjutkan login
          </h4>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-lg-6">
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
                  <div class="col-lg-6">
                    <div class="">
                      <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                          <a href="#" class="h1"><b>Login Tamu</b></a>
                        </div>
                        <div class="card-body">
                          <form action="./utils/cek_login.php" method="post">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" name="username" placeholder="Username">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-user"></span>
                                </div>
                              </div>
                            </div>
                            <div class="input-group mb-3">
                              <input type="password" class="form-control" name="password" placeholder="Password">
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-8">
                              </div>
                              <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                              </div>
                            </div>
                          </form>
                          <br>
                          <p class="mb-1">
                            <a href="./admin/login.php">Login sebagai Admin/Resepsionis</a>
                          </p>
                          <p class="mb-0">
                            Belum Punya Akun?
                            <a href="./register.php" class="text-center">Daftar</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="text-center">Tentang Kami</h3>
                </div>
                <div class="card-body">
                  <p class="text-center"> Selamat datang di hotel Skayesa.. Dengan
                  berbagai fasilitas yang kami miliki, akan memberikan kenyamanan bagi
                  Anda menginap di hotel kami. Silakan pilih tipe kamar yang anda
                  inginkan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>

  <?php require './footer.php'?>

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