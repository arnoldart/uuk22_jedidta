<?php 
  include 'header.php';
  include '../config/conn.php'
?>

<div class="wraper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fasilitas</h1>
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
              <div class="card-header">
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Tambah">+ Tambah</button>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID Fasilitas</th>
                      <th>Nama Fasilitas</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $query = "SELECT * FROM tb_fasilitas_umum ORDER BY id ASC";
                    $result = mysqli_query($conn, $query);
                    if(!$result) {
                      die("Query error : ".mysqli_errno($conn)."-".mysqli_error($conn));
                    }
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?= "$no"; ?></td>
                      <td><?= $row['id']; ?></td>
                      <td><?= $row['nama_fasilitas']; ?></td>
                      <td>
                        <img src=<?= "../gambar/".$row['gambar'];?> alt="gambar kamar" width="200">
                      </td>
                      <td>
                        <a href=<?= "./edit_fasilitas.php?id_fasilitas_umum=".$row['id']; ?> class="btn btn-outline-primary btn-circle">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href=<?= "../utils/hapus_fasilitas.php?id_fasilitas_umum=".$row['id']; ?> class="btn btn-outline-danger btn-circle" onclick="return confirm('anda yakin untuk menghapus data ini?')">
                          <i class="fa fa-trash"></i>
                        </a>
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
        <form method="POST" action="../utils/tambah_fasilitas.php" enctype="multipart/form-data">
          <div class="modal-body">
            <!-- <div class="form-group">
              <label>ID Fasilitas Umum</label>
              <input type="text" class="form-control" name="id_fasilitas_umum" placeholder="ID Fasilitas Umum">
            </div> -->
            <div class="form-group">
              <label>Nama Fasilitas</label>
              <input type="text" class="form-control" name="nama_fasilitas" placeholder="Nama Fasilitas Umum">
            </div>
            <div class="form-group">
              <label>Foto Fasilitas Umum</label>
              <input type="file" class="form-control" name="foto">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>