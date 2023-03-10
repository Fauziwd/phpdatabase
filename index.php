<?php
session_start();
/* if (empty($_COOKIE['nama_login'])) {
header("Location: login.php");
} */

if ($_SESSION['nama_login'] == null) {
    header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Data</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Personal
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Info</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="keluar.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <form action="postdata.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Tulis namamu">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="NOHP" class="form-label">No HP</label>
                <input type="text" class="form-control" id="NOHP" name="nohp" placeholder="Tulis no HP">
            </div>
            <div class="mb-3">
                <p class="">Jenis Kelamin</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenkel" value="L" id="jenkel1">
                    <label class="form-check-label" for="jenkel1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenkel" value="P" id="jenkel2" checked>
                    <label class="form-check-label" for="jenkel2">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Tulis Email">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <button type="submit" class="btn btn-sm btn-info">Upload</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>