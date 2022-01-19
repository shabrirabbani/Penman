<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="shortcut icon" type="image/png" href="/assets/foto/Logo.png" />

    <title>Penman</title>

</head>


<body style="font-family: 'Poppins', sans-serif;" background="assets/foto/background-dash.png">

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

    <!--Jumbotron-->
    <div class="jumbotron" style="background-image :url(assets/foto/jumbotron.png);">
        <div class="container">
            <br>
            <h1 class="display-4 py-2 text-white fw-normal">Selamat Datang</h1>
            <p class="lead text-white">Penman merupakan situs yang cocok bagi Anda untuk mengungkapkan apapun yang Anda inginkan dengan
                tetap menjaga privasi Anda. Cerita yang akan anda unggah akan ditampilkan secara anonim. So, don't worry
            </p>
            <a class=" btn-ungu btn shadow-sm border-5 py-2 px-3 mb-2 fw-medium text-white" href="/createStory" role="button">Tulis Ceritamu</a>

        </div>
    </div>
    <!--Akhir Jumbotron-->

    <!--Isi-->
    <div class="container">
        <br>
        <h2 class="fw-medium ">Other Stories</h2>
        <br></br>
        @foreach($cerita as $c)
        <div class="row">
            <div class="card mb-4">
                <div class="card-body-top">
                    <h5 class="card-title">{{ $c['judul_cerita']}}</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button onclick="myFunction()" id="myBtn" class="btn me-5 rounded-pill" type="button" style="background-color: #8962F8; color:white;"><a href="/selengkapnya/{{ $c['id'] }}" style="color:white">Selengkapnya</a></button>
                    </div></br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br><br><br><br><br>
    <!-- Akhir Isi-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>