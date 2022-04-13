<?php include 'header.php'; ?>

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
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Kolam Renang</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>No. 1</td>
                      <td>
                       <img class="d-block" src="../assets/img/hotel-room1.jpg" height="200">
                      </td>
                      <td>
                        <a href="" class="btn btn btn-warning">Edit</a>
                        <a href="" class="btn btn btn-danger">Hapus</a>
                      </td>
                    </tr>
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
        <form>
          <div class="modal-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nomor Kamar">
            </div>
            <div class="form-group">
              <label>Foto Kamar</label>
              <input type="file" class="form-control">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>