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
      <a class="navbar-brand text-light" href="kgiris.php">Anihime TV</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="Odevlerim/index.php">Ödevlerim</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Hakkımızda
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="klhak.php">Hakkında</a></li>
              <li><a class="dropdown-item" href="klilet.php">İletişim </a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Kategori
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="klorku.php">Korku</a></li>
              <li><a class="dropdown-item" href="klaksiyon.php">Aksiyon</a></li>
              <li><a class="dropdown-item" href="klromantik.php">Romantizm</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hesap Bilgileri
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item"  href="#">Hoşgeldin, <?php echo $kullaniciAdi; ?>!</a></li>
              <li><a class="dropdown-item" href="cikis.php">Çıkış Yap </a></li>
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
<form action="klilet.php" method="Post" style="Margin-top:95px;">

<h1 style="Margin-left:35px;  text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px; "  > İletişim</h1>

<table>

<tr>
  <td style="color:white;">Adınız:</td>
  <td> <input style="margin-left:34px;" type="text"placeholder="Adınızı Girin" name="Kadi" id=""></td>
</tr><br>

<tr>
  <td  style="color:white;">Eposta Adresiniz:</td>
  <td><input  class="textbox" type="email" placeholder="Eposta Girin" name="epos"></td>
</tr>

<tr>
  <td  style="color:white;">Mesaj:</td>
  <td> <textarea style="margin-top:15px;" placeholder="Mesaj Girin" name="msg" id="data" rows="8" cols="70"></textarea></td>
</tr>
</table>
<br>

  <button style="margin-left:55px;" type="submit" class="btn btn-outline-light" name="buton" >Mesaj Gönder</button> 
</form>
</center>


<?php
            session_start();

            include("baglanti.php"); 

            if (isset($_POST['Kadi']) && isset($_POST['epos']) && isset($_POST['msg'])) {

                $kullanici_adi = htmlspecialchars($_POST['Kadi']); 
                $eposta = htmlspecialchars($_POST['epos']); 
                $mesaj = htmlspecialchars($_POST['msg']); 

               
                $stmt = $baglan->prepare("INSERT INTO mesaj (adi, eposta, mesaj) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $kullanici_adi, $eposta, $mesaj);

                if ($stmt->execute()) {
                    echo "Mesajınız başarıyla gönderildi!";
                    print("location:klilet.php");
                } else {
                    echo "Mesaj gönderilemedi. Lütfen tekrar deneyin.";
                }

                $stmt->close();
            }

            $baglan->close();
            ?>


</div>




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