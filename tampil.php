
<?php
include 'koneksi.php';


$query = "SELECT * FROM artikel";
$hasil = mysqli_query($koneksi,$query);
$no=1;
 ?>
 
   <div class="row">
   <div class="col-md-9 col-sm-6">
  
     <?php while ($data= mysqli_fetch_assoc($hasil)) {?>
       <h1><?php echo $data['judul_ar']; ?></h1>
       <br>
       <h5><?php echo $data['isi_ar']; ?></h5>
     <?php } ?>
  
 </div>
</div>
 
