<?php

require '../config/conn.php';
include './header.php';

if(isset($_SESSION['username'])){
  if($_SESSION['level'] === "admin") {
    echo "<script>
      window.location.href = '../admin/';
    </script>";
  }else if($_SESSION['level'] === "resepsionis") {
    echo "<script>
      window.location.href = '../resepsionis/';
    </script>";
  }
}else{
  echo "<script>
    alert('Silahkan login terlebih dahulu');
    window.location.href = '../index.php';
  </script>";
}

$sql = "SELECT * FROM transaksi 
INNER JOIN tb_tamu ON transaksi.id_tamu = tb_tamu.id
INNER JOIN tb_kamar ON transaksi.id_kamar = tb_kamar.id_kamar WHERE tb_tamu.username = '$_SESSION[username]' AND transaksi.id_pesanan = '$_GET[id_pesanan]'";

$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Query Error:".mysqli_errno($conn)."-".mysqli_error($conn));
}

?>
<div class="container">
  <div class="card">
    <div class="card-body">

      <div>
        <h3>HOTEL Skayesa</h3>
        <h6>Jalan Sayangan 5, Mejing Wetan, Ambarketawang, Gamping, Sleman</h6>
        <h6>Yogyakarta</h6>
        <h6>Indonesia</h6>
        <h6>55294</h6>
      </div>

      <br>

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th width="15px">Tipe kamar</th>
            <th>Jumlah Pesan Kamar</th>
            <th>Total Harga</th>
            <th>Tanggal chek-in</th>
            <th>Tanggal chek-out</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          $no= 1;
          $harga_total= 0;
          
          while ($row = mysqli_fetch_assoc($result)) {
            $harga_total = $row['harga'] * $row['jumlah_kamar'];
            ?>

            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row['nama_tamu'];?></td>
              <td><?php echo $row['tipe'];?></td>
              <td><?php echo $row['jumlah_kamar'];?></td>
              <td><?php echo $harga_total;?></td>
              <td><?php echo $row['tgl_check_in'];?></td>
              <td><?php echo $row['tgl_check_out'];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="mt-5">
        <h6 align="right">Indonesia, <?= date ('d-m-y'); ?></h6>
        <h6 align="right" class="mt-4">Tamu</h6>
        <h6 align="right"><?= $_SESSION['username']; ?></h6>
      </div>
    </div>
  </div>
</div>

<script>
  window.print();
</script>

</div>
</body>
</html>
