<?php

 include("baglanti.php");
$sql = "SELECT img, dizi_ad FROM son_eklenen";
$result = $baglan->query($sql);

if ($result->num_rows > 0) {
  // Sonuçları döngü ile işle
  while($row = $result->fetch_assoc()) {
    echo "<div id='kutu'>";
    echo "<div id='img'><a href='izle.php'><img class='img' src='" . $row["img"] . "' alt=''></a></div>";
    echo "<h4 style='color:white;'>" . $row["dizi_ad"] . "</h4>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$baglan->close();

?>