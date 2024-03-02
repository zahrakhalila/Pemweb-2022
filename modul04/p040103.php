<?php
    function buatBintangAdv($n, $m){
        if ($m == true){
            for($a = 1; $a <= $n; $a++){
                for($c = $n; $c >= $a; $c -= 1){
                    echo "*";
                }
                echo "<br>";
            }
        }
        else{
            for($a = $n; $a > 0; $a--){
                for($b = $n; $b >= $a; $b--){
                    echo "*";
                }
                echo "<br>";
            }
        }
    }

    echo "//buatBintangAdv(4, false)";
    echo "<br>";
    buatBintangAdv(4, false);

    echo "<br> <br>";

    echo "//buatBintangAdv(5, true)";
    echo "<br>";
    buatBintangAdv(5, true);
?>