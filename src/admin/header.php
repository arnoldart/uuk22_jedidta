<?php

require "../config/conn.php";

session_start();
if(isset($_SESSION['username'])){
  if($_SESSION['level'] === "resepsionis") {
    echo "<script>
      window.location.href = '../resepsionis/';
    </script>";
  }else if($_SESSION['level'] === "tamu") {
    echo "<script>
      window.location.href = '../tamu/';
    </script>";
  }
}else{
  echo "<script>
    alert('Silahkan login terlebih dahulu');
    window.location.href = '../index.php';
  </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UKK 2022 | APLIKASI PEMESANAN HOTEL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APLIKASI PEMESANAN HOTEL</span>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="./index.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="./kamar.php" class="nav-link">Data Kamar</a>
          </li>
          <li class="nav-item">
            <a href="./fasilitas.php" class="nav-link">Data Fasilitas</a>
          </li>
          <li class="nav-item">
            <a href="./user.php" class="nav-link">Data Pengguna</a>
          </li>
          <li class="nav-item">
            <a href="./transaksi.php" class="nav-link">Data Transaksi</a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
