<?php
session_start();
include_once('./php/controller/user.php');

$userObj = new User();

if(!isset($_SESSION['login'])) {
    header('Location:../index.php', true, 301);
    exit();
}

if (isset($_GET['logout'])){
  $userObj->logout();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Teyvat</title>

    <!--CDN-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!--Custom CSS-->
    <link rel="stylesheet" href="./assets/styles/home.css" />
  </head>
  <body>
    <!--Header-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <span class="navbar-brand">Hotel Teyvat</span>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./booking.php">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a href="home.php?logout=true" class="dropdown-item">Logout</a>
                    </div>
              </li>
          </ul>
        </div>
      </nav>
    </header>

    <!--Main-->
    <main>
      <!--Main Text-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 cover-text">
            <h1 class="cover-heading">Hello</h1>
            <p>
            "Setiap kali Anda ditanya apakah Anda dapat melakukan pekerjaan, beritahu mereka, ‘Saya bisa!’. Kemudian sibuklah dalam mencari tahu cara melakukannya." - Theodore Roosevelt
            </p>
            <button type="button" class="btn btn-outline-light">Explore</button>
          </div>
          <div class="col-6">
            <!-- Gallery -->
            <!-- 
            Gallery is linked to lightbox using data attributes.

            To open lightbox, this is added to the gallery element: {data-toggle="modal" data-target="#myModal"}.

            To open carousel on correct image, this is added to each image element: {data-target="#myCarousel" data-slide-to="0"}.
            Replace '0' with corresponding slide number.
            -->

            <div class="row margin" id="gallery" data-toggle="modal" data-target="#myModal">
              <div class="col-12 col-sm-6 col-lg-6">
                <img class="w-100" src="./assets/img/gerbang-handara.jpg" alt="First slide" data-target="#myCarousel" data-slide-to="0" />
              </div>
              <div class="col-12 col-sm-6 col-lg-6">
                <img class="w-100" src="./assets/img/madakaripura.jpg" alt="Second slide" data-target="#myCarousel" data-slide-to="1" />
              </div>
            </div>
            <div class="row" id="gallery" data-toggle="modal" data-target="#myModal">
              <div class="col-12 col-sm-6 col-lg-6">
                <img class="w-100" src="./assets/img/purwakarta.jpg" alt="Third slide" data-target="#myCarousel" data-slide-to="2" />
              </div>
              <div class="col-12 col-sm-6 col-lg-6">
                <img class="w-100" src="./assets/img/prambanan.jpg" alt="Fourth slide" data-target="#myCarousel" data-slide-to="3" />
              </div>
            </div>

            <!-- Modal -->
            <!-- 
            This part is straight out of Bootstrap docs. Just a carousel inside a modal.
            -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="./assets/img/gerbang-handara.jpg" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="./assets/img/madakaripura.jpg" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="./assets/img/purwakarta.jpg" alt="Third slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="./assets/img/prambanan.jpg" alt="Fourth slide" />
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<!--php-->
