<?php
    session_start();

    if (isset($_POST['beli'])) {
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['ruang'] = $_POST['ruang'];
    }

    if (isset($_POST['reset'])) {
        session_destroy();
        header("Refresh: 0");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bioskop PTIK</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bioskop PTIK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="p0701a.php">Home</a>
                        <a class="nav-link" href="p0701b.php">Ruang 1</a>
                        <a class="nav-link" href="p0701c.php">Ruang 2</a>
                        <a class="nav-link" href="p0701d.php">Ruang 3</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="card p-3">
                    <center>
                        <h2>Halaman Lobby</h2>
                        <p>Status Pengunjung :
                            <?php
                                if ($_SESSION) {
                                    echo "Sudah membeli tiket atas nama " . $_SESSION['nama'] . " di ruang " . $_SESSION['ruang'];
                                } else {
                                    echo "Belum membeli tiket";
                                }
                            ?>
                        </p>
                        <hr>
                        <form action="" method="POST">
                            <input type="text" name="nama" placeholder="Name" required>
                            <br>
                            <label for="ruang" class="m-1">
                                <input type="radio" name="ruang" value="1" class="m-1" required>Ruang 1
                            </label>
                            <label for="ruang" class="m-1">
                                <input type="radio" name="ruang" value="2" class="m-1" required>Ruang 2
                            </label>
                            <label for="ruang" class="m-1">
                                <input type="radio" name="ruang" value="3" class="m-1" required>Ruang 3
                            </label>
                            <br>
                            <button type="submit" name="beli" value="beli" class="btn btn-success <?php ($_SESSION) ? print('disabled') : ''  ?>">Beli Tiket</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXntWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>