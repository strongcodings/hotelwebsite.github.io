<?php
session_start();
if(!$_SESSION['id'])
{
  echo "<script>alert('please login first');location.href='/abcde/db/listing/index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Room_details</title>
    <link rel="stylesheet" href="css/style.css">
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
<?php
  if($_REQUEST['id'])
  {
    $id=$_GET['id'];

    $query="select * from  rooms where id='$id'";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
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
}
?>

    <div class="container-fluid">
        <div class="row">
            <div class=" col-12 my-5 px-4 ">
                <h2 class="  fw-bold "> <?php echo $name?></h2>
                <div style="font-size: 14px;">
                <a href="index.php" class="text-secondary text-decoration-none"> HOME</a>
            <span class="text-secondary">></span>
        <a href="rooms.php" class="text-secondary text-decoration-none">ROOMS</a></div>
            </div>
         
    
    <div class="col-lg-7 col-md-12 px-4 ">
        <div id="room-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php
          $query="select * from rooms ";
          $ck=mysqli_query($cn,$query);
          while($chotu=mysqli_fetch_array($ck))
          {
            $id=$chotu['id'];
            $img=$chotu['img'];
            
          //  $i=1;
          //  while($i<4)
          //  {
      
      ?> 

              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww" class="d-block w-100" alt="...">
              </div>
             <?php
          }
          ?>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#room-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#room-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="col-lg-5 col-md-12 px-4 ">
        <div class="card mb-2 border-0 shadow-sm rounded-3">
            <div class="card-body">
            <h4 class="mb-0"><?php echo $price ?> per night</h4>
            </div>

            <div class="ratting  ms-3">
            <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-half text-warning"></i>
                </span>
              </div>
              <div class="col-md-7 px-lg-3 p-md-3 px-0">
                <h5 class="mb-3"><?php echo $name?></h5>
                <div class="features mb-1">
                    <h6 class="mb-1"> Features</h6>
                     
                    <span class="badge rounded-pill bg-light text-dark mb-1 text-wrap ">
                        2 <?php echo $bedroom?>
                    </span>
                    <span class="badge rounded-pill bg-light text-dark mb-1 text-wrap ">
                       <?php echo $balcony?>
                    </span>
                    <span class="badge rounded-pill bg-light text-dark mb-1 text-wrap ">
                       <?php echo $kitchen?>
                    </span>
                  </div>
              </div>
              <div class="features mb-1">
                                
                <h6 class="mb-1 ms-3 ">Facilities</h6>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ms-3 ">
                <?php echo $wi?>
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                <?php echo $spa?>
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                <?php echo $air?>
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                <?php echo $tele?>
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                <?php echo $gey?>
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                <?php echo $heat?>
                </span>
           </div>
           <div class="Guests">
            <h6 class="mb-1 ms-3 ">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark mb-3 ms-3 mtext-wrap ">
            <?php echo $adult?>
            </span>
            <span class="badge rounded-pill bg-light text-dark mb-3  text-wrap ">
             <?php echo $children?>
           
          </div>
          <div class="Quantity mb-2">
            <h6 class="mb-1 ms-3 ">Quantity :<span class="badge rounded-pill bg-light text-dark mtext-wrap ">
              <?php echo $quantity?>
              </span></h6>
          </div>
          <div class="area ">
            <h6 class="mb-1 ms-3 ">Area :<span class="badge rounded-pill bg-light text-dark mtext-wrap ">
              <?php echo $area?>
              </span></h6>
          </div>

    </div>
    </div>
    <div class="col-12 mt-4 px-4">
      <div class="mb-4">
        <h5>Description</h5>
        <p>
          <?php echo $desc ?>
        </p>
      </div>
    </div>
    
    </div>


    <?php
 include_once('include/footer.php');
 ?>




</body>

</html>