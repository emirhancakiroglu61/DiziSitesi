<?php

$servername = "sql111.infinityfree.com";
$username = "if0_36707918";
$password = "aXtPmQYspt";
$dbname = "if0_36707918_dizi";

$baglan=new mysqli($servername, $username, $password, $dbname);

if(!$baglan)
 die("veri tabanına ulaşılamıyor.".mysqli_connect_error())



?>