<?php
    function hitungGaji($gol, $masaKerja) {
        if ($gol == "A") {
            if ($masaKerja < 10) {
                $gaji = 5000000;
            } 
            else {
                $gaji = 7000000;
            }
        }
        if ($gol == "B") {
            if ($masaKerja < 10) {
                $gaji = 6000000;
            } 
            else {
                $gaji = 8000000;
            }
        }
    return $gaji;
    }

    echo "Gajinya adalah Rp. ".number_format(hitungGaji("A", 9));
    echo "<br>";
    echo "Gajinya adalah Rp. ".number_format(hitungGaji("A", 15));
    echo "<br>";
    echo "Gajinya adalah Rp. ".number_format(hitungGaji("B", 5));
    echo "<br>";
    echo "Gajinya adalah Rp. ".number_format(hitungGaji("B", 13));
?>