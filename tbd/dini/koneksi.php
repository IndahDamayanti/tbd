<?php

 require_once __DIR__ . "/vendor/autoload.php";
 $db = (new MongoDB\Client)->Kos;

 $collection1 = (new MongoDB\Client)->Kos->Penyewa;
 $collection2 = (new MongoDB\Client)->Kos->Kamar;
 $collection3 = (new MongoDB\Client)->Kos->Detail_Kamar;
 $collection4 = (new MongoDB\Client)->Kos->Pembayaran;
 
 ?>