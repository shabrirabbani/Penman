<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/daftar.css">

    <title>Penman</title>

</head>


<body style="font-family: 'Poppins', sans-serif;" background="assets/foto/back.png">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top py-2  " style="background-color: #8962F8;">
        <div class="container">
            <a class="navbar-brand" href="/index">
                <img src="assets/foto/logo-penman.png" alt="logo" class="img-fluid" width="70px" height="50px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav  ms-auto ">
                    <li class="nav-item ">
                        <a class="nav-link text-white fw-normal" aria-current="page" href="/index">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!--SignUp-->
    <div class="d-flex align-items-center min-vh-100 my-4">
        <div class="container card-login">
            <div class="text-center">
                <h2 class="fw-normal mb-5 pb-2">Sign Up</h2>

                <form class="px-5" method="post" action="/postRegister">
                    @csrf
                    <div class="mb-4">
                        <input type="nama" class="form-control style-form" placeholder="Nama" name="nama" required />
                    </div>
                    <div class="mb-4">
                        <input type="username" class="form-control style-form" placeholder="Username" name="username" required />
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control style-form" placeholder="Email" name="email" required />
                    </div>
                    <div class="mb-4">
                        <input placeholder="Birthdate" class="form-control style-form" type="text" name="birthdate" onfocus="(this.type='date')" id="date">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control style-form" placeholder="Password" name="password" required />
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control style-form" placeholder="Confirm Password" name="confirm" required />
                    </div>


                    <button type="submit" class="btn btn shadow-sm border-3 py-1 px-4 mb-5 fw-bold text-white">Daftar</button>
                    <p>Sudah punya akun? <a href="/login">Login disini</a></p>
                </form>
            </div>
        </div>
    </div>

    <!--Akhir SignUp-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>