<!DOCTYPE html>
<html>

<head>
  <title>DAFTAR MASJID</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
  <script type="text/javascript" src="assets/js/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function() {
      $('published_on').datepicker();
    });
  </script>
</head>

<body>
  <div class="container-fluid">
    <P></P>
    <nav class="navbar navbar-expand-lg navbar-yellow bg-light">
      <a class="navbar-brand" href="home.php">
        <img src="assets/img/logo.png" width="200" height="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php"><b>HOME</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="imsakiyah.php"><b>IMSAKIYAH</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php"><b>DAFTAR MASJID</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>BLOG</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">LIFE STYLE</a>
              <a class="dropdown-item" href="#">RESEP</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">PUASA</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="id2"><b>ABOUT</b></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <a href="index.php" type="button" class="btn btn-primary">Logout</a>
      </div>

    </nav>