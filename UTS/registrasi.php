<?php

    require 'functions.php';

    if (isset($_POST["registrasi"])) {

        $password = $_POST["password"];

        if (strlen($password) < 8) {
            echo '
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
            <p class="fs-3">Password kurang dari 8</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
        } else {
            if (registrasi($_POST) > 0) {
                echo "
                <script>
                    alert('Registrasi berhasil');
                    document.location.href = 'login.php';
                </script>
                ";
            } else {
                echo mysqli_error($koneksi);
            }
        }
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

    <title>Registrasi User</title>
</head>

<body>
    <form action="" method="POST">
        <div class="container-fluid container-center" style="padding-top: 10px; align-items: center">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h2 class="card-title text-center">Registrasi User</h2>
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
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Repeat Password :</label>
                        <div class="col-sm-8">
                            <input type="password" name="password2" class="form-control" placeholder="Repeat Password" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_usaha" class="col-sm-3 col-form-label">Nama Usaha :</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_usaha" class="form-control" placeholder="Nama Usaha" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat_usaha" class="col-sm-3 col-form-label">Alamat Tempat Usaha :</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat_usaha" class="form-control" placeholder="Alamat Usaha" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gol_usaha" class="col-sm-3 col-form-label">Golongan Usaha :</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gol_usaha" id="mikro" value="Mikro">
                                <label class="form-check-label" for="mikro">
                                    Mikro
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gol_usaha" id="kecil" value="Kecil">
                                <label class="form-check-label" for="kecil">
                                    Kecil
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gol_usaha" id="menengah" value="Menengah">
                                <label class="form-check-label" for="menengah">
                                    Menengah
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="modal_usaha" class="col-sm-3 col-form-label">Modal Usaha :</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="modal_usaha" id="bank" value="Bank">
                                <label class="form-check-label" for="bank">
                                    Bank
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="modal_usaha" id="koperasi" value="Koperasi">
                                <label class="form-check-label" for="koperasi">
                                    Koperasi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="modal_usaha" id="bantuan_sosial" value="Bantuan Sosial">
                                <label class="form-check-label" for="bantuan_sosial">
                                    Bantuan Sosial
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="modal_usaha" id="lainnya" value="Lainnya">
                                <label class="form-check-label" for="lainnya">
                                    Lainnya
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_pemilik" class="col-sm-3 col-form-label">Nama Pemilik :</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama Pemilik" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir :</label>
                        <div class="col-sm-8">
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                        <div class="col-sm-8">
                            <input type="date" name="tanggal_lahir" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-3 col-form-label">Telepon :</label>
                        <div class="col-sm-8">
                            <input type="text" name="telepon" class="form-control" placeholder="No. Telepon" onkeypress="return hanyaAngka(event)" maxlength="13" required autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <label for="foto_ktp" class="col-sm-3 col-form-label">Scan KTP</label><br>
                    <input type="file" class="form-control-file mt-2 mb-1" name="foto_ktp"><br>
                    <small>wajib png/jpg/png</small><br>

                    <label for="foto_npwp" class="col-sm-3 col-form-label">Scan NPWP</label><br>
                    <input type="file" class="form-control-file mt-2 mb-1" name="foto_npwp"><br>
                    <small>wajib png/jpg/png</small>
                    
                    <div class="mb-3 row">
                        <div class="form" style="display: grid; grid-template-columns: 1fr; grid-gap: 10px;">
                            <button class="w-100 btn btn-lg btn-primary" name="registrasi" type="submit">Registrasi</button>
                        </div>
                        <div class="checkbox">
                            Already have an account? <a href="login.php" style="text-decoration: none;" class="link-primary">Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>