<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zdjęcie drogi</title>
    <style>
        .foto {
            width:80%;
            margin: 0 auto;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="foto">
    <figure>
    <?php
    $foto = $_GET['foto'];
    echo "<img src=\"".$foto.".jpg\">";
    ?>

        <figcaption>Zdjęcie drogi</figcaption>
    </figure>
    
    

    <a href="test-grid.php"> Powrót </a>
    </div>

    

</body>
</html>