<?php
    include "koneksi.php";

    if (isset($_GET['id_customer'])) {
        $mhs = $collection1->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_customer'])]);
     }
     if(isset($_POST['submit'])){
        $collection1->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id_customer'])],
            ['$set' => ['id_customer' => $_POST['ID'], 'nama_customer' => $_POST['NAMA'], 
            'alamat' => $_POST['ALAMAT'],'no_telp' => $_POST['NO_TELP'],'jenis_kelamin' => $_POST['JENIS_KELAMIN'],]]
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
    <title>Data Customer</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Edit Data Customer
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" value="<?php echo $data['id_customer']?>"class="form-control col-md-9" placeholder="Masukkan NPM">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA CUSTOMER </label>
    <input type="text" name="NAMA"value="<?php echo $data['nama_customer']?>" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="JENSI_KELAMIN"> JENIS KELAMIN </label>
    <br>
    <label><input type="radio" name="JENIS_KELAMIN" value="laki-laki"> Laki-laki</label>
    <label><input type="radio" name="JENIS_KELAMIN" value="Perempuan"> Perempuan</label>    
    </div>

    <div class="form-group">
    <label for="ALAMAT"> ALAMAT </label>
    <input type="text" name="ALAMAT" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukkan ALAMAT">
    </div>

    <div class="form-group">
    <label for="NO_TELP"> NO TELEPON </label>
    <input type="text" name="NO_TELP" value="<?php echo $data['no_telp']?>" class="form-control col-md-9" placeholder="Masukkan KODE POS">
    <br>
    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_hotel.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

