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
            <div>
              <form class="form-inline" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              
            </div>
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
                <tr>
                  <?php
                    if(isset($_POST['search'])) {
                      $search = $_POST['search'];
                      $query = "SELECT * FROM tb_tamu WHERE nama_tamu LIKE '%$search%'";
                      $result = mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result)) {
                        ?>
                    <td><?= $row['nama_tamu']; ?></td>
                  
                    <?php }}?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<?php require './footer.php'?>