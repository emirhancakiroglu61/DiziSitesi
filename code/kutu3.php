<?php

 include("baglanti.php");
$sql = "SELECT imgg, dizi_adi FROM dizi";
$result = $baglan->query($sql);

if ($result->num_rows > 0) {
  // Sonuçları döngü ile işle
  while($row = $result->fetch_assoc()) {
    echo "<div id='kutu'>";
    echo "<div id='img'><a href='izle.php'><img class='img' src='" . $row["imgg"] . "' alt=''></a></div>";
    echo "<h4 style='color:white;'>" . $row["dizi_adi"] . "</h4>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$baglan->close();

?>