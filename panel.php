<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
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

<a href="admin.php">Çıkış Yap</a>


<h1 style="margin-left:40px; text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Kullanıcı Bölümü</h1>
<?php

  $sql="SELECT * FROM persons";
  $sonuc=mysqli_query($baglan,$sql);
  echo"<table width=100% border=1 style='color:white; '> ";
  echo"<tr>
  <th>kullanıcı adı:</th>
  <th>email:</th>
  <th>parola:</th>
  <th></th>
  </tr>";
  while ($satir=mysqli_fetch_array($sonuc)){
    $id=$satir[0];
      $adı=$satir[1];
      $soyadı=$satir[2];
      $tel=$satir[3];
      echo "<tr>
      <td>$adı</td>
      <td>$soyadı</td>
      <td>$tel/td>
      <td><a href=sil.php?id=$id>sil</a></td>
      </tr>";
  }
  echo "</table>";

$baglan->close();
?>
<a style="margin-left:50px; margin-top:20px;" class="btn btn-primary" href="ekle.php" role="button">Kullanıcı ekle
</a>

<h1 style="margin-left:40px; text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Dizi Bölümü</h1>

<?php
include("baglanti.php");
  $sql="SELECT * FROM dizi";
  $sonuc=mysqli_query($baglan,$sql);
  echo"<table width=100% border=1 style='color:white; '> ";
  echo"<tr>
  <th>dizi adı:</th>
  <th>dizi img:</th>
  <th></th>
  </tr>";
  while ($satir=mysqli_fetch_array($sonuc)){
    $diz_id=$satir[0];
      $imgg=$satir[1];
      $dizi_adi=$satir[2];
      
      echo "<tr>
      <td>$dizi_adi</td>
      <td>$imgg</td>
      <td><a href=dsil.php?id=$diz_id>sil</a></td>
      </tr>";
  }
  echo "</table>";

$baglan->close();
?>
<a style="margin-left:50px; margin-top:10px; margin-bottom:10px;" class="btn btn-primary" href="diziek.php" role="button">dizi ekle
</a>

<h1 style="margin-left:40px; text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Aksiyon Bölümü</h1>

<?php
include("baglanti.php");
  $sql="SELECT * FROM aksiyon";
  $sonuc=mysqli_query($baglan,$sql);
  echo"<table width=100% border=1 style='color:white; '> ";
  echo"<tr>
  <th>dizi adı:</th>
  <th>dizi img:</th>
  <th></th>
  </tr>";
  while ($satir=mysqli_fetch_array($sonuc)){
    $a_id=$satir[0];
      $img=$satir[1];
      $dizi_a=$satir[2];
      
      echo "<tr>
      <td>$dizi_a</td>
      <td>$img</td>
      <td><a href=aksil.php?id=$a_id>sil</a></td>
      </tr>";
  }
  echo "</table>";

$baglan->close();
?>
<a style="margin-left:50px; margin-top:10px; margin-bottom:10px;" class="btn btn-primary" href="akekle.php" role="button">dizi ekle
</a>


<h1 style="margin-left:40px; text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Korku Bölümü</h1>

<?php
include("baglanti.php");
  $sql="SELECT * FROM korku";
  $sonuc=mysqli_query($baglan,$sql);
  echo"<table width=100% border=1 style='color:white; '> ";
  echo"<tr>
  <th>dizi adı:</th>
  <th>dizi img:</th>
  <th></th>
  </tr>";
  while ($satir=mysqli_fetch_array($sonuc)){
    $k_id=$satir[0];
      $img=$satir[1];
      $dizi_a=$satir[2];
      
      echo "<tr>
      <td>$dizi_a</td>
      <td>$img</td>
      <td><a href=kosil.php?id=$k_id>sil</a></td>
      </tr>";
  }
  echo "</table>";

$baglan->close();
?>
<a style="margin-left:50px; margin-top:10px; margin-bottom:10px;" class="btn btn-primary" href="koekle.php" role="button">dizi ekle
</a>


<h1 style="margin-left:40px; text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Romantizm Bölümü</h1>

<?php
include("baglanti.php");
  $sql="SELECT * FROM rm";
  $sonuc=mysqli_query($baglan,$sql);
  echo"<table width=100% border=1 style='color:white; '> ";
  echo"<tr>
  <th>dizi adı:</th>
  <th>dizi img:</th>
  <th></th>
  </tr>";
  while ($satir=mysqli_fetch_array($sonuc)){
    $rm_id=$satir[0];
      $img=$satir[1];
      $dizi_a=$satir[2];
      
      echo "<tr>
      <td>$dizi_a</td>
      <td>$img</td>
      <td><a href=rmsil.php?id=$rm_id>sil</a></td>
      </tr>";
  }
  echo "</table>";

$baglan->close();
?>
<a style="margin-left:50px; margin-top:10px; margin-bottom:10px;" class="btn btn-primary" href="rmekle.php" role="button">dizi ekle
</a>


<h1 style="margin-left:40px; text-shadow: 1.5px 1.5px  #000;color: white; margin-top:20px;">Kullanıcı Mesajları</h1>
<?php

include("baglanti.php");
$sql = "SELECT * FROM mesaj";


if ($sonuc = mysqli_query($baglan, $sql)) {

  echo "<table width=100% border=1 style='color:white;'>";
  echo "<tr>
    <th>adı:</th>
    <th>eposta:</th>
    <th>mesaj:</th>
    <th></th>
  </tr>";

 
  if (mysqli_num_rows($sonuc) > 0) {
    while ($satir = mysqli_fetch_array($sonuc)) {
      $id = $satir[0];
      $ad = $satir[1];
      $epos = $satir[2];
      $mesaj = $satir[3];

      echo "<tr>
        <td>$ad</td>
        <td>$epos</td>
        <td>$mesaj</td>
        <td><a href=msil.php?id=$id>sil</a></td>
      </tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No messages found.</td></tr>";
  }

  echo "</table>";

} else {
  echo "Error: " . mysqli_error($baglan); 

}
mysqli_close($baglan);

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
</body>
</html>