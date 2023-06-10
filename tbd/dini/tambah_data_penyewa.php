<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data Penyewa
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" class="form-control col-md-9" placeholder="Masukkan ID">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA PENYEWA </label>
    <input type="text" name="NAMA" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="JENIS_KELAMIN"> JENIS KELAMIN </label>
    <br>
    <label><input type="radio" name="JENIS_KELAMIN" value="Laki-laki"> LAKI - LAKI</label>
    <label><input type="radio" name="JENIS_KELAMIN" value="Perempuan"> PEREMPUAN</label>    
    </div>

    <div class="form-group">
    <label for="ALAMAT"> ALAMAT </label>
    <input type="text" name="ALAMAT" class="form-control col-md-9" placeholder="Masukkan ALAMAT">
    </div>

    <div class="form-group">
    <label for="NO_TELEPON"> NO TELEPON </label>
    <input type="text" name="NO_TELEPON" class="form-control col-md-9" placeholder="Masukkan NO TELEPON">
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
    $collection = $db->Penyewa;
    $tblmhs = $collection->find();
        if(isset($_POST['simpan']))
        {
        $insertOneResult = $collection->insertOne([
            'Id_Penyewa' => $_POST['ID'],
            'Nama_Penyewa' => $_POST['NAMA'],
            'Jenis_Kelamin' => $_POST['JENIS_KELAMIN'],
            'Alamat' => $_POST['ALAMAT'],
            'No_telp' => $_POST['NO_TELEPON'],
        ]);
        
            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tbd/dini/data_kos.php'>";
        }
    
?>