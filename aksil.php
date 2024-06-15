

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <a href="panel.php">Geri</a>



    <?php
include("baglanti.php");

$a_id = $_GET["id"]; 


$sql = "DELETE FROM aksiyon WHERE a_id = \"$a_id\""; 
$sonuc = mysqli_query($baglan, $sql);

if ($sonuc) {
    echo "sildim"; 
} else {
    echo "SİLME HATASI"; 
}

$baglan->close();
?>

</body>
</html>