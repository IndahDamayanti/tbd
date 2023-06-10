<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Kos</title>
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
                <li><a href="../kris/tambah_data_customer.php">Tambah Data Customer</a></li>
                <li><a href="../kris/tambah_data_cucian.php">Tambah Data Cucian</a></li>
                <li><a href="../kris/tambah_data_transaksi.php">Tambah Data Transaksi</a></li>
                <li><a href="../kris/data_laundry.php">Lihat Data</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Dini &#9662;</a>
            <ul class="dropdown-menu">
                <li><a href="tambah_data_penyewa.php">Tambah Data Penyewa</a></li>
                <li><a href="tambah_data_kamar.php">Tambah Data Kamar</a></li>
                <li><a href="tambah_data_detail_kamar.php">Tambah Data Detail Kamar</a></li>
                <li><a href="tambah_data_Pembayaran.php">Tambah Data Pembayaran</a></li>
                <li><a href="data_kos.php">Lihat Data</a></li>
            </ul>
        </li>
    </ul>
</div>

    <div class="content">
    <div class="container col-md-10">
    <div class="card-header bg-primary text-white">
        Table Data Penyewa
    </div>
    <br>
        <div class="card-body">
            <a href="tambah_data_penyewa.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->Penyewa;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['Id_Penyewa']?></td>
                    <td><?php echo $data ['Nama_Penyewa']?></td>
                    <td><?php echo $data ['Jenis_Kelamin']?></td>
                    <td><?php echo $data ['Alamat']?></td>
                    <td><?php echo $data ['No_telp']?></td>
                    <td>
                        <a href="edit_data_penyewa.php?Id_Penyewa=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?Id_Penyewa=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div> 
    </div>

    <div class="content" style="margin-left:-20px;">
    <div class="container col-md-10">
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
                    <th>ID Kamar</th>
                    <th>Nomor Kamar</th>
                    <th>Fasilitas</th>
                    <th>Harga Sewa</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->Kamar;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['Id_Kamar']?></td>
                    <td><?php echo $data ['Nomer_Kamar']?></td>
                    <td><?php echo $data ['Fasilitas']?></td>
                    <td><?php echo $data ['Harga_Sewa']?></td>
                    <td>
                        <a href="edit_data_kamar.php?Id_Kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?Id_Kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div class="content" style="margin-left:-20px;">
    <div class="container col-md-10">
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
                    <th>ID Detail Kamar</th>
                    <th>ID Kamar</th>
                    <th>ID Penyewa</th>
                    <th>Mulai Sewa</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->Detail_Kamar;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['Id_Detail_Kamar']?></td>
                    <td><?php echo $data ['Id_Kamar']?></td>
                    <td><?php echo $data ['Id_Penyewa']?></td>
                    <td><?php echo $data ['Mulai_Sewa']?></td>
                    <td>
                        <a href="edit_data_detail_kamar.php?Id_Detail_Kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?Id_Detail_Kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div class="content" style="margin-left:-20px;">
    <div class="container col-md-10">
    <div class="card-header bg-primary text-white">
        Table Data Pembayaran  
    </div>   
    <br>
        <div class="card-body">
        <a href="tambah_data_pembayaran.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ID Pembayaran</th>
                    <th>ID Detail Kamar</th>
                    <th>Nama Penyewa</th>
                    <th>Tanggal Bayar</th>
                    <th>Jumlah Bayar</th>
                    <th>Keterangan</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $collection = $db->Pembayaran;
                $no = 1;
                $tampil = $collection->find();
                foreach ($tampil as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['Id_Pembayaran']?></td>
                    <td><?php echo $data ['ID_Detail_Kamar']?></td>
                    <td><?php echo $data ['Nama_Penyewa']?></td>
                    <td><?php echo $data ['Tanggal_Bayar']?></td>
                    <td><?php echo $data ['Jumlah_Bayar']?></td>
                    <td><?php echo $data ['Keterangan']?></td>
                    <td>
                        <a href="edit_data_pembayaran.php?Id_Pembayaran=<?php echo $data['_id'];?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_data.php?Id_Detail_Kamar=<?php echo $data['_id'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div> 
    </div>


</body>
</html>