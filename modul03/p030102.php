<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p030102</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 6; $i++) {
            if ($i%2==0) {
                echo("<h$i style=\"color:red;\">Mahasiswa $i</h$i>\n\t");
                continue;
            }
            echo "<h$i> Mahasiswa $i </h$i>";
        }
    ?>
</body>
</html>