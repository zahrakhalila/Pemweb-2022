<?php
    function buatBintang($n){
        for($a = $n; $a > 0; $a--){
            for($b = $n; $b >= $a; $b--){
                echo "*";
            }
            echo "<br>";
        }
    }

    buatBintang(4);
    echo "<br> <br>";
    buatBintang(5);

?>