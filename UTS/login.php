<?php
    session_start();
    
    $char = strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 4));
    $str = rand(1, 7) . rand(1, 7) . $char;
    $_SESSION['captcha_id'] = $str;

    require 'functions.php';

    if (isset($_POST["login"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

        if (mysqli_num_rows($result)) {

            $rows = mysqli_fetch_assoc($result);
            $_SESSION["id"] = $rows["id"];
            $_SESSION["nama_usaha"] = $rows["nama_usaha"];

            //langsung verify
            if (password_verify($password, $rows["password"])) {
                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            }
        }

        if ($_SESSION = true) {
            header("Location: index.php?id=$rows[id]");
        }
        $error = true;
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        <div class="container-fluid container-center" style="padding-top: 10px; align-items: center">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h2 class="card-title text-center">Login User</h2>
                    <br>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 col-form-label">Username :</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password :</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
                        </div>
                    </div>
                    <?php if (isset($error)) : ?>
                        <p style="color:red; font-style:italic;">username atau password salah</p>
                    <?php endif ?>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">
                            <?php echo $_SESSION['captcha_id']; ?><br>
                        </label>
                        <label class="form-label">Captcha :</label>
                        <div class="col-sm-8">
                            <input type="text" name="captcha" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="checkbox">
                            <label for="setcookie">
                                <input type="checkbox" name="setcookie" value="true" id="setcookie"> Remember me
                            </label>
                        </div>
                        <div class="form" style="display: grid; grid-template-columns: 1fr; grid-gap: 10px;">
                            <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Login</button>
                        </div>
                        <div class="checkbox">
                            Don't have an account? <a href="registrasi.php" style="text-decoration: none;" class="link-danger">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>