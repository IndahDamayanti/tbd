<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Hotel</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li class="dropdown">
                <a href="#">Indah &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="../indah/tambah_data_customer.php">Tambah Data Customer</a></li>
                    <li><a href="../indah/tambah_data_kamar.php">Tambah Data Kamar</a></li>
                    <li><a href="../indah/tambah_data_detail_kamar.php">Tambah Data Detail Kamar</a></li>
                    <li><a href="../indah/tambah_data_transaksi.php">Tambah Data Transaksi</a></li>
                    <li><a href="../indah/data_hotel.php">Lihat Data</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Kris &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="tambah_data_customer.php">Tambah Data Customer</a></li>
                    <li><a href="tambah_data_cucian.php">Tambah Data Cucian</a></li>
                    <li><a href="tambah_data_transaksi.php">Tambah Data Transaksi</a></li>
                    <li><a href="data_laundry.php">Lihat Data</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Dini &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="../dini/tambah_data_penyewa.php">Tambah Data Penyewa</a></li>
                    <li><a href="../dini/tambah_data_kamar.php">Tambah Data Kamar</a></li>
                    <li><a href="../dini/tambah_data_detail_kamar.php">Tambah Data Detail Kamar</a></li>
                    <li><a href="../dini/tambah_data_Pembayaran.php">Tambah Data Pembayaran</a></li>
                    <li><a href="../dini/data_kos.php">Lihat Data</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
    <div class="container col-md-10">
    <div class="card-header bg-primary text-white">
        Table Data Customer
    </div>   
    <br>
    <div class="card-body">
        <a href="tambah_data_customer.php" class="btn btn-primary">Tambah Data</a>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>AKSI</th>
            </tr>
            <?php
                include "koneksi.php";
                $collection = $db->customer;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
            ?>
            <tr>
                <td><?php echo $no++;?> </td>
                <td><?php echo $data ['id_customer']?></td>
                <td><?php echo $data ['Nama_customer']?></td>
                <td><?php echo $data ['Alamat']?></td>
                <td><?php echo $data ['No_tlp']?></td>
                <td>
                    <a href="edit_data_customer.php?id_customer=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus_data.php?id_customer=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <!-- <div class="container col-md-10" style="margin-left:-30px;margin-right:-30px;"> -->
    <div>
        <div class="card-header bg-primary text-white">
            Table Data Cucian
        </div>   
        <br>
        <div class="card-body">
            <a href="tambah_data_cucian.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Berat Cucian</th>
                    <th>Harga</th>
                    <th>AKSI</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $collection = $db->cucian;
                    $no = 1;
                    $tampil = $collection->find();
                    foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['id_Cucian']?></td>
                    <td><?php echo $data ['Berat_Cucian']?></td>
                    <td><?php echo $data ['Harga']?></td>
                    <td>
                        <a href="edit_data_cucian.php?id_Cucian=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?id_Cucian=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div>
        <div class="card-header bg-primary text-white">
            Table Data Transaksi
        </div>   
        <br>
        <div class="card-body">
            <a href="tambah_data_transaksi.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>ID Customer</th>
                    <th>ID Cucian</th>
                    <th>Berat Total</th>
                    <th>Total Bayar</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->transaksi;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['id_Transaksi']?></td>
                    <td><?php echo $data ['id_Customer']?></td>
                    <td><?php echo $data ['id_Cucian']?></td>
                    <td><?php echo $data ['Berat_Total']?></td>
                    <td><?php echo $data ['Total_Bayar']?></td>
                    <td>
                        <a href="edit_data_transaksi.php?id_Transaksi=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?id_Transaksi=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>