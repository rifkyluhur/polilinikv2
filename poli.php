<?php
    include_once("koneksi.php");
?>

<!doctype html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Temu Kembali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistem Informasi Poliklinik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data Master</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="index.php?page=obat">Obat</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=registerUser">Register</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Login Sebagai Pasien</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Pasien</h6>

                <p class="card-text">Jika kamu sebagai pasien maka login disini </p>
                <a href="#" class="btn btn-primary">Login</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Login Sebagai Dokter</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Dokter</h6>

                <p class="card-text">Jika kamu sebagai dokter maka login di sini</p>
                <a href="#" class="btn btn-primary">Login</a>
              </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>