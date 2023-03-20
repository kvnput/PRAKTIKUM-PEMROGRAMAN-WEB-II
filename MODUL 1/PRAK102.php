<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Web 2 - Nomor 2</title>
</head>
Hasil volume dari bangun ruang prisma alas segitiga adalah</br>
<body>
    <?php
        $tinggiPrisma = 5.4;
        $tinggiSegitiga = 12;
        $panjangAlas = 7.9;
        $luasAlas = 1/2 * $panjangAlas * $tinggiSegitiga;

        $volumePrisma = $luasAlas * $tinggiPrisma;
        echo $volumePrisma . " m3";
    ?>
</body>
</html>