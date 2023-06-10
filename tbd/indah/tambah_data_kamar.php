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
    <input type="text" name="ID" class="form-control col-md-9" placeholder="Masukkan ID KAMAR">
    </div>

    <div class="form-group">
    <label for="NOMOR"> NOMOR KAMAR </label>
    <input type="text" name="NOMOR" class="form-control col-md-9" placeholder="Masukkan NOMOR KAMAR">
    </div>

    <div class="form-group">
    <label for="JENIS"> JENIS KAMAR </label>
    <br>
    <label><input type="radio" name="JENIS" value="Kelas Double"> Kelas Double</label>
    <label><input type="radio" name="JENIS" value="Kelas Suite"> Kelas Suite</label>    
    <label><input type="radio" name="JENIS" value="Kelas Suite"> Kelas Junior Suite</label>
    </div>

    <div class="form-group">
    <label for="FASILITAS"> FASILITAS </label>
    <br>
    <label><input type="radio" name="FASILITAS" value="Kosongan"> Kosongan</label>
    <label><input type="radio" name="FASILITAS" value="Isi"> Isi</label>    
    </div>

    <div class="form-group">
    <label for="HARGA"> HARGA KAMAR </label>
    <input type="text" name="HARGA" class="form-control col-md-9" placeholder="Masukkan HARGA KAMAR">
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
    $collection = $db->tb_Kamar;
    $tblmhs = $collection->find();
        if(isset($_POST['simpan']))
        {
        $insertOneResult = $collection->insertOne([
            'id_kamar' => $_POST['ID'],
            'no_kamar' => $_POST['NOMOR'],
            'jenis_kamar' => $_POST['JENIS'],
            'fasilitas' => $_POST['FASILITAS'],
            'harga_kamar' => $_POST['HARGA'],
        ]);
        
            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/tbd/tbd/indah/data_hotel.php'>";
        }
    
?>