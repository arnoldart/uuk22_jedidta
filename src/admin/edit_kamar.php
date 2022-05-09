<?php

include "./header.php";

if(isset($_GET['id_kamar'])) {
  $id_kamar = $_GET['id_kamar'];
  $query = "SELECT * FROM tb_kamar WHERE  id_kamar = '$id_kamar'";
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
              <form method="POST" action="../utils/update_kamar.php" enctype="multipart/form-data">
              <div class="card-header">
                <h3>Edit Kamar</h3>
              </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>No. Kamar</label>
                    <input name="id_kamar" value="<?= $data['id_kamar']; ?>" placeholder="Nomor Kamar" hidden>
                    <input type="text" class="form-control" name="id_kamar" value="<?= $data['id_kamar']; ?>" placeholder="Nomor Kamar" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tipe</label>
                    <input value=<?= $data['tipe']; ?> name="tipe" hidden>
                    <select name="tipe" class="form-control" value="Standart">
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
                    <input type="text" class="form-control" name="jumlah" value="<?= $data['jumlah']; ?>" placeholder="Jumlah">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?= $data['harga']; ?>" placeholder="Harga">
                  </div>
                  <div class="form-group">
                    <label>Foto Kamar</label>
                    <div>
                      <img src="<?= "./gambar/".$data['gambar'];?>" alt="gambar" width="200">
                    </div>
                    <input type="file" class="form-control" name="foto">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="<?= $data['keterangan']; ?>" placeholder="Keterangan">
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