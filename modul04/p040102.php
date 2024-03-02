<?php
    function buatBintangReverse($n){
        for($a = 1; $a <= $n; $a++){
            for($c = $n; $c >= $a; $c -= 1){
                echo "*";
            }
            echo "<br>";
        }
    }

    buatBintangReverse(4);
?>