<?php
    include "koneksi.php";

    if (isset($_GET['id_transaksi'])) {
        $mhs = $collection4->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_transaksi'])]);
     }
     if(isset($_POST['submit'])){
        $collection4->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id_transaksi'])],
            ['$set' => ['id_transaksi' => $_POST['ID'], 'nama_customer' => $_POST['NAMA'], 
            'tanggal_check_in' => $_POST['CHECK_IN'],'tanggal_check_out' => $_POST['CHECK_OUT'],
            'total_pembayaran' => $_POST['TOTAL'],]]
        );
        $_SESSION['success'] = "Data berhasil diubah";
        header("Location: data_hotel.php");
     }
    $tampil = $collection4->find();
    foreach ($tampil as $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Edit Data Transaksi
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" value="<?php echo $data['id_transaksi']?>"class="form-control col-md-9" placeholder="Masukkan ID TRANSAKSI">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA CUSTOMER </label>
    <input type="text" name="NAMA"value="<?php echo $data['nama_customer']?>" class="form-control col-md-9" placeholder="Masukkan NAMA CUSTOMER">
    </div>

    <div class="form-group">
    <label for="CHECK_IN"> TANGGAL CHECK IN </label>
    <input type="date" name="CHECK_IN" value="<?php echo $data['tanggal_check_in']?>" class="form-control col-md-9" placeholder="Masukkan CHECK_IN">
    <br>

    <div class="form-group">
    <label for="CHECK_OUT"> TANGGAL CHECK OUT </label>
    <input type="date" name="CHECK_OUT" value="<?php echo $data['tanggal_check_out']?>" class="form-control col-md-9" placeholder="Masukkan CHECK_IN">
    <br>

    <div class="form-group">
    <label for="TOTAL"> TOTAL PEMBAYARAN </label>
    <input type="date" name="TOTAL" value="<?php echo $data['total_pembayaran']?>" class="form-control col-md-9" placeholder="Masukkan TOTAL PEMBAYARAN">
    <br>
    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_hotel.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

