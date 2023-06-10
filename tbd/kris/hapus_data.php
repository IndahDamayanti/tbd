

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

            if (isset($_GET['id_customer'])) {
                $kb = $collection1->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_customer'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection1->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_customer'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_laundry.php");
            }

        ?>

         <?php
            include "koneksi.php";

            if (isset($_GET['id_Cucian'])) {
                $kb = $collection2->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_Cucian'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection2->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_Cucian'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_laundry.php");
            }

        ?>

         <?php
            include "koneksi.php";

            if (isset($_GET['id_Transaksi'])) {
                $kb = $collection3->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_Transaksi'])]);
            }
            if(isset($_POST['submit'])){

            include 'koneksi.php';
            $collection3->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_Transaksi'])]);
            $_SESSION['success'] = "Data Berhasil dihapus";
            header("Location: data_laundry.php");
            }

        ?>

         <!-- <h3> Yang bernama <?php echo "$kb->Nama_Penyewa"; ?> dengan Nim <?php echo "$kb->Id_Penyewa"; ?> ? </h3> -->
         <form method="POST">
            <div class="form-group">
               <input type="hidden" value="<?php echo "$kb->_id"; ?>" class="form-control" name="npm">
               <a href="data_hotel.php" class="btn btn-primary">Kembali</a>
               <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
            </div>
         </form>
      </div>
   </body>
</html>
