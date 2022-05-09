<?php

include "./header.php";

if(isset($_GET['id_fasilitas_umum'])) {
  $id_fasilitas_umum = $_GET['id_fasilitas_umum'];
  $query = "SELECT * FROM tb_fasilitas_umum WHERE  id = '$id_fasilitas_umum'";
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
              <form method="POST" action="../utils/update_fasilitas.php" enctype="multipart/form-data">
              <div class="card-header">
                <h3>Edit Kamar</h3>
              </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>ID Fasilitas</label>
                    <input name="id_fasilitas_umum" value="<?= $data['id']; ?>" placeholder="Nomor Kamar" hidden>
                    <input type="text" class="form-control" name="id_fasilitas_umum" value="<?= $data['id']; ?>" placeholder="Nomor Kamar" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Fasilitas</label>
                    <input type="text" class="form-control" name="nama_fasilitas" value="<?= $data['nama_fasilitas']; ?>" placeholder="Nama Fasilitas">
                  </div>
                  <div class="form-group">
                    <label>Foto Fasilitas Umum</label>
                    <div>
                      <img src="<?= "./gambar/".$data['gambar'];?>" alt="gambar" width="200">
                    </div>
                    <input type="file" class="form-control" name="foto">
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