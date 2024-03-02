<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Pertemuan06 Kegiatan2</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light p-4 shadow shadow-sm mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pertemuan06</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "index") echo "active"; ?>" aria-current="page" href="index.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "akun") echo "active"; ?>" href="akun.php">Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "user") echo "active"; ?>" href="user.php">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>