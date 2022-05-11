<?php

require '../config/conn.php';

?>
<div class="wrapper">

  <?php require './header.php'?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Selamat Datang Resepsionis || <small><?= $_SESSION['username']; ?></small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="content">
    <div class="container">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3><b>Dashboard</b></h3>
        </div>
        <div class="card-body">
          <div class="small-box bg-info">
            <div class="inner">
              <?php

              $sql = "SELECT * FROM transaksi";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_num_rows($result);
              ?>
              <h3><?= $row; ?></h3>

              <p>Kamar</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <a href="./pesanan.php" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<?php require './footer.php'?>