<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fachren</title>
</head>
<body>
    <?php
    for ($no = 1; $no <= 100; $no++) {
        if ($no % 2 == 0) {
            echo "$no = ";
            echo "<font style='color:blueviolet;'>Kalau yang ini bilangan genap</font><br>";
        } else {
            echo "$no = ";
            echo "<font style='color:green;'>Ini bilangan ganjil</font><br>";
        }
    }
    ?>
</body>
</html>
