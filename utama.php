<?php
include 'koneksi.php';


$query = "SELECT * FROM artikel";
$hasil = mysqli_query($koneksi,$query);
$no=1;
 ?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BLOG HAWUFUFEH</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <?php
  include 'koneksi.php';

  session_start();
  if (isset($_session['id'])) {
    # code...
    header('location:login.php');
  }
  ?>
  <body>
     <div class="jumbotron">
       <center>
       <img src="On.png" alt="" width="260" height="130">
     </center>
     </div>
    <nav id="navbar-example2" class="navbar navbarutama">
  <a class="navbar-brand" href="#" style="color:  #000;">MENU</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="insertarticle.php">Tambah</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil.php">Lihat</a>
    </li>
  </ul>
</nav>
    <?php while ($data= mysqli_fetch_assoc($hasil)) {?>
<div class="container">
  
<div class="jumbotron">
  <div class="row">
  <div class="col-md-9 col-sm-6">
    <h1><?php echo $data['judul_ar']; ?></h1>
    <p class="text-justify"><b><?php echo $data['judul_ar']; ?></b> <?php echo $data['isi_ar']; ?></p>
   <button type="button" class="btn btn-default">
     selengkapnya...
   </button>
</div>
</div>
   <?php } ?>
   <br>
  </body>
</html>
