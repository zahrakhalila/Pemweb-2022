<?php
    function selisihTanggal($hari) {
        $hariIni = date("d-m-Y");
        echo $hari . " hari ke depan dari tanggal " . $hariIni . " adalah ";
        $selisih = " + $hari day";
        echo date("d-m-Y", strtotime($hariIni . $selisih));
    }

    selisihTanggal(18);
?>