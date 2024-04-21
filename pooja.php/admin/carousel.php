<?php
include_once('connection.php');
session_start();
if(!$_SESSION['id'])
{
  echo "<script>alert('please login first');location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-setting</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
include_once('inc/links.php');
?>
</head>

<body class="bg-light ">
     <?php
include_once('inc/header.php');
?> 

 <!-- insert query    -->
<?php
if(isset($_POST['submit']))
{
    $dir="images/";
    $carousel_picture=$dir.basename($_FILES['carousel_picture']['name']);
    move_uploaded_file($_FILES['carousel_picture']['tmp_name'],$carousel_picture);
    // echo $carousel_picture;
    //  die();
     $query="insert into  carousel values('','$carousel_picture')";
     $ck=mysqli_query($cn,$query);
     if($ck)
     {
      echo "<script>alert('you have successfully submitted data')</script>";
     }
     }
?>

<!-- show  -->
<?php
       $query="select * from carousel where sn";
       $ck=mysqli_query($cn,$query);
       $chotu=mysqli_fetch_array($ck);
       $carousel_picture=$chotu['carousel_picture'];
 ?>



<div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
<div class="row">
  <div class="col-lg-10 ms-auto p-1 overflow-hidden">
        <h3 class="mb-4">CAROUSEL</h3>

              <!-- CAROUSELmanagment team section -->
                <div class="card border-0 mb-2 ">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between  mb-3">
                            <h5 class="card-title m-0">IMAGES</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm " data-bs-toggle="modal"                               data-bs-target="#carousel-s">
                                <i class="bi bi-folder-plus"></i> Add
                            </button>
                        </div>
                           <div class="row" id="team-data">
                            <?php
                               $query="select * from carousel ";
                               $ck=mysqli_query($cn,$query);
                               while($chotu=mysqli_fetch_array($ck))
                               {
                                 $sn=$chotu['sn'];
                                 $carousel_picture=$chotu['carousel_picture'];
                                 
                                //  $i=1;
                                //  while($i<4)
                                //  {
                            
                            ?>  
                            <div class="col-md-2 mb-2">
                            <div class="card bg-dark text-white">
                                <img src="<?php echo $carousel_picture?>" class="card-img" style="height: 150px; ">
                                <div class="card-img-overlay text-end">
                                <a href="cdelete.php?del=<?php echo $sn?>"><button type="button" class="btn btn-danger btn-sm shadow-none mt-0 ">
                                <i class="bi bi-trash"></i> 
                                </button></a>
                                </div>
                               
                            </div>
                        </div>
                        <?php
                        //  $i++;
                    }
                        ?>
                            
                            
                        </div>
                    </div>
                </div>

                <!-- CAROUSEL section Modal -->

<div class="modal fade " id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"    aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
    <form action="" method="post" id="carousel-s-form" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" name="sbb">Add </h5>
           </div>
   <div class="modal-body">
    
    <div class="mb-3">
        <label for="#carousel-picture-inp" class="form-label">Picture</label>
        <input type="file" name="carousel_picture" id="carousel-picture-inp"accept="jpg, png .wedp, jpeg" class="form-control shadow-none">
    </div>
 </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
    <input type="submit" name="submit"class="form-control shadow-none justify-content-between w-50 btn-secondary">

                <!-- <button type="button" class="btn btn-primary shadow-none text-white" data-bs-dismiss="modal" name=" sb">submit</button> -->
 </div>
        </div>
    </form>

    </div>
</div>


</div>
</div>

        
        <?php
include_once('inc/scipt.php');
?>

</body>

</html>