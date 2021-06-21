<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan Teknologi Informasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: auto}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #d9edf7;
      height: 480px;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #3377b1;
      color: white;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 1000px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }

    .container-fluid img {
      margin: 15px;
    }

    footer p {
      padding-top: 15px;
    }
  </style>
</head>
<body>
  
<?php 
session_start();
if(!isset($_SESSION['nama'])|| $_SESSION['level'] != "admin"){
  echo "<script>alert('Silahkan login terlebih dahulu')</script>";
  echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{

  include_once 'head.php';
?>

  <div class="row content">
  <div class="container-fluid">
  <div class="container-fluid">
    <div class="col-sm-2 sidenav">
    <center> <img src="../images/AdminProfile.png" height="150px" alt="Admin"> </center>
      <h5> <center> Hallo, <font color="red"><?php echo $_SESSION['nama']; ?></font></h5>
            
      <ul class="nav nav-pills nav-stacked">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="?page=buku"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
        <li><a href="?page=anggota"><i class="glyphicon glyphicon-list-alt"></i> Anggota</a></li>
        <li><a href="?page=transaksi"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
        <li><a href="?page=laporan"><i class="glyphicon glyphicon-file"></i> Laporan</a></li>
        <li><a href="?page=user"><i class="glyphicon glyphicon-user"></i> User</a></li>
      </ul><br>
    </div>

    <?php 
    error_reporting(0);
    switch ($_GET['page']) {
      // menu buku
      case 'buku':
        include "buku_data.php";
        break;
      case 'detil-buku':
        include "buku_detil.php";
        break;
      case 'buku_input':
        include "buku_input.php";
        break;
      case 'buku_edit':
        include "buku_edit.php";
        break;
      case 'buku_search':
        include "buku_search.php";
        break;
      case 'detil-buku':
        include "buku_detil.php";
        break;

      // menu anggota
      case 'anggota':
        include "anggota_data.php";
        break;
      case 'anggota_input':
        include "anggota_input.php";
        break;
      case 'anggota_edit':
        include "anggota_edit.php";
        break;
      case 'anggota_search':
        include "anggota_search.php";
        break;
      case 'detil-anggota':
        include 'anggota_detil.php';
        break;

      // menu user
      case 'user':
        include "user_data.php";
        break;
      case 'user_input':
        include "user_input.php";
        break;
      case 'user_edit':
        include "user_edit.php";
        break;
      case 'user_search':
        include "user_search.php";
        break;
      case 'detil-user':
        include "user_detil.php";
        break;

      // Transaksi
      case 'transaksi':
        include "../transaksi_data.php";
        break;
      case 'transaksi_input':
        include "../transaksi_input.php";
        break;
      case 'transaksi_search':
        include "../transaksi_search.php";
        break;

      case 'laporan':
        include "../laporan.php";
        break;
      case 'delete':
        include "delete.php";
        break;

      case 'logout':
        include "../logout.php";
        break;
      
      default:
        include "home.php";
        break;
    }
    ?>
    
  </div>
</div>
</div>
<footer class="container-fluid" style="margin-top: 17vh">
<font color="white"> <center> <p>&copy; Apeeep Adeeet Jeseeen Ajeeee 2020. Universitas Bina Sarana Informatika</p>
</footer>
<?php } ?>
</body>
</html>

