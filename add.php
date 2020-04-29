<?php include("inc/header.php"); ?>
<?php include("config/db.php"); ?>
<?php
if (isset($_POST['submit'])) {
   $masjid = $_POST['masjid'];
   $alamat = $_POST['alamat'];
   $keterangan = $_POST['keterangan'];
   $published  = $_POST['published_on'];
   $published_on = strtotime($published);
   $published_date    = date("Y/m/d", $published_on);
   if ($masjid != "" && $alamat != "" && $keterangan != "" && $published != "") {
      $sql = "INSERT INTO post(masjid, alamat, keterangan, published_on) VALUES('$masjid','$alamat','$keterangan','$published_date')";

      $stmt = $pdo->prepare($sql);
      if ($stmt->execute()) {
         header("location:info.php");
      } else {
         echo "Maaf, gagal menambahkan data";
      }
   } else {
      $error  = "Mohon isi semua data!";
   }
}
?>
<div class="container">
   <h3>Data Persebaran Masjid Yang Tutup di Kota Pekanbaru</h3>
   <h1>Add post</h1>
   <div class="row">
      <a href="info.php" class="btn btn-primary">Back</a>
   </div>
   <hr>
   <div class="row">
      <form class="form-horizontal" action="add.php" method="POST">
         <fieldset>
            <div class="form-group">
               <label class="col-sm-2">Masjid</label>
               <div class="col-sm-20">
                  <input type="text" name="masjid" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Alamat</label>
               <div class="col-sm-20">
                  <input type="text" name="alamat" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Keterangan</label>
               <div class="col-sm-20">
                  <input type="text" name="keterangan" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4"> Ditutup&nbspSejak&nbspTanggal</label>
               <div class="col-sm-20">
                  <input type="date" id="published_on" name="published_on" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4"></label>
               <div class="col-sm-20">
                  <?php if (isset($_POST['submit'])) : ?>
                     <div class="alert alert-dissmissible alert-warning">
                        <p><?php echo $error; ?></p>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group">

               <div class="col-sm-20">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </div>
            </div>
         </fieldset>
      </form>

   </div>
</div>
<?php include("inc/footer.php"); ?>