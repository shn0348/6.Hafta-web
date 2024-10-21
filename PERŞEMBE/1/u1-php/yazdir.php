<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php'de formdan gelen Değerler</title>
</head>
<body>
    <?php
        $ad=$_GET['isim'];
        $soyad=$_GET['soyad'];
        echo "<h2>Formdan gelen Değerler-GET YÖNTEMİ</h2>";
        echo "Gelen Ad : " . $ad;
        echo "<br>";
        echo "Gelen Soyad : " . $soyad;
    ?>
</body>
</html>