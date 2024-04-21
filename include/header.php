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
            <a class="nav-link me-2" href="room.php">Rooms</a>
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

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#registerModal">
         Register
        </button>
        </div>
      </div>
    </div>
</nav>
  <!--  -->

  <!-- login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="" method="post">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email"  name="Email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" name="Password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" name="sb" class="btn btn-dark shadow-none">Login</button>
              <a href="javascript: void(0)" class="text-decoration-none text-secondary" data-bs-toggle="modal" data-bs-target="#forgotModal" data-bs-dismiss="modal">forgot Password</a>
              <!-- click not action -->
            </div>
          </div>

      </div>
    </form>
    </div>
  </div>
  

  <p><?php echo $error ?> </p>

  <!-- forgot  -->
  <div class="modal fade" id="forgotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="" method="post">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i> Forgot Password
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="bagge rounded-pill bg-light text dark mb-2 text-wrap lh base">
              Note: A link will be sent to your Email ans reset your password!
            </span>
            <div class="mb-3">
              <label class="form-label" for="emailaddres">Email address</label>
              <input type="email"  name="emailaddres" class="form-control shadow-none">
            </div>
            
            
            <div class="text-end mb-2">
             <a href="" class="text-decoration-none text-secondary" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">CANCEL</a>
               <!-- click not action -->
              <a href=""><button type="submit"  class="btn btn-dark shadow-none">Send Link</button></a>
             
            </div>
          </div>

      </div>
    </form>
    </div>
  </div>


   <!--register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog col-lg">
      <form action="" method="post"  enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Registration
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <div class="row">
          <div class="mb-3 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
          </div>
          <div class="col-md-6">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email"  name="email">
          </div>
          <div class="col-md-6">
            <label for="num" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="num"  name="phone">
          </div>
          <div class="col-md-6">
            <label for="pic" class="form-label">hpicture</label>
            <input type="file" class="form-control" id="pic"  name="pic">
          </div>
          <div class="col-md-12 mb-3">
            <label for="add" class="form-label">address</label>
            <textarea name="add"  class="form-control" id=""  rows="3"></textarea>
          </div>
          <div class="col-md-6">
            <label for="pin" class="form-label">Pinecode</label>
            <input type="text" class="form-control" id="pin"  name="pin">
          </div>
          <div class="col-md-6">
            <label for="date" class="form-label">Date of birth</label>
            <input type="date" class="form-control" id="date"  name="date">
          </div>
          <div class="col-md-6">
            <label for="pas" class="form-label">Password</label>
            <input type="password" class="form-control" id="pas"  name="pas">
          </div>
          <div class="col-md-6">
            <label for="pas2" class="form-label"> Confirm Password</label>
            <input type="password" class="form-control" id="pas"  name="pas2">
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
          <input type="submit" name="submit"class="form-control shadow-none justify-content-between w-50 btn-secondary" value="REGISTER">
        </div>
      </div>
     </form>
    </div>
  </div>
   

    <!-- insert query    -->
<?php
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $add=$_POST['add'];
      $pin=$_POST['pin'];
      $date=$_POST['date'];
      $pas=$_POST['pas'];
      $pas2=$_POST['pas2'];
      $dir="images/";
      $pic=$dir.basename($_FILES['pic']['name']);
      move_uploaded_file($_FILES['pic']['tmp_name'],$pic);
    
      $query="insert into  register values('','$name','$email','$phone','$add','$pin','$date','$pas','$pas2','$pic')";
      // echo $name;
      // die();
     $ck=mysqli_query($cn,$query);
     if($ck)
     {
      echo "<script>alert('you have successfully submitted data')</script>";
     }
     }
?>


</body>
</html>

