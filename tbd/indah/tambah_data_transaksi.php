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
        Input Data Transaksi
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" class="form-control col-md-9" placeholder="Masukkan ID">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA CUSTOMER </label>
    <input type="text" name="NAMA" class="form-control col-md-9" placeholder="Masukkan NAMA CUSTOMER">
    </div>

    <div class="form-group">
    <label for="CHECK_IN"> TANGGAL CHECK IN </label>
    <input type="date" name="CHECK_IN" class="form-control col-md-9" placeholder="Masukkan ANGGAL CHECK IN">
    <br>

    <div class="form-group">
    <label for="CHECK_OUT"> TANGGAL CHECK OUT </label>
    <input type="date" name="CHECK_OUT" class="form-control col-md-9" placeholder="Masukkan ANGGAL CHECK OUT">
    <br>

    <div class="form-group">
    <label for="TOTAL_PEMBAYARAN"> TOTAL PEMBAYARAN </label>
    <input type="text" name="TOTAL_PEMBAYARAN" class="form-control col-md-9" placeholder="Masukkan TOTAL PEMBAYARAN">
    <br>
    <div class="container col-md-6">
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <a href="data_hotel.php" class="btn btn-danger">BATAL</a>
    </div>  
    </form>
</body>
</html>

<?php
    require "koneksi.php";
    $collection = $db->tb_transaksi;
    $tblmhs = $collection->find();
        if(isset($_POST['simpan']))
        {
        $insertOneResult = $collection->insertOne([
            'id_transaksi' => $_POST['ID'],
            'nama_customer' => $_POST['NAMA'],
            'tanggal_check_in' => $_POST['CHECK_IN'],
            'tanggal_check_out' => $_POST['CHECK_OUT'],
            'total_pembayaran' => $_POST['TOTAL_PEMBAYARAN'],
        ]);
        
            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tbd/tbd/indah/data_hotel.php'>";
        }
    
?>