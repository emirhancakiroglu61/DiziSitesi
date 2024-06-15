<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="" method="get">
<table>

       <tr>
        <td><input type="text" placeholder="vize gir" name="vize"></td>
       </tr> 
       <tr>
        <td> <input type="text" placeholder="odev gir" name="odev"></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="final gir" name="final"><br><br></td>
    </tr>
       
        
</table>
        <input type="submit" value="gönder"><input type="reset" value="yenile">
    </form>


    </center>
    <?php
    $vize = $_GET["vize"];
    $odev = $_GET["odev"];
    $final = $_GET["final"];
    $durum="";

    $sonuc = ($vize * 30 / 100) + ($odev * 20 / 100) + ($final * 50 / 100);

    if ($sonuc < 40 or $final < 50) {
       $durum="FF";
    } elseif ($sonuc < 46 and $sonuc >= 40) {
        $durum="DD";
    } elseif ($sonuc < 50 and $sonuc >= 46) {
        $durum="DC";
    } elseif ($sonuc < 55 and $sonuc >= 50) {
        $durum="CC";
    } elseif ($sonuc < 65 and $sonuc >= 55) {
        $durum="CB";
    } elseif ($sonuc < 72 and $sonuc >= 65) {
        $durum="BB";
    } elseif ($sonuc < 80 and $sonuc >= 72) {
        $durum="BA";
    } elseif ($sonuc < 90) {
        $durum="AA";
    }


    switch ($durum) {
        case "FF":
           $mesaj="adam olmaz";
            break;
            case "DD":
                case "Dc":
                $mesaj="kurtarma ihtimalin var";
                break;
                case "cc":
                    $mesaj="sınırları seviyorsun";
                    break;
                    case "CB":
                        case "BB":
                            case "BA":
                       $mesaj="OOO İYİ İYİ";
                        break;
                        case "AA":
                            $mesaj="süpersin";
                            break;
        
        default:
           $mesaj="hatalı not";
            break;
    }

    print("$mesaj</p>");

    ?>

    



   
</body>
</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="" method="get">
<table>

       <tr>
        <td><input type="text" placeholder="vize gir" name="vize"></td>
       </tr> 
       <tr>
        <td> <input type="text" placeholder="odev gir" name="odev"></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="final gir" name="final"><br><br></td>
    </tr>
       
        
</table>
        <input type="submit" value="gönder"><input type="reset" value="yenile">
    </form>


    </center>
    <?php
    $vize = $_GET["vize"];
    $odev = $_GET["odev"];
    $final = $_GET["final"];
    $durum="";

    $sonuc = ($vize * 30 / 100) + ($odev * 20 / 100) + ($final * 50 / 100);

    if ($sonuc < 40 or $final < 50) {
       $durum="FF";
    } elseif ($sonuc < 46 and $sonuc >= 40) {
        $durum="DD";
    } elseif ($sonuc < 50 and $sonuc >= 46) {
        $durum="DC";
    } elseif ($sonuc < 55 and $sonuc >= 50) {
        $durum="CC";
    } elseif ($sonuc < 65 and $sonuc >= 55) {
        $durum="CB";
    } elseif ($sonuc < 72 and $sonuc >= 65) {
        $durum="BB";
    } elseif ($sonuc < 80 and $sonuc >= 72) {
        $durum="BA";
    } elseif ($sonuc < 90) {
        $durum="AA";
    }


    switch ($durum) {
        case "FF":
           $mesaj="adam olmaz";
            break;
            case "DD":
                case "Dc":
                $mesaj="kurtarma ihtimalin var";
                break;
                case "cc":
                    $mesaj="sınırları seviyorsun";
                    break;
                    case "CB":
                        case "BB":
                            case "BA":
                       $mesaj="OOO İYİ İYİ";
                        break;
                        case "AA":
                            $mesaj="süpersin";
                            break;
        
        default:
           $mesaj="hatalı not";
            break;
    }

    print("$mesaj</p>");

    ?>

    



   
</body>
</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="" method="get">
<table>

       <tr>
        <td><input type="text" placeholder="vize gir" name="vize"></td>
       </tr> 
       <tr>
        <td> <input type="text" placeholder="odev gir" name="odev"></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="final gir" name="final"><br><br></td>
    </tr>
       
        
</table>
        <input type="submit" value="gönder"><input type="reset" value="yenile">
    </form>


    </center>
    <?php
    $vize = $_GET["vize"];
    $odev = $_GET["odev"];
    $final = $_GET["final"];
    $durum="";

    $sonuc = ($vize * 30 / 100) + ($odev * 20 / 100) + ($final * 50 / 100);

    if ($sonuc < 40 or $final < 50) {
       $durum="FF";
    } elseif ($sonuc < 46 and $sonuc >= 40) {
        $durum="DD";
    } elseif ($sonuc < 50 and $sonuc >= 46) {
        $durum="DC";
    } elseif ($sonuc < 55 and $sonuc >= 50) {
        $durum="CC";
    } elseif ($sonuc < 65 and $sonuc >= 55) {
        $durum="CB";
    } elseif ($sonuc < 72 and $sonuc >= 65) {
        $durum="BB";
    } elseif ($sonuc < 80 and $sonuc >= 72) {
        $durum="BA";
    } elseif ($sonuc < 90) {
        $durum="AA";
    }


    switch ($durum) {
        case "FF":
           $mesaj="adam olmaz";
            break;
            case "DD":
                case "Dc":
                $mesaj="kurtarma ihtimalin var";
                break;
                case "cc":
                    $mesaj="sınırları seviyorsun";
                    break;
                    case "CB":
                        case "BB":
                            case "BA":
                       $mesaj="OOO İYİ İYİ";
                        break;
                        case "AA":
                            $mesaj="süpersin";
                            break;
        
        default:
           $mesaj="hatalı not";
            break;
    }

    print("$mesaj</p>");

    ?>

    



   
</body>
</html>
