<?php
require '../config/conn.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username='$user' AND password='$pass'");
$cek=mysqli_num_rows($sql); 

if($cek > 0){
  $data=mysqli_fetch_array($sql);
  if ($data['level']=="admin") 
  {
    session_start();
    $_SESSION['id_pengguna']=$data['id_pengguna'];
    $_SESSION['user']=$user;
    $_SESSION['nama']=$data['nama_pengguna'];
    $_SESSION['level']=$data['level'];
    header("location: ../admin/index.php");
}
else if ($data['level']=="resepsionis")
{
session_start();
$_SESSION['user']=$user;
$_SESSION['nama']=$data['nama_pengguna'];
$_SESSION['level']=$data['level'];

header("location: ../resepsionis/index.php");
}
}
else
{
    ?>
<script type="text/javascript">
  alert("Maaf Username atau Password anda Belum tersimpan");
  </script>
  <?php
}
?>