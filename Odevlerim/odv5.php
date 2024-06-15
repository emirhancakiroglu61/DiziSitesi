<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arabalar=array("Honda","Toyota","Mazda","Nissan");
    
    print("<h3> dizi örnekleri </h3>");
echo"<pre>";
print_r($arabalar);
echo"</pre>";
print($arabalar[2]);

$uretici=array( "Honda"=>"japonya","Toyota"=>"japonya","Mazda"=>"japonya","Nissan"=>"japonya");

echo"<pre>";
print_r($uretici);
echo"</pre>";
print($uretici["Mazda"]);

$uretim=array(
"2005"=>array("buğday"=>145,"arpa"=>90,"mısır"=>210,"tütün"=>55),
"2006"=>array("buğday"=>145,"arpa"=>60,"mısır"=>120,"tütün"=>145),
"2007"=>array("buğday"=>145,"arpa"=>45,"mısır"=>135,"tütün"=>121),
"2008"=>array("buğday"=>145,"arpa"=>120,"mısır"=>140,"tütün"=>152),
"2009"=>array("buğday"=>145,"arpa"=>34,"mısır"=>110,"tütün"=>63));
echo"<pre>";
print_r($uretim);
echo"</pre>";




    ?>
</body>
</html>