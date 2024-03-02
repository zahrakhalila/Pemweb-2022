<?php
    function hitungDenda($tglHarusKembali, $tglKembali) {
        $besarDenda = 5000;
        
        $tglHarusKembali = strtotime($tglHarusKembali);
        $tglKembali = strtotime($tglKembali);

        $jumlahHariTerlambat = round(($tglKembali-$tglHarusKembali) / (60*60*24));

        return $jumlahHariTerlambat * $besarDenda;
    }

    echo "Besarnya denda adalah: Rp ".number_format(hitungDenda("2021-01-03", "2021-01-05"));
?>