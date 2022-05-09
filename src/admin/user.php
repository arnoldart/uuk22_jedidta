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
            <h1 class="m-0">Pengguna</h1>
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
                    <th>ID Pengguna</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>No .HP</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $query = "SELECT * FROM tb_pengguna ORDER BY id_pengguna ASC";
                  $result = mysqli_query($conn, $query);
                  if(!$result) {
                    die("Query error : ".mysqli_errno($conn)."-".mysqli_error($conn));
                  }
                  $no = 1;
                  while($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?= "$no"; ?></td>
                    <td><?= $row['id_pengguna']; ?></td>
                    <td><?= $row['nama_pengguna']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['password']; ?></td>
                    <td><?= $row['level']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td>
                      <a href=<?= "./edit_user.php?id_pengguna=".$row['id_pengguna']; ?> class="btn btn-outline-primary btn-circle">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href=<?= "../utils/hapus_user.php?id_pengguna=".$row['id_pengguna']; ?> class="btn btn-outline-danger btn-circle" onclick="return confirm('anda yakin untuk menghapus data ini?')">
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
  <div class="modal fade" id="Tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Pengguna</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="../utils/tambah_user.php" enctype="multipart/form-data">
          <div class="modal-body">
            <!-- <div class="form-group">
              <label>ID Pengguna</label>
              <input type="text" class="form-control" name="no_kamar" placeholder="Nomor Kamar">
            </div> -->
            <div class="form-group">
              <label>Nama Pengguna</label>
              <input type="text" class="form-control" name="nama_pengguna" placeholder="Nama Pengguna">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Level</label>
              <select name="level" class="form-control">
                <option value="">---Pilih Tipe---</option>
                <option value="tamu">Tamu</option>
                <option value="resepsionis">Resepsionis</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="form-group">
              <label>No. HP</label>
              <input type="text" class="form-control" name="no_hp" placeholder="No. HP">
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