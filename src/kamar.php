<?php
include './config/conn.php'
?>
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
                      <img src="./gambar/<?= $row['gambar']; ?>" alt="ndak tau" class="d-block w-100">
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

