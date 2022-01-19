<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" contsent="width=device-width, initial-scale=1">

  <!-- JavaScript -->
  <script src="../assets/js/avatar.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styleAvatar.css?v=<?php echo time(); ?>">
  <!--<link rel="stylesheet" href="../assets/css/StyleTugas.css" />-->
  <link rel="shortcut icon" type="image/png" href="../assets/foto/Logo.png" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

  <title>Avatar</title>
  <style>
    body {
      background-image: url("../assets/foto/create-story.png");
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-light" style="background-color: rgba(137, 98, 248, 1);">
    <div class="container-fluid collapse navbar-collapse" id="navbarNavAltMarkup">
      <a class="navbar-brand" href="/dashboard">
        <img src="../assets/foto/logo-penman.png" alt="" height="40px" class="d-inline-block align-text-top">
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{ $avatar }}" width="40px" height="40px"></a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/index">Home</a></li>
            <li><a class="dropdown-item" href="/createStory">Create Stories</a></li>
            <li><a class="dropdown-item" href="/dashboard">See Stories</a></li>
            <li><a class="dropdown-item" href="/profile">Histories/Profile</a></li>
            <li><a class="dropdown-item" href="/avatar">Avatar</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="LogOut.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Avatar Picker -->
  <form class="box" Method="post" Action="/changeAvatar">
    @csrf
    <h1>Set you avatar</h1>

    <table style="text-align:center">
      <tr>
        <th><img title="Icon1" src="../assets/foto/User0.png" height="150" width="150"></th>
        <th><img title="Icon2" src="../assets/foto/User1.png" height="150" width="150"></th>
        <th><img title="Icon3" src="../assets/foto/User2.png" height="150" width="150"></th>
        <th><img title="Icon4" src="../assets/foto/User3.png" height="150" width="150"></th>
      </tr>

      <tr>
        <th>
          <input type="radio" id="Icon 1" name="icon" value="0">
          <label for="Icon1">Icon 1</label>
        </th>
        <th>
          <input type="radio" id="Icon 2" name="icon" value="1">
          <label for="Icon2">Icon 2</label>
        </th>
        <th>
          <input type="radio" id="Icon 3" name="icon" value="2">
          <label for="Icon3">Icon 3</label>
        </th>
        <th>
          <input type="radio" id="Icon 4" name="icon" value="3">
          <label for="Icon4">Icon 4</label></dl>
        </th>
      </tr>
    </table>


    <input class="" type="submit" name="submit">
  </form>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>