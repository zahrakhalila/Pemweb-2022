<?php 
    function hitungGaji($nama, $jabatan, $kinerja){
        $nomGaji = array("junior" => 4000000,
                        "senior" => 6000000,
                        "chief" => 8000000,
                        "manager" => 10000000);

        switch ($kinerja){
            case $kinerja <= 50 :
                $gaji = 50 / 100 * $nomGaji[$jabatan];
                break;
            
            case $kinerja <= 60 :
                $gaji = 60 / 100 * $nomGaji[$jabatan];
                break;
            
            case $kinerja <= 70 :
                $gaji = 70 / 100 * $nomGaji[$jabatan];
                break;

            case $kinerja <= 80 :
                $gaji = 80 / 100 * $nomGaji[$jabatan];
                break;

            case $kinerja <= 90 :
                $gaji = 90 / 100 * $nomGaji[$jabatan];
                break;
            
            case $kinerja <= 100 :
                $gaji = $nomGaji[$jabatan];
                break;
        }
        echo ("Gaji $nama dengan jabatan $jabatan dan skor kinerja $kinerja adalah sebesar Rp. ".number_format($gaji));
    }

    $data = $_POST;

    hitungGaji($data["nama"], $data["jabatan"], $data["kinerja"]);

    
?>