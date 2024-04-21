<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel-home</title>
  <?php
  include_once('include/links.php');
  ?>


  <!-- swiper cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>


<body class="bg-light">

  <?php
  include_once('include/header.php');
  
  ?>

<!-- carouhse php code -->
  <?php
       $query="select * from carousel where sn";
       $ck=mysqli_query($cn,$query);
       $chotu=mysqli_fetch_array($ck);
       $carousel_picture=$chotu['carousel_picture'];
 ?>

  <!-- slider -->
 
  <div class="container-fluid px-lg-4 mt-4">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
    <div class="carousel-inner">
    <?php
          $query="select * from carousel ";
          $ck=mysqli_query($cn,$query);
          $counter=1;
          while($chotu=mysqli_fetch_array($ck))
          {
            $sn=$chotu['sn'];
            $carousel_picture=$chotu['carousel_picture'];
            
          //  $i=1;
          //  while($i<4)
          //  {
      
      ?> 
    
        <div class="carousel-item <?php if($counter==2) {echo "active";} ?>">
          <img src="<?php echo $carousel_picture?>" class="d-block w-100" alt="...">
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
        <!-- <div class="carousel-item">
          <img src="images/1.jpg" class="d-block w-100" alt="...">
        </div> -->
        <?php
      $counter++;
         } 
          ?>
      </div>
      

    </div>
  </div>
  <!--  -->
  <!-- cheeck availability form -->
  <!-- <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking availability</h5>
        <form action="">
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-lable" style="font-weight:500;">Check in</label>
              <input type="date" class="form-control shadow-none" name="" id="">
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-lable" style="font-weight:500;">Check out</label>
              <input type="date" class="form-control shadow-none" name="" id="">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-lable" style="font-weight:500;">Adult</label>
              <select class="form-select shadow-none" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-lable" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="button" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->
  <!--  -->

  <!-- our rooms -->
  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
    <?php
      $query="select * from rooms ";
      $ck=mysqli_query($cn,$query);
      while($chotu=mysqli_fetch_array($ck))
      {
        $id=$chotu['id'];
        $name=$chotu['name'];
        $area=$chotu['area'];
        $adult=$chotu['adult'];
        $children=$chotu['children'];
        $price=$chotu['price'];
        $quantity=$chotu['quantity'];
        $img=$chotu['img'];
        $bedroom=$chotu['bedroom'];
        $balcony=$chotu['balcony'];
        $kitchen=$chotu['kitchen'];
        $wi=$chotu['wi'];
        $air=$chotu['air'];
        $tele=$chotu['tele'];
        $gey=$chotu['gey'];
        $spa=$chotu['spa'];
        $heat=$chotu['heat'];
        $desc=$chotu['desc'];
   ?>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0" style="max-width: 350px; margin: auto;">
          <img src="<?php echo $img?>" class="card-img-top" alt="..." height="200px";>
          <div class="card-body">
            <h5><?php echo $name?></h5>
            <h6 class="mb-1"><?php echo $price?></h6>
            <div class="features mb-1">
              <h6 class="mb-1"> Features</h6>
             
              <span class="badge rounded-pill bg-light text-dark mb-1 text-wrap ">
                2<?php echo $bedroom?>
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-1 text-wrap ">
               <?php echo $balcony?>
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-1 text-wrap ">
                4 <?php echo $kitchen?>
              </span>
            </div>
            <div class="facilities mb-1">
              <h6 class="mb-1 ">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
              <?php echo $wi?>
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
              <?php echo $tele?>
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
              <?php echo $air?>
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
              <?php echo $heat?>
              </span>
            </div>
            <div class="Guests mb-2">
              <h6 class="mb-1 ">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
              <?php echo $adult?> Adult
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
              <?php echo $children?> Children
            </div>
            <div class="ratting">
              <div class="mb-1">Ratting</div>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex mt-3 justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="room_details.php?id=<?php echo $id ?>" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
   <?php 
      }?>

      <!-- <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                4 Sofa
              </span>
            </div>
            <div class="facilities mb-2">
              <h6 class="mb-1 ">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                Room heater
              </span>
            </div>
            <div class="Guests mb-2">
              <h6 class="mb-1 ">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                4 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
               
              3 Children
             
            </div>
            <div class="ratting">
              <div class="mb-1">Ratting</div>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex mt-3 justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                4 Sofa
              </span>
            </div>
            <div class="facilities mb-2">
              <h6 class="mb-1 ">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                Room heater
              </span>
            </div>
            <div class="Guests mb-2">
              <h6 class="mb-1 ">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                4 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
               
              3 Children
             
            </div>
            <div class="ratting">
              <div class="mb-1">Ratting</div>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
            </div>
            <div class="d-flex mt-3 justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div> -->

      <div class="col-lg-12 text-center mt-5">
        <a href="room.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

<!-- our FACILITIES -->
  <?php
    $query="select * from facility ";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
    $icon=$chotu['icon'];
    $facility_name=$chotu['facility_name'];
    $description=$chotu['description'];
    ?>

  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">OUR FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-5">
    <?php
      $query="select * from facility ";
      $ck=mysqli_query($cn,$query);
      while($chotu=mysqli_fetch_array($ck))
      {
        $id=$chotu['id'];
        $icon=$chotu['icon'];
        $facility_name=$chotu['facility_name'];
       
      //  $i=1;
      //  while($i<4)
      //  {
  
    ?>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="<?php echo $icon ?>" alt="" width="80px">
        <h5 class=""><?php echo $facility_name ?></h5>
      </div>
      <?php
      }?>
      <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wi-fi.png" alt="" width="80px">
        <h5 class="">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wi-fi.png" alt="" width="80px">
        <h5 class="">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wi-fi.png" alt="" width="80px">
        <h5 class="">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/features/wi-fi.png" alt="" width="80px">
        <h5 class="">Wi-fi</h5>
      </div>-->
      <div class="col-lg-12 text-center mt-5">
        <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>

      </div> 
    </div>
  </div>

  <!--testimonals  -->
  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">TESTIMONALS</h2>
  <div class="container mt-5">
    <!-- Swiper -->
    <div class="swiper swiper-testimonals">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="prfile d-flex align-items-center mb-3">
            <img src="images/features/wi-fi.png" alt="" width="30px;">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sit iusto quo rem maxime expedita doloremque
            voluptas excepturi, ipsum voluptatem?</p>
          <div class="ratting">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="prfile d-flex align-items-center mb-3">
            <img src="images/features/wi-fi.png" alt="" width="30px;">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sit iusto quo rem maxime expedita doloremque
            voluptas excepturi, ipsum voluptatem?</p>
          <div class="ratting">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="prfile d-flex align-items-center mb-3">
            <img src="images/features/wi-fi.png" alt="" width="30px;">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sit iusto quo rem maxime expedita doloremque
            voluptas excepturi, ipsum voluptatem?</p>
          <div class="ratting">

            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>

          </div>
        </div>


      </div>
      <div class="swiper-pagination"></div>
    </div>


  </div>

  <!-- rech us -->
  <?php
$query="select * from contact where sn= 1";
$ck=mysqli_query($cn,$query);
$chotu=mysqli_fetch_array($ck);
// $address=$chotu['address'];
// $gmap=$chotu['gmap'];
$pn1=$chotu['pn1'];
$pn2=$chotu['pn2'];
// $email=$chotu['email'];
$fb=$chotu['fb'];
$ins=$chotu['ins']; 
$tw=$chotu['tw'];
$iframe=$chotu['iframe'];
?>

  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">Rech Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-3 bg-white rounded">
        <iframe class="rounded" height="320" width="700px"
          src="<?php echo $iframe ?>"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +911111111111" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">
            <i class="bi bi-telephone-fill"></i> <?php echo $pn1 ?></a><br>
          <a href="tel: +911111111111" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">
            <i class="bi bi-telephone-fill"></i> <?php echo $pn2 ?></a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="" class="d-inline-block mb-3 " style="text-decoration: none;">
            <span class=" badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1 ">  <?php echo $tw ?></i></span>
          </a><br>
          <a href="" class="d-inline-block mb-3 " style="text-decoration: none;">
            <span class=" badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1">  <?php echo $fb ?></i></span>
          </a><br>
          <a href="" class="d-inline-block  " style="text-decoration: none;">
            <span class=" badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1">  <?php echo $ins ?></i></span>
          </a>
        </div>
      </div>
    </div>
  </div>


 <?php
 include_once('include/footer.php');
 ?>



 
</body>

</html>