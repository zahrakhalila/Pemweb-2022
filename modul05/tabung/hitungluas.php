<?php 
    $data = $_GET;

    $phi = 3.14;

    $r = 1/2 * $data['d'];

    $luas = 2 * $phi * $r * ($r + $data['t']);

    print("Luas tabung ".$data['n']." dengan diameter ".$data['d']." dan tinggi ".$data['t']." adalah ".$luas." satuan luas");
?>