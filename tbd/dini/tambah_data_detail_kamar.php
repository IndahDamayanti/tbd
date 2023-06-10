<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Detail Kamar</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data Detail Kamar
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" class="form-control col-md-9" placeholder="Masukkan ID DETAIL KAMAR">
    </div>

    <div class="form-group">
    <label for="KAMAR"> ID KAMAR </label>
    <input type="text" name="KAMAR" class="form-control col-md-9" placeholder="Masukkan ID KAMAR">
    </div>

    <div class="form-group">
    <label for="PENYEWA"> ID PENYEWA </label>
    <input type="text" name="PENYEWA" class="form-control col-md-9" placeholder="Masukkan ID PENYEWA">
    </div>

    <div class="form-group">
    <label for="SEWA"> MULAI SEWA </label>
    <input type="date" name="SEWA" class="form-control col-md-9" placeholder="Masukkan MULAI SEWA">
    </div>
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
    $collection = $db->Detail_Kamar;
    $tblmhs = $collection->find();
        if(isset($_POST['simpan']))
        {
        $insertOneResult = $collection->insertOne([
            'Id_Detail_Kamar' => $_POST['ID'],
            'Id_Kamar' => $_POST['KAMAR'],
            'Id_Penyewa' => $_POST['CUSTOMER'],
            'Mulai_Sewa' => $_POST['SEWA'],
        ]);
        
            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tbd/tbd/indah/data_hotel.php'>";
        }
    
?>