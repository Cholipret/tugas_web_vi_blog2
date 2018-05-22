<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Daftar Akun</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <center>
    <div class="col-md-4 col-md-offset-4 form-login">
  <div class="outter-form-login">
    <h1 align="center">DAFTAR AKUN</h1>
    <form action="aksi_register.php" class="inner-login" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="form-group">
      <input type="password" class="form-control" name="ulang" value="" placeholder="re-enter password">
    </div>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="submit" class="btn btn-block btn-custom-green">simpan</button>
          <br>
          <a href="login.php">
          <button type="button" class="btn btn-block btn-custom-green">kembali</button>
          </a>
         </td>
    </tr>
    </table>
  </form>
  </body>
</html>
