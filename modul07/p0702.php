<?php
    if (isset($_COOKIE['remember'])) {
        $bg = $_COOKIE['background_color'];
        $fs = $_COOKIE['font_size'];
    } else {
        $bg = "#4e79a0";
        $fs = "15px";
    }

    if (isset($_POST['submit'])) {
        $bg = $_POST['background_color'];
        $fs = $_POST['font_size'];
    }

    if (isset($_POST['remember'])) {
        setcookie('background_color', $_POST['background_color'], time() + (60 * 60 * 24));
        setcookie('font_size', $_POST['font_size'], time() + (60 * 60 * 24));
        setcookie('remember', $_POST['remember'], time() + (60 * 60 * 24));
    }

    if (isset($_POST['hapus_cookie'])) {
        foreach ($_COOKIE as $k => $v) {
            setcookie($k, "", time() - (60 * 60 * 24));
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bermain dengan Tema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        :root {
            --background_color: <?= $bg  ?>;
            --font_size: <?= $fs  ?>;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container">
        <form method="post" action="">
            <h3>SETTING</h3>
            <div>Background</div>
            <select name="background_color">
                <?php
                    $colors = array('#4e79a0' => 'Biru', '#75b14a' => 'Hijau', '#d06353;' => 'Merah');
                    foreach ($colors as $name => $value) {
                        $selected = $name == $_POST['background_color'] || $name == $_COOKIE['background_color'] ? 'SELECTED="SELECTED"' : '';
                        echo '<option value="' . $name . '"' . $selected . '>' . $value . '</option>';
                    }
                ?>
            </select>

            <div>Font Size</div>
            <select name="font_size">
                <?php
                    $font_sizes = array('15px', '17px', '20px', '25px');
                    foreach ($font_sizes as $value) {
                        $selected = $value == $_POST['font_size'] || $value == $_COOKIE['font_size'] ? 'SELECTED="SELECTED"' : '';
                        echo '<option value="' . $value . '"' . $selected . '>' . $value . '</option>';
                    }
                ?>
            </select>

            <div class="remember">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember"> Remember</label>
            </div>
            
            <div class="tombol">
                <input type="submit" class="button blue" name="submit" value="Simpan" />
                <input type="submit" class="button red" name="hapus_cookie" value="Hapus Cookie" />
            </div>
        </form>
    </div>
</body>

</html>