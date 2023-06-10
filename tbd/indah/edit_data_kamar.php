<?php
    include "koneksi.php";

    if (isset($_GET['id_kamar'])) {
        $mhs = $collection2->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_kamar'])]);
     }
     if(isset($_POST['submit'])){
        $collection2->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id_kamar'])],
            ['$set' => ['id_kamar' => $_POST['ID'], 'no_kamar' => $_POST['NOMOR'], 
            'jenis_kamar' => $_POST['JENIS'],'fasilitas' => $_POST['FASILITAS'],'harga_kamar' => $_POST['HARGA'],]]
        );
        $_SESSION['success'] = "Data berhasil diubah";
        header("Location: data_hotel.php");
     }
    $tampil = $collection2->find();
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
    <input type="text" name="ID" value="<?php echo $data['id_kamar']?>"class="form-control col-md-9" placeholder="Masukkan ID KAMAR">
    </div>

    <div class="form-group">
    <label for="NOMOR"> NOMOR KAMAR </label>
    <input type="text" name="NOMOR"value="<?php echo $data['no_kamar']?>" class="form-control col-md-9" placeholder="Masukkan NOMOR KAMAR">
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
    <input type="text" name="HARGA"value="<?php echo $data['harga_kamar']?>" class="form-control col-md-9" placeholder="Masukkan HARGA KAMAR">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_hotel.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

