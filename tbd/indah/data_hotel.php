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
                    <li><a href="tambah_data_customer.php">Tambah Data Customer</a></li>
                    <li><a href="tambah_data_kamar.php">Tambah Data Kamar</a></li>
                    <li><a href="tambah_data_detail_kamar.php">Tambah Data Detail Kamar</a></li>
                    <li><a href="tambah_data_transaksi.php">Tambah Data Transaksi</a></li>
                    <li><a href="data_hotel.php">Lihat Data</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Kris &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="../kris/tambah_data_customer.php">Tambah Data Customer</a></li>
                    <li><a href="../kris/tambah_data_cucian.php">Tambah Data Cucian</a></li>
                    <li><a href="../kris/tambah_data_transaksi.php">Tambah Data Transaksi</a></li>
                    <li><a href="../kris/data_laundry.php">Lihat Data</a></li>
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
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>AKSI</th>
            </tr>
            <?php
                include "koneksi.php";
                $collection = $db->tb_Customer;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
            ?>
            <tr>
                <td><?php echo $no++;?> </td>
                <td><?php echo $data ['id_customer']?></td>
                <td><?php echo $data ['nama_customer']?></td>
                <td><?php echo $data ['jenis_kelamin']?></td>
                <td><?php echo $data ['alamat']?></td>
                <td><?php echo $data ['no_telp']?></td>
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
            Table Data Kamar
        </div>   
        <br>
        <div class="card-body">
            <a href="tambah_data_kamar.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nomor Kamar</th>
                    <th>Jenis Kamar</th>
                    <th>Fasilitas</th>
                    <th>Harga Kamar</th>
                    <th>AKSI</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $collection = $db->tb_Kamar;
                    $no = 1;
                    $tampil = $collection->find();
                    foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['id_kamar']?></td>
                    <td><?php echo $data ['no_kamar']?></td>
                    <td><?php echo $data ['jenis_kamar']?></td>
                    <td><?php echo $data ['fasilitas']?></td>
                    <td><?php echo $data ['harga_kamar']?></td>
                    <td>
                        <a href="edit_data_kamar.php?id_kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?id_kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div>
        <div class="card-header bg-primary text-white">
            Table Data Detail Kamar
        </div>   
        <br>
        <div class="card-body">
            <a href="tambah_data_detail_kamar.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>ID Kamar</th>
                    <th>ID Customer</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->tb_Detail_Kamar;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['id_detail_kamar']?></td>
                    <td><?php echo $data ['id_kamar']?></td>
                    <td><?php echo $data ['id_customer']?></td>
                    <td>
                        <a href="edit_data_detail_kamar.php?id_detail_kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?id_detail_kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
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
                    <th>Nama Customer</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Total Pembayaran</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->tb_transaksi;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['id_transaksi']?></td>
                    <td><?php echo $data ['nama_customer']?></td>
                    <td><?php echo $data ['tanggal_check_in']?></td>
                    <td><?php echo $data ['tanggal_check_out']?></td>
                    <td><?php echo $data ['total_pembayaran']?></td>
                    <td>
                        <a href="edit_data_transaksi.php?id_detail_kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?id_detail_kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>