<?php
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query = "SELECT * from akun where username ='".$username."'";
$hasil = mysqli_query($koneksi,$query);
if ($akun=mysqli_fetch_assoc($hasil)){
  $password_db=$akun['password'];
  //hash md5
  $md5 = md5($password);
  $cek_bcyrpt=password_verify($md5,$password_db);
  if($cek_bcyrpt){
    session_start();
    $_session['id']=$akun['id'];
    $_session['username']=$akun ['username'];
    header('location:utama.php');
  }else{
  echo "maaf,username tidak ditemukan";
  echo '<a href="login.php">kembali</a>';
}
}else{
  echo "maaf,password tidak ditemukan";
  echo '<a href="login.php">kembali</a>';
}
?>
