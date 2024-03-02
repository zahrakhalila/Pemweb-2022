<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA UKURAN TABUNG</title>
    <style>
        h1 {
            text-align: center;
        }

        div {
            display: flex;
            margin: auto;
            justify-content: center;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            border: 2px light blue;
        }

        table td {
            padding: 0 0 0 20px;
        }

        table tr,td,th {
            border-color: blue;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>DATA UKURAN TABUNG</h1>
    <div>
        <table border="1">
            <tr>
                <th>NAMA TABUNG</th>
                <th>DIAMETER</th>
                <th>TINGGI</th>
                <th>LUAS</th>
            </tr>
            <?php 
                
                // variable untuk meyimpan data tabung dalam bentuk array
                $data = array(  "A" => array("d" => 10, "t" => 30),
                                "B" => array("d" => 15, "t" => 34),
                                "C" => array("d" => 8.5, "t" => 27.8),
                                "D" => array("d" => 12.8, "t" => 17.56),
                                "E" => array("d" => 13.125, "t" => 15.7)
                );

                // Looping untuk membuat tr dan td :)
                // \n = newline || \t = tab
                foreach($data as $kData => $vData){
                    print("<tr>");
                    print("\n\t\t\t <td> $kData </td>");
                    foreach($vData as $v){
                        print("\n\t\t\t <td> $v </td>");
                    }
                    print("\n\t\t\t <td> <a href=\"hitungluas.php?n=".$kData."&d=".$vData['d']."&t=".$vData['t']."\">view</a> </td>");
                    print("\n\t\t </tr> \n\t\t");
                }
            ?>
        </table>
    </div>
</body>
</html>