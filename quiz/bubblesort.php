<?php
    //Array 2D
    $array = [
        [23, 32, 54, 112], 
        [24, 61, 12, 87],
        [49, 60, 90,75]
    ];

    //Array 1D
    $array1d = [];
    foreach ($array as $arrays) {
        foreach ($arrays as $value) {
            $array1d[] = $value;
        }
    }
    print_r($array1d);
    echo "<br><hr><br>";

    //Bubble Sort Ascending 
    function bubbleSort(&$array) {
        $j = sizeof($array);
        for ($i = 0; $i < $j; $i++) {
            for ($k = 0; $k < $j - $i - 1; $k++) {
                if ($array[$k] > $array[$k+1]) {
                    $l = $array[$k];
                    $array[$k] = $array[$k+1];
                    $array[$k+1] = $l;
                }
            }
        }
    }

    $len = sizeof($array1d);
    bubbleSort($array1d);
    echo "Sorted Array Ascending by Bubble Sort" . "<br><br>";
    print_r($array1d);
    echo "<br><hr><br>";

    //Bubble Sort Descending 
    function bubbleSort1(&$array) {
        $j = sizeof($array);
        for ($i = 0; $i < $j; $i++) {
            for ($k = 0; $k < $j - $i - 1; $k++) {
                if ($array[$k] < $array[$k+1]) {
                    $l = $array[$k];
                    $array[$k] = $array[$k+1];
                    $array[$k+1] = $l;
                }
            }
        }
    }

    $len = sizeof($array1d);
    bubbleSort1($array1d);
    echo "Sorted Array Descending by Bubble Sort" . "<br><br>";
    print_r($array1d);
?>