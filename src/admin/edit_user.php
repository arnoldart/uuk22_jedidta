<?php

include "./header.php";
include '../config/conn.php';

if(isset($_GET['id_pengguna'])) {
  $id_pengguna = $_GET['id_pengguna'];
  $query = "SELECT * FROM tb_pengguna WHERE  id_pengguna = '$id_pengguna'";
  $result = mysqli_query($conn, $query);

  if(!$result) {
    die("Query gagal dijalankan : ".mysqli_errno($conn)."-".mysqli_error($conn));
    
  }
  $data = mysqli_fetch_assoc($result);

  if(!count($data)) {
    echo "<script>alert('Data tidak ditemukan di database')</script>";
  }
}else {
  echo "<script>alert('Masukkan data');</script>";
}

?>

<div class="wraper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kamar</h1>
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
              <form method="POST" action="../utils/update_user.php" enctype="multipart/form-data">
              <div class="card-header">
                <h3>Edit Kamar</h3>
              </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>ID Pengguna</label>
                    <input name="nama_pengguna" value="<?= $data['id_pengguna']; ?>" placeholder="ID Pengguna" hidden>
                    <input type="text" class="form-control" value=<?= $data['id_pengguna']; ?> name="id_pengguna" placeholder="ID Pengguna" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" class="form-control" value=<?= $data['nama_pengguna']; ?> name="nama_pengguna" placeholder="Nama Pengguna">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" value=<?= $data['username']; ?> name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" value=<?= $data['password']; ?> name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                      <option value="">---Pilih Tipe---</option>
                      <option value="Tamu">Tamu</option>
                      <option value="Resepsionis">Resepsionis</option>
                      <option value="Admin">Admin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" class="form-control" value="<?= $data['no_hp']; ?>" name="no_hp" placeholder="No. HP">
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>