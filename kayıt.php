<?php

include("baglanti.php");

?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anihime TV</title>
    <link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
</head>
<body>
    
<div  class="container">

  <!-- Navbar Kısmı -->
  <nav class="navbar navbar-expand-lg" style="background-color:#222831;">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="index.php">Anihime TV</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="Odevlerim/index.php">Ödevlerim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="admin.php">Admin Girişi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="giris.php">Giriş Yap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="kayıt.php">Kayıt Ol  </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Hakkımızda
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="hak.php">Hakkında</a></li>
              <li><a class="dropdown-item" href="ilt.php">İletişim </a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <form class="d-flex" action="arama_sonucu.php" method="get" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" name="arama" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>
    </div>
  </nav>

  <!-- Slider Kısmı -->
  

  <!-- İçerik Alanı -->


  <div style="clear:both;"></div>
  <div id="icerik">
  <div style="clear:both;"></div>
<div id="dizi">

<center>
<form action="" method="Post" style="Margin-top:95px;">

<h1 style="Margin-left:35px;  text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px; "  >Kullanıcı Kayıt</h1>
<table>

<tr>
  <td style="color:white;">Kullanıcı Adınız:</td>
  <td> <input style="margin-left:34px;" type="text"placeholder="Adınızı Girin" name="Kadi" id=""></td>
</tr><br>
<tr>
  <td  style="color:white;">E-posta Adresiniz: </td>
  <td><input class="textbox" require="require"  type="email" placeholder="Mailiniz" name="kpost"> </td>
</tr>
<tr>
  <td  style="color:white;">Kullanıcı Şifreniz:</td>
  <td><input class="textbox" require="require" type="password" placeholder="Şifreniz" name="ksif"></td>
</tr>
</table>
<br>
  


  

  <button style="margin-left:55px;" type="submit" class="btn btn-outline-light" name="buton" >Kayıt Ol</button> 
</form>
</center>

</div>

<?php

include("baglanti.php");


if(isset($_POST["Kadi"], $_POST["kpost"], $_POST["ksif"])) {
  $kadi = $_POST['Kadi'];
  $kpost = $_POST['kpost'];
  $ksif = $_POST['ksif'];

 
  if(empty($kadi) || empty($kpost) || empty($ksif)) {
    echo "Hata: Kullanıcı adı, e-posta veya şifre boş bırakılamaz!";
  } else {
 
    $ekle = "INSERT INTO persons (kullanici_adi, eposta, passwor)
    VALUES ('$kadi', '$kpost', '$ksif')";

   
    if ($baglan->query($ekle) === TRUE) {
      echo "Yeni kayıt başarıyla oluşturuldu";
    } else {
      echo "Hata: " . $baglan->error;
    }
  }
} else {
 
}


$baglan->close();

?>

<div style="clear:both;"></div>
<!---------menu kısmı---------->



  </div>
  
 <!--Footer Alanı -->
 <div id="footer">
<div id="kut">
<h2 id="yazfoot">Hakkında</h2>
<p  style="padding-top:0px;" id="yazfoot">Türkçe anime bilgi paylaşım platformu</p>
</div>

<div id="kut">
<h2 id="yazfoot" style="margin-left:20px">keşfet</h2>
<ul style="color:white; list-style-type:none; text-decoration:none;">
  <li>En iyi Movieler</li>
  <li>En iyi Animeler </li>
  <li> Son güncellenenler </li>   
</ul>
</div>

<div id="kut">
<h2 id="yazfoot">Popüler Türler </h2>
<ul style="color:white; list-style-type:none; text-decoration:none;">
  <li>Shounen</li>
  <li>Seinen  </li>
  <li> Shoujo </li>  
  <li> İsekai</li> 
</ul>
</div>

 </div>
  
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</body>
</html>