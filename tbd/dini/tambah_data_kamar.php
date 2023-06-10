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
        Input Data Kamar
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" class="form-control col-md-9" placeholder="Masukkan ID">
    </div>

    <div class="form-group">
    <label for="NOMOR"> NOMOR KAMAR </label>
    <input type="text" name="NOMOR" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="FASILITAS"> FASILITAS </label>
    <br>
    <label><input type="radio" name="FASILITAS" value="Kosongan"> Kosongan</label>
    <label><input type="radio" name="FASILITAS" value="Isi"> Isi</label>    
    </div>

    <div class="form-group">
    <label for="HARGA"> HARGA SEWA </label>
    <input type="text" name="HARGA" class="form-control col-md-9" placeholder="Masukkan NO TELEPON">
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
    $collection = $db->Kamar;
    $tblmhs = $collection->find();
        if(isset($_POST['simpan']))
        {
        $insertOneResult = $collection->insertOne([
            'Id_Kamar' => $_POST['ID'],
            'Nomer_Kamar' => $_POST['NOMOR'],
            'Fasilitas' => $_POST['FASILITAS'],
            'Harga_Sewa' => $_POST['HARGA'],
        ]);
        
            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tbd/dini/data_kos.php'>";
        }
    
?>