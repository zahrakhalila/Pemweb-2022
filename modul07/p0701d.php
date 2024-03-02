<?php
    session_start();

    if ($_SESSION) {
        $nama = $_SESSION['nama'];
        $ruang = $_SESSION['ruang'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ruang 1</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="p0701a.php">Bioskop PTIK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="p0701a.php">Home</a>
                        <a class="nav-link" href="p0701b.php">Ruang 1</a>
                        <a class="nav-link" href="p0701c.php">Ruang 2</a>
                        <a class="nav-link active" href="p0701d.php">Ruang 3</a>
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
                        <h2>Ruang Bioskop 3</h2>
                        <?php
                            if ($_SESSION && $ruang == 3) {
                                echo ("<p>Hai $nama selamat menikmati</p>");
                        ?>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HdZdxocqzq4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            <form action="p0701a.php" method="post">
                                <button class="btn btn-danger" type="submit" name="reset" value="reset">Keluar</button>
                            </form>
                        <?php
                            } else {
                                echo "<h2>Maaf, anda tidak diizinkan masuk ke ruangan ini</h2>";
                            }
                        ?>
                    </center>
                </div>
            </div>
        </div>
    </main>
</body>

</html>