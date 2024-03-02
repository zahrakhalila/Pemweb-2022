<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "menpanrb";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>