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



<h1 style="Margin-left:15px;  text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px; "  > Hakkımızda</h1>

<p style="color:white;    font-family: Arial, Helvetica, sans-serif; font-size: 17px; text-align: justify; margin-left:12px;">
Anihime TV Türkçe anime bilgileri bulunduran bir web sitesidir.

Anihime TV 'te insanlar anime veya bölüm hakkında video paylaşabilir , kendilerine özgü listeler oluşturabilir ve bunları başkalarıyla paylaşabilirler.

Anihime TV 'te mangaka , ses sanatçıları ve daha fazlasına erişebilirsiniz.

 

Tüm veriler myanimelist, themoviedb, imdb, anlist ve de kendi katkılarımızın derlenmesiyle oluşmuştur. Anihime TV 'te tüm bölümlerin kısa açıklamaları, çıkış tarihleri ve görselleri kaydedilir.

Size en konforlu gezinti olanağı sunmak asıl amacımızdır. Rahatsız edici reklam kullanmayız ve adblock eklentisi kullanmanızı teşvik ederiz. Amacımız para kazanmak değil kendimiz ve siz kullanıcılarımız için rahat bir gezinti ortamı oluşturmaktır.

Anihime TV 'te bölümlerde kaldığınız süreler hesaplanır ve biraz da olsa kaldığınız yer hakkında bilgi edinmeniz sağlanır. İzlediğiniz videolar öne çıkartılır ve izlemedikleriniz geriye düşer. Bu sayede her zaman çalışan videolar ön planda olur.

Anihime TV  mobil uygulaması sayesinde en rahat şekilde gezebilir videoları izleyebilir ve indirebilirsiniz. Ayrıca izleme listenize eklediğiniz animelerin yeni bölümlerinden anında haberdar olabilirsiniz.

Uygulamamızdaki PIP Modu sayesinde telefonunuzda gezinirken bir yandan anime izleyebilirsiniz. Tüm desteklenen videolarda kaldığınız yerden devam edebilir ve alternatif değiştirdiğinizde dahi kaldığınız yeri kaybetmezsiniz.

Anihime TV 'te bir animenin tüm sezonlarını, özel bölümlerini tek çatı altında birleştiriyor, erişimi kolaylaştırıyor ve karışıklığı önlüyoruz. OVA ve Filmleri ise animeye bağlı birer film olarak kaydediyor ve sunuyoruz.

 

Sitemizdeki videoların hepsi bize ait değildir. Kendi çevirdiğimiz seriler olsa da çoğunluğu bağımsız veya çevirmen grupları tarafından gönüllülük esasıyla özenle çevrilmiştir. Animelerin çevrilmesi, emek isteyen bir süreçtir. Öyle ki 20 dakikalık kısa bir bölümün sunulması bile saatleri alabilir. Bu yüzden lütfen çevirmenlere teşekkür etmeyi, onları gazlamayı ve onların web sitelerini ziyaret etmeyi unutmayınız.


</p>


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