<?php
include("baglanti.php");


$sqll = "SELECT imge, dizi_adi FROM oy_alan";
$result = $baglan->query($sqll);

if ($result->num_rows > 0) {
  // Sonuçları döngü ile işle
  while($row = $result->fetch_assoc()) {
    echo "<div id='kutu'>";
    echo "<div id='img'><a href='izle.php'><img class='img' src='" . $row["imge"] . "' alt=''></a></div>";
    echo "<h4 style='color:white;'>" . $row["dizi_adi"] . "</h4>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$baglan->close();

?>