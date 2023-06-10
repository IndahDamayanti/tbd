<?php

 require_once __DIR__ . "/vendor/autoload.php";
 $db = (new MongoDB\Client)->Laundry;

 $collection1 = (new MongoDB\Client)->Laundry->customer;
 $collection2 = (new MongoDB\Client)->Laundry->cucian;
 $collection3 = (new MongoDB\Client)->Laundry->transaksi;
 

?>