<?php
$link = $_GET["link"];

switch ($link) {
    case "gal":
        $dosya = "code/gal.php";
        break;
    case "ref":
        $dosya = "code/ref.php";
        break;
    case "hak":
        $dosya = "code/hak.php";
        break;
    case "ilet":
        $dosya = "code/ilet.php";
        break;
  
    default:
    case "main":
        $dosya = "code/main.php";
        break;
}

print ("<!-- yonet dosyasından alınan dosya $dosya dır. -->");
include ($dosya);



?>