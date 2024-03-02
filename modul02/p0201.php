<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>
<body>
    <h1>Latihan 1</h1>
        <?php
            echo "Hello World";
        ?>
    
    <h1>Latihan 2</h1>
        <?php
            $a = '14';
            $b = '11';
            $c = $a + $b;
            echo "Hasil perhitungan adalah ", $c;
        ?>

    <h1>Latihan 3</h1>
        <?php 
            $z = ["nama" => 'agus', "nim" => 'k1424567', "alamat" => 'Solo', "bidang" => 'RPL'];
            echo $z ["nama"];
        ?>

    <h1>Latihan 4</h1>
        <?php
            $objek = new stdClass();
            $objek -> name = "Steven William";
            $objek -> age = 30;
            $objek -> city = "Kartusoro";

            $myJSON = json_encode($objek);

            echo $myJSON;
        ?>
</body>
</html>