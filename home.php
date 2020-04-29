<?php
session_start();

if (isset($_SESSION['userlogin'])) {
  header("Location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Ramadhan Kareem</title>
</head>

<body>
  <div class="container-fluid" style="background-image: url('assets/img/bg.png');">
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
    <div class="card">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/Ramadhan.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ramadhan Kareem</h5>
              <p>Marhaban Ya Ramadhan</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/Ramadhan2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/Ramadhan3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
      <div class="card-deck">
        <div class="card border-primary">
          <img src="#" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">IMSAKIYAH</h5>
            <p class="card-text">Imsakiyah Kota Pekanbaru dan sekitarnya</p>
            <a href="imsakiyah.php" type="button" class="btn btn-outline-primary">Selengkapnya...</a>
          </div>
        </div>
        <div class="card border-primary">
          <img src="#" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Coming Soon</h5>
            <p class="card-text"></p>
            <button type="button" class="btn btn-outline-primary">Coming Soon</button>
          </div>
        </div>
        <div class="card border-primary">
          <img src="#" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Coming Soon</h5>
            <p class="card-text"></p>
            <button type="button" class="btn btn-outline-primary">Coming Soon</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card text-center">
      <div class="card-footer text-muted">
        2020 &copy; wikytechno.com. All rights Reserved.
      </div>
    </div>



  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>