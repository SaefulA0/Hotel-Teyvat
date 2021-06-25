<?php
session_start();
require_once '../booking/booking-proses.php';



  if(isset($_POST["submit"])){
    tambah($_POST);
    // echo tambah($_POST);

    if(tambah($_POST) > -2 ){
      echo"
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'booking2.php';
      </script>
      ";
  } else {
      echo"<script>
        alert('data gagal ditambahkan');
        document.location.href = 'booking.php';
      </script>
      ";
  }
}



?>

<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    
<!-- css -->
    <link rel="stylesheet" href="../assets/styles/booking.css"/>

<!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Hotel Teyvat</title>
  </head>

  <body>

<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-lg" >

        <div class="container-fluid">
        <span class="navbar-brand">Hotel Teyvat</span>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="../index.php">Home</a>
          </li>  
          <li class="nav-item active">
            <a class="nav-link active" href="#booking">Booking</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="#">Gallery</a>
          </li>
        </ul>
    </div>
</nav>
<!-- akhir navbar -->

<!-- form -->
<div>
<form action="booking.php" method="post">
  <div class="wrapperform" id="booking" data-aos="fade-up"
     data-aos-duration="1500">
    <div class="title">
      Booking Hotel
    </div>
    <div class="form">
      <div>
      <div class="input_field">
          <label>Id tamu</label>
          <input type="text" class="input" name="NoId" required>
        </div>
        <div class="input_field">
          <label>Nama Tamu</label>
          <input type="text" class="input" name="Nama" required>
        </div>
        <div class="input_field">
          <label>Tipe Id</label>
          <input type="tepiid" class="input" name="TipeId" required>
        </div>
      </div>
      <div class="input_field">
        <input type="submit" value="Pesan" class="btn" name="submit">
      </div>
    </div>
  </div>
</form>
</div>
<!-- akhir form -->
<div>

</div>
<!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
      crossorigin="anonymous">
    </script>

<!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
