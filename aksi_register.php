<?php
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$ulangi=$_POST['ulang'];
//PRIKSA password dan ulang nilainya sama
if($password == $ulangi){
  //security multilayer hash md5 dan bcyrpt
  $md5=md5($password);
  $bcrypt=password_hash($md5,PASSWORD_DEFAULT);
  $query="INSERT into akun values(NULL,'".$username."','".$bcrypt."')";
  $input=mysqli_query($koneksi,$query);
  if($input){
    header('location:login.php');
  }else{
    echo "terjadi kesalahan saat input data<br>";
    echo '<a href="register.php">kembali</a>';
  }
}else{
  echo "password dan ulang password tidak sama <br>";
  echo '<a href="register.php">kembali</a>';
}
 ?>
