<?php
include "config.php";
session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Kasir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">
  <link rel="stylesheet" href="style.css">
 
 
  <style>
      .btn-group-xs > .btn, .btn-xs {
  padding: .25rem .4rem;
  font-size: .875rem;
  line-height: .5;
  border-radius: .2rem;
}
.card{
  border: none;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgb(17 26 104 / 10%);
}
.card-header{
  border-radius: 15px 15px 0px 0px !important;
}
.form-control{
  border-radius: 15px;
}
.btn{
  border-radius: 15px;
}
button.buttons-html5{
  padding: .25rem .4rem !important;
  font-size: .875rem !important;
  line-height: .5 !important;
}
  </style>
</head>
<body>
  <?php 
      $toko = mysqli_query($conn,"SELECT * FROM login ORDER BY nama_toko ASC");
      while($dat = mysqli_fetch_array($toko)){
        $nama_toko = $dat['nama_toko'];
        $nama_kasir = $dat['nama_kasir'];
      }
          ?></b></a>
</div>
<br>

<div class="container-fluid">

  <div class="row">
    <div class="col-md-3 mb-2 d-none d-md-block">
        <div class="card">
            <div class="card-header" style="background-color: #f62828;" >
                <div class="card-tittle text-white">Halo, <b><?php echo $nama_kasir ?></b></div>
            </div>
            <div class="card-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-desktop text-red mr-2"></i>Kasir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="barang.php"><i class="fa fa-shopping-bag text-red mr-2"></i>Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="laporan.php"><i class="fa fa-table text-red mr-2"></i>Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengaturan.php"><i class="fa fa-cog text-red mr-2"></i>Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"onclick="javascript:return confirm('Anda yakin ingin keluar ?');"><i class="fa fa-power-off text-purple mr-2"></i>Keluar</a>
                    </li>
                </ul>
         </div>
    </div>
  </div>