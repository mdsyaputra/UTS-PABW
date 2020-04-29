<?php include("inc/header.php"); ?>
<?php include("config/db.php"); ?>
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
   <h3>Data Persebaran Masjid Yang Tutup di Kota Pekanbaru </h3>
   <h1>lihat data</h1>
   <div class="row">
      <a href="info.php" class="btn btn-primary">Back</a>

      <div class="col-lg-12">
         <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">post </a>
            <p class="list-group-item list-group-item-action">Masjid: <?php echo $masjid; ?></p>
            <p class="list-group-item list-group-item-action">Alamat: <?php echo $alamat; ?></p>
            <p class="list-group-item list-group-item-action">Keterangan: <?php echo $keterangan; ?></p>
            <p class="list-group-item list-group-item-action">Di Tutup Sejak Tanggal: <?php echo $published_on; ?></p>

         </div>
      </div>
   </div>
</div>
<?php include("inc/footer.php"); ?>