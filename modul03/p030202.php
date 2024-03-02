<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p030202</title>
</head>
<body>

    <table border="1">
    <?php
        // Untuk men-generate tag <tr> sebanyak 5
        for ($a = 1; $a <= 5; $a++){
            print("<tr>\n\t");
            
            // Untuk men-generate tag <td> sebanyak 6
            for($b = 1; $b <= 6; $b++){

                // Jumlah genap = warna kolom merah
                if (($a + $b) % 2 == 0) {
                    print("\t<td style=\"background: red;\">elemen $a - $b</td>\n\t");
                    continue;
                }

                // jumlah ganjil warna font merah
                print("\t<td style=\"color: red\">elemen $a - $b</td>\n\t");
            }
            print("</tr\n\t");
        }
    ?>
    </table>

</body>
</html>