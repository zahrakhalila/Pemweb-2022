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

    //Quick Sort Ascending
    function quickSort(&$array, $left, $right) {
        if ($left < $right) { 
          $pivot = partition($array, $left, $right);
          quickSort($array, $left, $pivot-1);
          quickSort($array, $pivot+1, $right);
        }
    }

    function partition(&$array, $left, $right) {
        $i = $left;
        $pivot = $array[$right];
        for($j = $left; $j <= $right; $j++) {
            if($array[$j] < $pivot) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
                $i++;
            }
        }
      
        $temp = $array[$right];
        $array[$right] = $array[$i];
        $array[$i] = $temp;
        return $i;
    }

    $n = sizeof($array1d);
    quickSort($array1d, 0, $n-1);
    echo "Sorted Array Ascending by Quick Sort" . "<br><br>";
    print_r($array1d);
    echo "<br><hr><br>";

    //Quick Sort Descending
    function quickSort1(&$array, $left, $right) {
        if ($left < $right) { 
          $pivot1 = partition1($array, $left, $right);
          quickSort1($array, $left, $pivot1-1);
          quickSort1($array, $pivot1+1, $right);
        }
    }

    function partition1(&$array, $left, $right) {
        $i = $left;
        $pivot1 = $array[$right];
        for($j = $left; $j <= $right; $j++) {
            if($array[$j] > $pivot1) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
                $i++;
            }
        }
      
        $temp = $array[$right];
        $array[$right] = $array[$i];
        $array[$i] = $temp;
        return $i;
    }

    $n = sizeof($array1d);
    quickSort1($array1d, 0, $n-1);
    echo "Sorted Array Descending by Quick Sort" . "<br><br>";
    print_r($array1d);
?>