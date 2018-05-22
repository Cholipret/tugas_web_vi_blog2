<?php
  include 'config/class.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Article</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <br>
    <br>
    <form class="container" action="utama.php"  method="post">
      <div class="row">
        <div class="col-md-2">
          <label for="username">Judul Artikel</label>
        </div>
        <br>
        <br>
        <div class="col-md-10">
          <input class="form-control" type="text" name="judul">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <label for="password">Isi Artikel</label>
        </div>
        <div class="col-md-10">
          <textarea rows="20" cols="128" name="isi">
          </textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
          <button name="button" class="btn btn-primary"> Kirim </button>
        </div>
      </div>

    </form>
  </body>
</html>
<?php 

  if (isset($_POST["button"])) 
  {
    
    $artikel->tambah($_POST['judul'],$_POST['isi']);
  } 
  

 ?>
