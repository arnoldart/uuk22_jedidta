<?php

require '../config/conn.php';

?>

<?php require './header.php'?>



  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0">Selamat Datang Resepsionis || <small><?= $_SESSION['username']; ?></small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <div class="content">
    <div class="container">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-body">
            <div class="modal fade" id="Pesan">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Form Pemesanan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label>ID Tamu</label>
                        <select name="id_tamu" class="form-control">
                          <?php
                            $nama = $_SESSION['username'];
                            $data = mysqli_query($conn, "SELECT * FROM tb_tamu where tb_tamu.username = '$nama'");
                            while ($row = mysqli_fetch_array($data)) { ?>
                              <option value="<?= $row['id']; ?>"><?= $row['nama_tamu']; ?></option>
                          <?php }?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>ID Kamar</label>
                        <select name="id_kamar" class="form-control">
                          <option value="">---Pilih Tipe---</option>
                          <?php
                            $data = mysqli_query($conn, "SELECT * FROM tb_kamar");
                            while ($row = mysqli_fetch_array($data)) { ?>
                              <option value="<?= $row['id_kamar']; ?>"><?= $row['tipe']; ?></option>
                          <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
              </div>
            </div>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tanggal Cek In</th>
                  <th>Tanggal Cek Out</th>
                  <th>Nama Tamu</th>
                  <th>Tipe Kamar</th>
                  <th>Jumlah Kamar</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  $query = "SELECT * FROM transaksi 
                            INNER JOIN tb_tamu ON transaksi.id_tamu = tb_tamu.id 
                            INNER JOIN tb_kamar ON transaksi.id_kamar = tb_kamar.id_kamar ORDER BY id_pesanan DESC";
                  $result = mysqli_query($conn, $query);
                  if(!$result) {
                    die("Query Error : ".mysqli_errno($conn).
                    " - ".mysqli_error($conn));
                  }
                  while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?= $no;?></td>
                  <td><?= $row['tgl_check_in']?></td>
                  <td><?= $row['tgl_check_out']?></td>
                  <td><?= $row['nama_tamu']?></td>
                  <td><?= $row['tipe']?></td>
                  <td><?= $row['jumlah_kamar']?></td>
                  <td>
                  <?php if($row['status'] == 1) {?>
                    <span class="badge bg-warning">
                      Belum di Konfirmasi
                    </span> 
                  <?php  }else {?>
                    <span class="badge bg-success">
                      Sudah di Konfirmasi
                    </span>
                  <?php }?>
                  </td>
                  <td>
                    <form action="../utils/konfirmasi.php" method="post">
                      <input type="hidden" name="id_pesanan" value="<?= $row['id_pesanan'];?>">
                      <input type="hidden" name="status" value="2">
                      <button class="btn btn-primary">Konfirmasi</button>
                    </form>
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

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "searching": true,
      "paging": true,
      "lengthChange": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

  });
</script>



<?php require './footer.php'?>