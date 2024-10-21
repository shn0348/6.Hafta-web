<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php'de formdan gelen Değerler</title>
</head>
<body>
    <?php
        $ad=$_POST['isim'];
        $soyad=$_POST['soyad'];
        echo "<h2>Formdan gelen Değerler-POST yöntemi</h2>";
        echo "Gelen Ad : " . $ad;
        echo "<br>";
        echo "Gelen Soyad : " . $soyad;
    ?>
</body>
</html>