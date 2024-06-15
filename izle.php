<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
#menu ul li 
{
list-style-type: none;
}
#menu ul li a
{
 text-decoration: none;
 color:white ;
display: block;
width:226px ;
 text-align: justify;
 background-color: #31363F;
 font-size: 24px;
}
#menu ul li a:hover
{
 border-bottom:4px solid black ;
 border-top:4px solid black ;
 background-color: grey;
}
#altbar
{
    margin-top: 0px;
    margin-bottom: 20px;
    width: 100%;
    min-height: 200px;
    background-color:#222831 ;
}

#altbar ul li
{
   list-style-type: none;
}
#altbar ul li a
{
    text-decoration: none;
    display: block;
    background-color: #222831;
   
}
        </style>
</head>
<body>







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
            <a class="nav-link text-light" href="kayıt.php">Kayıt Ol </a>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Kategori
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ko.php">Korku</a></li>
              <li><a class="dropdown-item" href="ak.php">Aksiyon</a></li>
              <li><a class="dropdown-item" href="rm.php">Romantizm</a></li>
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

<iframe style="border:4px solid black; margin: bottom 0px;" width="100%" height="415" src="https://www.youtube.com/embed/9aS-EgdAq6U?si=lBRvYs30W2t7LWLX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


<div id="altbar">

<u style="color:white;"><h1 style=" margin-left: 10px; text-shadow: 1.5px 1.5px  #000;color: white; font-size:20px; margin-top:20px;">Diğer Videolar</h1> </u>
    <ul>
        <li><a href="#">Tau Video</a></li>
        <li><a href="#">Sibnet</a></li>
        <li><a href="#">Doodstream</a></li>
       


</div>


</div>




<div style="clear:both;"></div>
<!---------menu kısmı---------->

<div id="menu">

<center>
    <h1 style=" text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Bölümler</h1> 
    <ul>
        <li><a href="#">Bölüm 1</a></li>
        <li><a href="#">Bölüm 2</a></li>
        <li><a href="#">Bölüm 3</a></li>
        <li><a href="#">Bölüm 4</a></li>
        <li><a href="#">Bölüm 5</a></li>
        <li><a href="#">Bölüm 6</a></li>
        <li><a href="#">Bölüm 7</a></li>
        <li><a href="#">Bölüm 8</a></li>
        <li><a href="#">Bölüm 9</a></li>
        <li><a href="#">Bölüm 10</a></li>
    </ul>

</center>


</div>

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
</body>
</html>