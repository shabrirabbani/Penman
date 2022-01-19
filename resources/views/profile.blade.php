<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/StyleTugas.css" />
    <link rel="stylesheet" href="../assets/css/profile.css" />
    <link rel="shortcut icon" type="image/png" href="../assets/foto/Logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
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

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="user-photo">
            <img src="{{ $avatar }}" width="80px">
        </div>
        <div class="username">
            @<input type="text" class="border-0 bg-0" value="{{ $username }}" style="background: transparent; color:white;">
        </div>
        <div class="profile profile-card position-absolute top-50 translate-middle-y mx-5" style="background: transparent">
            <br>
            <br>
            <br>
            <br>
            <ul class="list list-group list-group-flush bg-transparent">
                <li class="list-group-item bg-transparent">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $nama }}</li>
                <li class="list-group-item bg-transparent">Birthday Date : {{ $birthdate }}</li>
                <li class="list-group-item bg-transparent">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $email }}</li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div id="container">
        <div class="tittle">
            <p> Your Stories </p>
        </div>
        @foreach($cerita as $c)
        <div class="stories">
            <div class="card mx-auto rounded-5 mb-3" style="width: 30rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $c['judul_cerita']}}</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{ $c['id'] }}" style="background-color: rgba(137, 98, 248, 1); color:white;">
                        Selengkapnya
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detail{{ $c['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $c['judul_cerita']}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $c['isi_cerita'] }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>