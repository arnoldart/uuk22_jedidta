<?php 
  include 'header.php';
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
              <div class="card-header">
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Tambah">Tambah</button>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tipe</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Foto</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $query = "SELECT * FROM tb_kamar ORDER BY id_kamar ASC";
                    $result = mysqli_query($conn, $query);
                    if(!$result) {
                      die("Query error : ".mysqli_errno($conn)."-".mysqli_error($conn));
                    }
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?= "$no"; ?></td>
                      <td><?= $row['tipe']; ?></td>
                      <td><?= $row['jumlah']; ?></td>
                      <td><?= $row['harga']; ?></td>
                      <td>
                        <img src=<?= "../gambar/".$row['gambar'];?> alt="gambar kamar" width="200">
                      </td>
                      <td><?= $row['keterangan']; ?></td>
                      <td>
                        <a href=<?= "./edit_kamar.php?id_kamar=".$row['id_kamar']; ?> class="btn btn-outline-primary btn-circle">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href=<?= "../utils/hapus_kamar.php?id_kamar=".$row['id_kamar']; ?> class="btn btn-outline-danger btn-circle" onclick="return confirm('anda yakin untuk menghapus data ini?')">
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
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>