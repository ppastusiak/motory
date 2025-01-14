<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-test.css">
</head>
<body>
<div class="page">

    <div class="image">
        <img src="motor.png" alt="motocykl">
    </div>
    <div class="grid-wrapper">
        <div class="blk-1"><h1>Motocykle - moja pasja</h1></div>
        <div class="blk-2"><h2>Gdzie pojechać?</h2>
        <dl>
        <?php
                $query="SELECT nazwa,opis,poczatek,zdjecia.zrodlo FROM wycieczki LEFT JOIN zdjecia ON wycieczki.zdjecia_id=zdjecia.id;";
                $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<dt>\n";
                  echo $row['nazwa'];
                  echo ",rozpoczyna się w ";
                  echo $row['poczatek'];
                  echo "\n<a href=\"droga.php?foto=".$row['zrodlo']."\"> zobacz zdjęcie</a>\n</dt>\n";
                  echo "<dd>\n".$row['opis']."\n</dd>\n";
                }
              } else {
                echo "0 results";
              }
 
                ?>
            
                
            </dl>
        </div>
        <div class="blk-3"><h2>Co kupić?</h2>
            <ol>
                <li>Honda CBR125R</li>
                <li>Yamaha YBR125</li>
                <li>Honda VFR800i</li>
                <li>Honda CBR1100XX</li>
                <li>BMW R1200GS LC</li>
            </ol>
        </div>
        <div class="blk-4"><h2>Statystyki</h2>
            <p>Wpisanych wycieczek: 
                <?php
                $query="SELECT COUNT(*) AS Liczba FROM wycieczki;";
                $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo  $row["Liczba"];
                }
              } else {
                echo "0 results";
              }

                
                ?>
            </p>
            <p>Użytkowników forum: 200</p>
            <p>Przesłanych zdjęć: 1300</p></div>
        <div class="blk-5"><p>Stronę wykonał: 00000000000</p></div>
    </div>


</div>    

<?php
include 'disconnect.php';
?>
</body>
</html>