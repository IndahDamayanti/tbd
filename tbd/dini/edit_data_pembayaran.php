<?php
    include "koneksi.php";

    if (isset($_GET['Id_Pembayaran'])) {
        $mhs = $collection4->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Pembayaran'])]);
     }
     if(isset($_POST['submit'])){
        $collection4->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Pembayaran'])],
            ['$set' => ['Id_Pembayaran' => $_POST['ID'], 'ID_Detail_Kamar' => $_POST['KAMAR'], 
            'Nama_Penyewa' => $_POST['NAMA'],'Tanggal_Bayar' => $_POST['TANGGAL'],
            'Jumlah_Bayar' => $_POST['JUMLAH'],'Keterangan' => $_POST['KETERANGAN'],]]
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
    <title>Data Customer</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Edit Data Kamar
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" value="<?php echo $data['Id_Pembayaran']?>"class="form-control col-md-9" placeholder="Masukkan ID PEMBAYARAN">
    </div>

    <div class="form-group">
    <label for="KAMAR"> ID DETAIL KAMAR </label>
    <input type="text" name="KAMAR"value="<?php echo $data['ID_Detail_Kamar']?>" class="form-control col-md-9" placeholder="Masukkan NOMOR KAMAR">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA PENYEWA </label>
    <input type="text" name="NAMA"value="<?php echo $data['Nama_Penyewa']?>" class="form-control col-md-9" placeholder="Masukkan HARGA KAMAR">
    </div>

    <div class="form-group">
    <label for="TANGGAL"> TANGGAL BAYAR </label>
    <input type="date" name="TANGGAL"value="<?php echo $data['Tanggal_Bayar']?>" class="form-control col-md-9" placeholder="Masukkan HARGA KAMAR">
    </div>

    <div class="form-group">
    <label for="JUMLAH"> JUMLAH BAYAR </label>
    <input type="text" name="JUMLAH"value="<?php echo $data['Jumlah_Bayar']?>" class="form-control col-md-9" placeholder="Masukkan HARGA KAMAR">
    </div>

    <div class="form-group">
    <label for="KETERANGAN"> KETERANGAN </label>
    <input type="text" name="KETERANGAN"value="<?php echo $data['Keterangan']?>" class="form-control col-md-9" placeholder="Masukkan HARGA KAMAR">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_kos.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

