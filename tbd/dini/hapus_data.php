

<!DOCTYPE html>
<html>
   <head>
      <title>Hapus data</title>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <br>
         <CENTER><h1>Hapus Data</h1></CENTER>

         <?php
            include "koneksi.php";

            if (isset($_GET['Id_Penyewa'])) {
                $kb = $collection1->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Penyewa'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection1->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Penyewa'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_kos.php");
            }

         ?>

         <?php
            include "koneksi.php";

            if (isset($_GET['Id_Kamar'])) {
                $kb = $collection2->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Kamar'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection2->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Kamar'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_kos.php");
            }

         ?>

         <?php
            include "koneksi.php";

            if (isset($_GET['Id_Detail_Kamar'])) {
                $kb = $collection3->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Detail_Kamar'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection3->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Detail_Kamar'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_kos.php");
            }

        ?>

         <?php
            include "koneksi.php";

            if (isset($_GET['Id_Pembayaran'])) {
                $kb = $collection4->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Pembayaran'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection4->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Pembayaran'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_kos.php");
            }

         ?>

         <!-- <h3> Yang bernama <?php echo "$kb->Nama_Penyewa"; ?> dengan Nim <?php echo "$kb->Id_Penyewa"; ?> ? </h3> -->
         <form method="POST">
            <div class="form-group">
               <input type="hidden" value="<?php echo "$kb->_id"; ?>" class="form-control" name="npm">
               <a href="data_kos.php" class="btn btn-primary">Kembali</a>
               <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
            </div>
         </form>
      </div>
   </body>
</html>
