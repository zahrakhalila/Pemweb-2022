<?php
    $data1 = $_GET;

    $operator = $data1['operasi'];
    $bil1 = $data1['bil1'];
    $bil2 = $data1['bil2'];
    $hasil = NULL;

    switch ($operator) {
        case "+":
            $hasil = $bil1 + $bil2;
            break;
        
        case "-":
            $hasil = $bil1 - $bil2;
            break;
            
        case "x":
            $hasil = $bil1 * $bil2;
            break;
        
        case "/":
            if ($bil1 == 0) {
                $hasil = 0;
            } else if ($bil2 == 0) {
                $hasil = "INFINITY => DIVISION BY 0";
            } else {
                $hasil = $bil1 / $bil2;
            }
            
            break;
        
        case "^":
            $hasil = $bil1 ** $bil2;
            break;
        
        default:
            echo "MAAF OPERATOR BELUM ANDA MASUKKAN";
    }

    if ($hasil || $hasil === 0) {
        echo ("HASIL"."<br><br>");
        echo ("$bil1 $operator $bil2 = $hasil");
    }
?>
