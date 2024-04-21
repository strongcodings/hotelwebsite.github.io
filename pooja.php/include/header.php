<!-- <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
// $components = explode('/', $path);
$first_part = $path[1];
echo $first_part
?> -->

 <?php
include_once('admin/connection.php');

?>  

<?php
include_once('login.php');

?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 px-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">HOTEL</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="room.php">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contect</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="about.php">About</a>
          </li>

        </ul>
        <div class="d-flex">
         <img src="images/p.jpg" alt="" srcset="" style="height: 80px;">
          
        </div>
      </div>
    </div>
</nav>



</body>
</html>

