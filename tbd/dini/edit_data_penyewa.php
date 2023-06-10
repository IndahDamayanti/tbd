<?php
    include "koneksi.php";

    if (isset($_GET['Id_Penyewa'])) {
        $mhs = $collection1->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Penyewa'])]);
     }
     if(isset($_POST['submit'])){
        $collection1->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Penyewa'])],
            ['$set' => ['Id_Penyewa' => $_POST['ID'], 'Nama_Penyewa' => $_POST['NAMA'], 
            'Jenis_Kelamin' => $_POST['JENIS_KELAMIN'],'Alamat' => $_POST['ALAMAT'],
            'No_telp' => $_POST['NO_TELP'],]]
        );
        $_SESSION['success'] = "Data berhasil diubah";
        header("Location: data_hotel.php");
     }
    $tampil = $collection1->find();
    foreach ($tampil as $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Penyewa</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Edit Data Penyewa
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" value="<?php echo $data['Id_Penyewa']?>"class="form-control col-md-9" placeholder="Masukkan ID KAMAR">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA PENYEWA </label>
    <input type="text" name="NOMOR"value="<?php echo $data['Nama_Penyewa']?>" class="form-control col-md-9" placeholder="Masukkan NAMA PENYEWA">
    </div>

    <div class="form-group">
    <label for="JENIS_KELAMIN"> JENIS KELAMIN </label>
    <br>
    <label><input type="radio" name="JENIS_KELAMIN" value="Laki-laki"> Laki-laki </label>
    <label><input type="radio" name="JENIS_KELAMIN" value="Perempuan"> Perempuan </label>    
    </div>

    <div class="form-group">
    <label for="ALAMAT"> ALAMAT </label>
    <input type="text" name="ALAMAT"value="<?php echo $data['Alamat']?>" class="form-control col-md-9" placeholder="Masukkan ALAMAT">
    </div>

    <div class="form-group">
    <label for="NO_TELP"> NO TELP </label>
    <input type="text" name="NO_TELP"value="<?php echo $data['No_telp']?>" class="form-control col-md-9" placeholder="Masukkan NO TELP">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_kos.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

