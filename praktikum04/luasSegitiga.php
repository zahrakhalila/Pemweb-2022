<?php
    function luasSegitiga(int $alas, int $tinggi) {
        echo "MENGHITUNG LUAS SEGITIGA <br>";
        echo "Alas = " . $alas . "<br>";
        echo "Tinggi = " . $tinggi . "<br>";
        $luas = 1/2 * $alas * $tinggi;
        echo "Luas Segitiga = " . $luas;
    }

    luasSegitiga (8, 6);

?>