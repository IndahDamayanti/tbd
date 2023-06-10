<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Pembayaran</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data Pembayaran
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" class="form-control col-md-9" placeholder="Masukkan ID">
    </div>

    <div class="form-group">
    <label for="KAMAR"> ID DETAIL KAMAR </label>
    <input type="text" name="KAMAR" class="form-control col-md-9" placeholder="Masukkan ID DETAIL KAMAR">
    </div>

    <div class="form-group">
    <label for="PENYEWA"> NAMA PENYEWA </label>
    <input type="text" name="PENYEWA" class="form-control col-md-9" placeholder="Masukkan NAMA PENYEWA">
    </div>

    <div class="form-group">
    <label for="TANGGAL"> TANGGAL BAYAR </label>
    <input type="date" name="TANGGAL" class="form-control col-md-9" placeholder="Masukkan TANGGAL BAYAR">
    </div>

    <div class="form-group">
    <label for="JUMLAH"> JUMLAH BAYAR </label>
    <input type="text" name="JUMLAH" class="form-control col-md-9" placeholder="Masukkan JUMLAH BAYAR">
    </div>

    <div class="form-group">
    <label for="KETERANGAN"> KETERANGAN </label>
    <input type="text" name="KETERANGAN" class="form-control col-md-9" placeholder="Masukkan KETERANGAN">
    </div>
    <br>
    <div class="container col-md-6">
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <a href="data_kos.php"></a><button type="reset" class="btn btn-danger">BATAL</button></a>
    </div>  
    </form>
</body>
</html>

<?php
    require "koneksi.php";
    $collection = $db->Pembayaran;
    $tblmhs = $collection->find();
        if(isset($_POST['simpan']))
        {
        $insertOneResult = $collection->insertOne([
            'Id_Pembayaran' => $_POST['ID'],
            'ID_Detail_Kamar' => $_POST['KAMAR'],
            'Nama_Penyewa' => $_POST['PENYEWA'],
            'Tanggal_Bayar' => $_POST['TANGGAL'],
            'Jumlah_Bayar' => $_POST['JUMLAH'],
            'Keterangan' => $_POST['KETERANGAN'],
        ]);
        
            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tbd/dini/data_kos.php'>";
        }
    
?>