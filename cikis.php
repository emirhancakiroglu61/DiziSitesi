<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anihime TV</title>
</head>
<body>
<?php
session_start(); // Oturumu başlat

// Tüm oturum değişkenlerini sil
session_unset();

// Oturumu sonlandır
session_destroy();

// Giriş sayfasına yönlendir
header('Location: index.php');
exit;
?>

</body>
</html>