<?php
include 'connect.php';
$query="SELECT COUNT(*) AS Liczba_wierszy FROM dane;";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
         echo "0 results";
         exit();
  }
include 'disconnect.php';
?>