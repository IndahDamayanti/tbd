<?php
    include "koneksi.php";

    $tampil = $collection3->find();
    foreach ($tampil as $data);

    // $data['id_detail_kamar'] = NULL;

    if (isset($_GET['_id'])) {
        $mhs = $collection3->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id_detail_kamar'])]);
     }
     if(isset($_POST['submit'])){
        $collection3->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id_detail_kamar'])],
            ['$set' => ['id_detail_kamar' => $_POST['ID'], 'id_kamar' => $_POST['KAMAR'], 
            'id_customer' => $_POST['CUTOMER'],]]
        );
        $_SESSION['success'] = "Data berhasil diubah";
        header("Location: data_hotel.php");
     }
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
    <input type="text" name="ID" value="<?php echo $data['id_detail_kamar']?>"class="form-control col-md-9" placeholder="Masukkan ID DETAIL KAMAR">
    </div>

    <div class="form-group">
    <label for="KAMAR"> ID KAMAR </label>
    <input type="text" name="KAMAR"value="<?php echo $data['id_kamar']?>" class="form-control col-md-9" placeholder="Masukkan ID KAMAR">
    </div>

    <div class="form-group">
    <label for="CUSTOMER"> ID CUSTOMER </label>
    <input type="text" name="CUSTOMER"value="<?php echo $data['id_customer']?>" class="form-control col-md-9" placeholder="Masukkan ID CUSTOMER">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
    <a href="data_hotel.php" class="btn btn-danger">BATAL</a>
    </form>
</body>
</html>

