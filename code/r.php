<?php

include("baglanti.php");

$sql = "SELECT dizi_a,img FROM rm";

// Execute query with error handling
$result = $baglan->query($sql);

if ($result) { // Check if query was successful

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<div id='kutu'>";
      echo "<div id='img'><a href='izle.php'><img class='img' src='" . $row["img"] . "' alt=''></a></div>";
      echo "<h4 style='color:white;'>" . $row["dizi_a"] . "</h4>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }

} else {
  echo "Error: " . $baglan->error; // Display the error message from the connection
}

$baglan->close();

?>