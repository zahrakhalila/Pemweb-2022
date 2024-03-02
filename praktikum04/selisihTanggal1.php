<?php
    function selisihTanggal1($tanggal){
        $tanggal1 = time();
        $hariIni = date("Y-m-d", time());
        echo "Selisih hari dari tanggal " . $hariIni . " ke tanggal " . $tanggal . " adalah ";
        $tanggal2 = strtotime($tanggal);
        $selisih = $tanggal1 - $tanggal2;
        echo round($selisih / (60 * 60 * 24));
    }

    selisihTanggal1("2020-02-15");

?>