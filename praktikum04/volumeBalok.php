<?php
    function volumeBalok(int $panjang, int $lebar, int $tinggi) {
        echo "MENGHITUNG VOLUME BALOK <br>";
        echo "panjang = " . $panjang . "<br>";
        echo "lebar = " . $lebar . "<br>";
        echo "tinggi = " . $tinggi . "<br>";
        $volume = ($panjang * $lebar * $tinggi);
        echo "Volume Balok = " . $volume;
    }

    volumeBalok (6, 4, 2);

?>