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

    //Insertion Sort Ascending
    function insertionSort(&$array, $n) {
        for ($i=0; $i < $n; $i++) {
            $curr = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $curr < $array[$j]) {
                $array[$j + 1] = $array[$j];
                $array[$j] = $curr;
                $j = $j - 1;
            }
        }
    }

    $n = sizeof($array1d);
    insertionSort($array1d, $n);
    echo "Sorted Array Ascending by Insertion Sort" . "<br><br>";
    print_r($array1d);
    echo "<br><hr><br>";

    //Insertion Sort Descending
    function insertionSort1(&$array, $n) {
        for ($i=0; $i < $n; $i++) {
            $curr = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $curr > $array[$j]) {
                $array[$j + 1] = $array[$j];
                $array[$j] = $curr;
                $j = $j - 1;
            }
        }
    }

    $n = sizeof($array1d);
    insertionSort1($array1d, $n);
    echo "Sorted Array Descending by Insertion Sort" . "<br><br>";
    print_r($array1d);
?>