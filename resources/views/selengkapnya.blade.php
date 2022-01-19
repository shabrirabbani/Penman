<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/StyleTugas.css" />
    <link rel="stylesheet" href="../assets/css/Style_nadia.css" />
    <link rel="shortcut icon" type="image/png" href="/assets/foto/Logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <title>Create Story</title>
    <style>
        body {
            background-image: url("../assets/foto/create-story.png");
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>



<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top py-2  " style="background-color: #8962F8;">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">
                <img src="/assets/foto/logo-penman.png" alt="logo" class="img-fluid" width="70px" height="50px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav  ms-auto ">
                    <li class="nav-item mx-0 mx-lg-5 fw-normal">
                        <a class="nav-link text-white" href="/dashboard">Home</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ $avatar }}" width="40px" height="40px">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/dashboard">See Stries</a></li>
                            <li><a class="dropdown-item" href="/createStory">Create Stories</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        </ul>
                    </div>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <div class="container">
        <br></br></br></br><br></br></br></br>
        @foreach($rows as $c)
        <strong>
            <h2 class="text-center">{{ $c['judul_cerita']}}</h2>
        </strong>
        <br></br>
        <p align=justify>{{ $c['isi_cerita'] }}</p>
        @endforeach
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>