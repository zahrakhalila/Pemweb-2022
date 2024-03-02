<?php

    session_start();

    $id = $_SESSION["id"];
    $nama_usaha = $_SESSION["nama_usaha"];

    if (!isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }

    require 'functions.php';

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>

    <div class="container mt-4">
        <h1>Halo, <?php echo $nama_usaha; ?></h1>

        <?php
            global $koneksi;
            $sql = "SELECT * FROM users WHERE nama_usaha = '$nama_usaha'";
            $result = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<table class="table mt-4">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">#</th>';
                        echo '<th scope="col">Nama Usaha</th>';
                        echo '<th scope="col">Alamat Tempat Usaha</th>';
                        echo '<th scope="col">Golongan Usaha</th>';
                        echo '<th scope="col">Modal Usaha</th>';
                        echo '<th scope="col">Nama Pemilik</th>';
                        echo '<th scope="col">Tempat Lahir</th>';
                        echo '<th scope="col">Tanggal Lahir</th>';
                        echo '<th scope="col">No Telepon</th>';
                        echo '<th scope="col">Email</th>';
                        echo '<th scope="col">Scan KTP</th>';
                        echo '<th scope="col">Scan NPWP</th>';
                        echo '<th scope="col"></th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<th scope="row">1</th>';
                        echo '<td>'.$row["nama_usaha"].'</td>';
                        echo '<td>'.$row["alamat_usaha"].'</td>';
                        echo '<td>'.$row["gol_usaha"].'</td>';
                        echo '<td>'.$row["modal_usaha"].'</td>';
                        echo '<td>'.$row["nama_pemilik"].'</td>';
                        echo '<td>'.$row["tempat_lahir"].'</td>';
                        echo '<td>'.$row["tanggal_lahir"].'</td>';
                        echo '<td>'.$row["telepon"].'</td>';
                        echo '<td>'.$row["email"].'</td>';
                        echo '<td>'.$row["foto_ktp"].'</td>';
                        echo '<td>'.$row["foto_npwp"].'</td>';
                    echo '</tr>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';


                }
            } else {
                echo "0 results";
            }

            mysqli_close($koneksi);

        ?>

        <!-- button logout -->
        <a href="logout.php" class="btn btn-primary">Logout</a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </div>

</body>

</html>