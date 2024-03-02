<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "menpanrb";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function registrasi($data)
    {
        global $koneksi;
        $username = strtolower($data["username"]);
        $password = mysqli_escape_string($koneksi, $data["password"]);
        $password2 = mysqli_escape_string($koneksi, $data["password2"]);
        $nama_usaha = $data["nama_usaha"];
        $alamat_usaha = $data["alamat_usaha"];
        $gol_usaha = $data["gol_usaha"];
        $modal_usaha = $data["modal_usaha"];
        $nama_pemilik = $data["nama_pemilik"];
        $tempat_lahir = $data["tempat_lahir"];
        $tanggal_lahir = $data["tanggal_lahir"];
        $telepon = $data["telepon"];
        $email = $data["email"];
        $foto_ktp = $data["foto_ktp"];
        $foto_npwp = $data["foto_npwp"];

        $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('username sudah terdaftar')
                </script>
            ";
            return false;
        }

        if ($password != $password2) {
            echo "
                <script>
                    alert('konfirmasi password tidak sama')
                </script>
            ";
            return false;
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT); //tambah parameter PASSWORD_DEFAULT
            $result = mysqli_query($koneksi, "INSERT INTO users Values ('', '$username', '$password', '$nama_usaha', '$alamat_usaha', '$gol_usaha', '$modal_usaha', '$nama_pemilik', '$tempat_lahir', '$tanggal_lahir', '$telepon', '$email', '$foto_ktp', '$foto_npwp')");

            return mysqli_affected_rows($koneksi);
        }
    }

?>