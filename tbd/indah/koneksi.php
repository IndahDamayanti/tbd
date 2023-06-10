<?php

 require_once __DIR__ . "/vendor/autoload.php";
 $db = (new MongoDB\Client)->Reservasi_hotel;

 $collection1 = (new MongoDB\Client)->Reservasi_hotel->tb_Customer;
 $collection2 = (new MongoDB\Client)->Reservasi_hotel->tb_Kamar;
 $collection3 = (new MongoDB\Client)->Reservasi_hotel->tb_Detail_Kamar;
 $collection4 = (new MongoDB\Client)->Reservasi_hotel->tb_transaksi;
 

?>