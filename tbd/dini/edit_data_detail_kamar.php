<?php
    include "koneksi.php";

    if (isset($_GET['Id_Detail_Kamar'])) {
        $mhs = $collection3->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Detail_Kamar'])]);
     }
     if(isset($_POST['submit'])){
        $collection3->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['Id_Detail_Kamar'])],
            ['$set' => ['Id_Detail_Kamar' => $_POST['ID'], 'Id_Kamar' => $_POST['KAMAR'], 
            'Id_Penyewa' => $_POST['PENYEWA'],'Mulai_Sewa' => $_POST['SEWA'],]]
        );
        $_SESSION['success'] = "Data berhasil diubah";
        header("Location: data_hotel.php");
     }
    $tampil = $collection3->find();
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
        Edit Data Detail Kamar
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="ID"> ID </label>
    <input type="text" name="ID" value="<?php echo $data['Id_Detail_Kamar']?>"class="form-control col-md-9" placeholder="Masukkan ID DETAIL KAMAR">
    </div>

    <div class="form-group">
    <label for="KAMAR"> ID KAMAR </label>
    <input type="text" name="KAMAR"value="<?php echo $data['Id_Kamar']?>" class="form-control col-md-9" placeholder="Masukkan ID KAMAR">
    </div>

    <div class="form-group">
    <label for="PENYEWA"> ID PENYEWA </label>
    <input type="text" name="PENYEWA"value="<?php echo $data['Id_Penyewa']?>" class="form-control col-md-9" placeholder="Masukkan ID PENYEWA">
    </div>

    <div class="form-group">
    <label for="SEWA"> MULAI SEWA </label>
    <input type="text" name="SEWA"value="<?php echo $data['Mulai_Sewa']?>" class="form-control col-md-9" placeholder="Masukkan MULAI SEWA">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_kos.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

