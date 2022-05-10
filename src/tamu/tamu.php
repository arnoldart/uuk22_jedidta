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

<?php 
  include './header.php';
?>

<div class="wraper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Tamu - Anda login Sebagai <?= $_SESSION['username']; ?></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-body">
              <a href="pemesanan.php" class="btn btn-primary mb-4">+ Pesan Kamar</a>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID Pesanan</th>
                    <th>Tgl Cek In</th>
                    <th>Tgl Cek Out</th>
                    <th>ID Tamu</th>
                    <th>ID Kamar</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    require "../config/conn.php";

                    $nama = $_SESSION['username'];
                    $query="SELECT * FROM transaksi, tb_tamu WHERE transaksi.id_tamu = tb_tamu.id AND tb_tamu.username = '$nama'";
                    $result = mysqli_query($conn, $query);
                    
                    if(!$result) {
                      die("Query error : ".mysqli_errno($conn)."-".mysqli_error($conn));
                    }
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?= $row['id_pesanan']; ?></td>
                    <td><?= $row['tgl_check_in']; ?></td>
                    <td><?= $row['tgl_check_out']; ?></td>
                    <td><?= $row['id_tamu']; ?></td>
                    <td><?= $row['id_kamar']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td>
                      <a href="cetak_pesanan.php?id_pesanan=<?= $row['id']; ?>" class="btn btn-outline-primary btn-circle">
                        <i class="fa fa-print"></i>  
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="Tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Kamar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="../utils/tambah_kamar.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label>No. Kamar</label>
              <input type="text" class="form-control" name="no_kamar" placeholder="Nomor Kamar">
            </div>
            <div class="form-group">
              <label>Tipe</label>
              <select name="tipe" class="form-control">
                <option value="">---Pilih Tipe---</option>
                <option value="Standart">Standart</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Superior">Superior</option>
                <option value="Suit">Suit</option>
                <option value="Presidensial">Presidensial</option>
              </select>
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="text" class="form-control" name="harga" placeholder="Harga">
            </div>
            <div class="form-group">
              <label>Foto Kamar</label>
              <input type="file" class="form-control" name="foto">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
            </div>

            <!-- <div class="form-group">
              <label>Foto Kamar</label>
              <input type="file" class="form-control" name="foto">
            </div> -->
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- <?php include 'footer.php'; ?> -->