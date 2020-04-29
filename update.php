<?php include("config/db.php") ?>
<?php include("inc/header.php") ?>

<?php
if (isset($_POST['submit'])) {
      $no = $_POST['no'];
      $masjid = $_POST['masjid'];
      $alamat = $_POST['alamat'];
      $keterangan = $_POST['keterangan'];

      if ($masjid != "" && $alamat != "" && $keterangan != "") {
            $sql = "UPDATE post SET masjid= '$masjid', alamat='$alamat', keterangan='$keterangan' WHERE no =$no";


            $stmt = $pdo->prepare($sql);
            if ($stmt->execute()) {
                  header("location:info.php");
            } else {
                  echo "Maaf, gagal mengupdate data";
            }
      } else {
            $error  = "Mohon isi semua data!";
      }
}
?>
