<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formcevap.php" method="get">

<fieldset>

  <legend>  Kişisel Bilgiler</legend>  <br><br>


<input type="text" placeholder="adınız" id="ad"><br><br>
<input type="text"  placeholder="soyadınız" id="soyad">


</fieldset>



<fieldset>

<legend>  Kişisel Bilgiler  </legend> <br><br>


<input type="email" placeholder="mail adresiniz" id="mail"><br><br>
<input type="password"  placeholder="şifreniz" id="sifre">


</fieldset>



<fieldset>

<legend>  İlgi alanları </legend> <br><br>


<input type="text" placeholder="Temel Alan" id="ad"><br><br>

<fieldset>
<legend> Hobiler </legend>  <br> <br>
<input type="checkbox" name="" id=""> Kitap Okumak   <br>
<input type="checkbox" name="" id=""> Sinema <br>
<input type="checkbox" name="" id=""> Tiyatro<br>


</fieldset>


</fieldset>
<fieldset>
<legend> sınıf </legend> <br>

<input type="radio" name="sınıf" id="s1"> 9.sınıf<br>
<input type="radio" name="sınıf" id="s2">10.sınıf<br>
<input type="radio" name="sınıf" id="s3">11.sınıf<br>
<input type="radio" name="sınıf" id="s4">12.sınıf<br>


</fieldset>
<fieldset>

<legend>talep edilen proje ödevleri </legend><br>

<select>
<option value="">proje1</option>
<option value="">proje2</option>
<option value="">proje3</option>
<option value="">proje4</option>
<option value="">proje5</option></select>


</fieldset>
<fieldset>
    <legend>Sosyal Medya</legend><br>


    <form action="">

<select name="language" id="selectID"  size="3" multiple>
<option value="">twitter</option>
<option value="">facebook</option>
<option value="">instegram</option>

</select>
</form>
                        

</fieldset>




    </form>
</body>
</html>