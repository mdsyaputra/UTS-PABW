<?php include("inc/header.php") ?>
<?php include("config/db.php") ?>
<?php
$no = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM post WHERE no = $no");
if ($stmt->rowCount() > 0) {
   while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
      $no = $row->no;
      $masjid = $row->masjid;
      $alamat = $row->alamat;
      $keterangan = $row->keterangan;
      $published_on = $row->published_on;
   }
}
?>
<div class="container">
   <h3>Data Persebaran Masjid Yang Tutup di Kota Pekanbaru</h3>
   <h1>Edit Post</h1>
   <div class="row">
      <a href="info.php" class="btn btn-primary">Back</a>
   </div>
   <hr>
   <div class="row">
      <form class="form-horizontal" action="update.php" method="POST">
         <fieldset>
            <input type="hidden" name="no" value=<?php echo $no; ?>>
            <div class="form-group">
               <label class="col-sm-2">Masjid</label>
               <div class="col-sm-20">
                  <input type="text" name="masjid" class="form-control" value=<?php echo $masjid; ?>>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Alamat Masjid</label>
               <div class="col-sm-20">
                  <input type="text" name="alamat" class="form-control" value=<?php echo $alamat ?>>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Keterangan</label>
               <div class="col-sm-20">
                  <input type="text" name="keterangan" class="form-control" value=<?php echo $keterangan ?>>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Ditutup&nbspSejak&nbspTanggal </label>
               <div class="col-sm-20">
                  <input type="date" id="published_on" value=<?php echo $published_on ?>name="published_on" class="form-control">
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