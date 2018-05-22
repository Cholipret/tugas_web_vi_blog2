<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <center>
    <div class="col-md-4 col-md-offset-4 form-login">
  <div class="outter-form-login">
    <div class="logo-login">
      <img src="op.ico" alt="" width="50" height="60">
    </div>
    <form action="aksi_login.php" method="post" class="inner-login" align="center">
      <br>
      <br>
      <h3 class="text-center title-login">Login Form</h3>
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
  <input type="submit" class="btn btn-block btn-custom-green" value="Login">
  <br>
  <div class="text-center"> <a href="register.php">Daftar Akun</a></div>
  </form>
  </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootsrap.js"></script>
  </body>
</center>
</html>
