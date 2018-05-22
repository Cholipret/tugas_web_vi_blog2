<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];

$query = "INSERT INTO Artikel(judul_ar,isi_ar) VALUES ('".$judul."','".$isi."')";
$insert = mysqli_query($koneksi,$query);
if($insert){
  header('location:utama.php');
}else{
echo "maaf,data tidak bisa disimpan";
}
 ?>
