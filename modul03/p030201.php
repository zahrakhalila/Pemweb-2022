<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p030201</title>
</head>
<body>

    <table border="1">
    <?php
        // untuk men-generate tag <tr> sebanyak 5
        for ($a = 1; $a <= 5; $a++){
            print("<tr>\n\t");

            // untuk men-generate tag <td> sebanyak 6
            for($b = 1; $b <= 6; $b++){
                print("\t<td>elemen $a - $b</td>\n\t");
            }
            print("</tr\n\t");
        }
    ?>
    </table>

</body>
</html>