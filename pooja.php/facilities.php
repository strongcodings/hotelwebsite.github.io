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
  <title>Hotel-home</title>
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
   <!-- FACILITIES -->
   <?php
    $query="select * from facility ";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
    $icon=$chotu['icon'];
    $facility_name=$chotu['facility_name'];
    $description=$chotu['description'];
    ?>

<div class="my-5 px-4 ">
 <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">OUR FACILITIES</h2>
 <div class="h-line bg-dark"></div>
 <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum dolorem eius iusto,<br> assumenda quam recusandae autem repellendus numquam et.
 </p>
 </div>
 <div class="container">
    <div class="row">
 <?php
      $query="select * from facility ";
      $ck=mysqli_query($cn,$query);
      while($chotu=mysqli_fetch_array($ck))
      {
        $id=$chotu['id'];
        $icon=$chotu['icon'];
        $facility_name=$chotu['facility_name'];
        $description=$chotu['description']
        
      //  $i=1;
      //  while($i<4)
      //  {
  
    ?>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="<?php echo $icon?>" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3"><?php echo $facility_name ?></h5>
                </div>
                
                <p><?php echo $description?></p>
            </div>
        </div>
        <?php
        // $i++;
      }
      ?>
        <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="images/features/wi-fi.png" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3">Wi-Fi</h5>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam natus, consectetur incidunt a laborum quia?</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="images/features/wi-fi.png" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3">Wi-Fi</h5>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam natus, consectetur incidunt a laborum quia?</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="images/features/wi-fi.png" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3">Wi-Fi</h5>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam natus, consectetur incidunt a laborum quia?</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="images/features/wi-fi.png" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3">Wi-Fi</h5>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam natus, consectetur incidunt a laborum quia?</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="images/features/wi-fi.png" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3">Wi-Fi</h5>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam natus, consectetur incidunt a laborum quia?</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow-none p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2" >
                    <img src="images/features/wi-fi.png" alt="" srcset="" width="40px">
                     <h5 class="m-0 ms-3">Wi-Fi</h5>
                </div>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam natus, consectetur incidunt a laborum quia?</p>
            </div>
        </div> -->
    </div>
 </div>


 <?php
 include_once('include/footer.php');
 ?>
</body>
</html>