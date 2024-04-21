
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

<?php
$query="select * from contact where sn= 1";
$ck=mysqli_query($cn,$query);
$chotu=mysqli_fetch_array($ck);
$address=$chotu['address'];
$gmap=$chotu['gmap'];
$pn1=$chotu['pn1'];
$pn2=$chotu['pn2'];
$email=$chotu['email'];
$fb=$chotu['fb'];
$ins=$chotu['ins']; 
$tw=$chotu['tw'];
$iframe=$chotu['iframe'];
?>




    <div class="my-5 px-4 ">
        <h2 class="mt-4 pt-4 mb-4 text-center fw-bold ">CONTECT</h2>
        <div class="h-line bg-dark"></div>
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow-none p-4 ">
                    <iframe class="rounded mb-4" height="320" width="450px"
                        src="<?php echo $iframe ?>"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/J9zhefHQkDwYEQiV9" target="_blank"
                        class="text-decoration-none d-inline-block mb-2 d-inline-block text-dark">
                        <i class="bi bi-geo-alt-fill"></i><?php echo $address ?>
                    </a>
                    <h5 class="mt-3">Call Us</h5>
                    <a href="tel: +911111111111" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">
                        <i class="bi bi-telephone-fill"></i><?php echo $pn1 ?>
                    </a><br>
                    <a href="tel: +911111111111" class="d-inline-block mb-2  text-dark" style="text-decoration: none;">
                        <i class="bi bi-telephone-fill"></i><?php echo $pn2 ?>
                    </a>
                    <h5 class="mt-3">Email</h5>
                    <a href="mailto: abcd@gmail.com" class="text-decoration-none d-inline-block mb-2  text-dark">
                        <i class="bi bi-envelope"></i>
                        <?php echo $email ?> </a>

                    <h5 class="mt-3">Follow Us</h5>
                    <a href="" class="d-inline-block mb-1 text-dark text-decoration-none fs-5" >
                      
                    </a>
                    <a href="" class="d-inline-block mb-1 text-decoration-none text-dark fs-5">
                        <i class="bi bi-twitter  me-1"></i>
                    </a>
                    <a href="" class="d-inline-block mb-1 text-decoration-none text-dark fs-5">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                   <a href="" class="d-inline-block text-decoration-none text-dark fs-5 " >
                     <i class="bi bi-instagram me-1"> </i>
                    </a>
                </div>
            </div>
           
            <div class="col-lg-6 col-md-6 ">
               <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputname" name="name">
                  </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Subject</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="subject">
                    </div>
                   
                      <div class="mb-3">
                        <label for="exampleInputmessage" class="form-label">Message</label>
                        <input type="text" class="form-control" id="exampleInputdate" name="message">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputdate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="exampleInputdate" name="date">
                      </div>
                   
                    <button type="submit" class="btn btn-primary" name="send">Submit</button>
                  </form>
            </div>
        </div>
    </div>

    

 


    <?php
 include_once('include/footer.php');
 ?>




</body>

</html>