<?php 

require "../config/conn.php";

$nama = $_POST['nama_tamu'];
$username = $_POST['username'];
$password = $_POST['password'];
$jen_kel = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

$query = "INSERT INTO tb_tamu (nama_tamu, username, password, jen_kel, email, no_hp) VALUES ('$nama', '$username', '$password', '$jen_kel', '$email', '$no_hp')";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
} else {
    echo "<script>
            alert('Data Berhasil Disimpan');
            document.location.href = '../index.php';
          </script>";
}

?>