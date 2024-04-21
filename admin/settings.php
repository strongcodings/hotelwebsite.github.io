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

 
    


    <div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- genral settings -->
                <div class="card border-0 mb-2">
                    <?php
                $query="select * from  settings ";
                $ck=mysqli_query($cn,$query);
                while($chotu=mysqli_fetch_array($ck))
                {
                    $sn=$chotu['sn'];
                    $site_title=$chotu['site_title'];
                    $site_about=$chotu['site_about'];
                    
                   
                 ?>
                    <div class="card-body">

                        <div class="d-flex align-items-center  justify-content-between   mb-3">
                            <h5 class="card-title m-0 ">Genral Settings</h5>
                            <!-- Button trigger modal -->
                            <a href="st-edit.php?sn=<?php echo $sn ?>"><button type="button"
                                    class="btn btn-info shadow-none ">
                                    <i class="bi bi-pencil-square"></i>
                                </button></a>
                            <a href="st-show.php?sn=<?php echo $sn?>"><button type="button"
                                    class="btn btn-dark shadow-none ">
                                    <i class="bi bi-eye-slash"></i>
                                </button></a>
                        </div>
                        <p>
                            <?php echo $sn?>
                        </p>
                        <h6 class="card-subtitle mb-1  fw-bold">Site title</h6>
                        <p class="card-text">
                            <?php echo $site_title ?>
                        </p>
                        <h6 class="card-subtitle mb-1  fw-bold">About Us</h6>
                        <p class="card-text">
                            <?php echo $site_about ?>
                        </p>
                    </div>
                    <?php
                }
                ?>
                </div>

 <!-- contect details section -->
<div class="card border-0 mb-2">
    <?php
    $query="select * from contact ";
    $ck=mysqli_query($cn,$query);
    while($chotu=mysqli_fetch_array($ck))
    {
        $sn=$chotu['sn'];
        $address=$chotu['address'];
        $gmap=$chotu['gmap'];
        $pn1=$chotu['pn1'];
        $pn2=$chotu['pn2'];
        $email=$chotu['email'];
        $fb=$chotu['fb'];
        $tw=$chotu['tw'];
        $ins=$chotu['ins'];
        $iframe=$chotu['iframe'];
       
     ?>
   <div class="card-body">
   <div class="d-flex align-items-center justify-content-between  mb-3">
        <h5 class="card-title m-0">contact Settings</h5>
        <!-- Button trigger modal -->
        <a href="contact-edit.php?sn=<?php echo $sn ?>"><button type="button"
                class="btn btn-info shadow-none">
                <i class="bi bi-pencil-square"></i>
            </button></a>
   </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-2">
                <p>
                    <?php echo $sn?>
                </p>
                <h6 class="card-subtitle mb-1  fw-bold">Address</h6>
                <p class="card-text" id="address">

                    <?php echo $address ?>
                </p>
            </div>
            <div class="mb-2">
                <h6 class="card-subtitle mb-1  fw-bold">Google Map</h6>
                <p class="card-text" id="gmap">
                    <?php echo $gmap ?>
                </p>
            </div>
            <div class="mb-2">
                <h6 class="card-subtitle mb-1  fw-bold">Phone Number</h6>
                <p class="card-text mb-1">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="pn1"></span>
                    <?php echo $pn1 ?>
                </p>
                <p class="card-text">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="pn2"></span>
                    <?php echo $pn2 ?>
                </p>
            </div>
            <div class="mb-2">
                <h6 class="card-subtitle mb-1  fw-bold">E-mail</h6>
                <p class="card-text" id="email">
                    <?php echo $email ?>
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-2">
                <h6 class="card-subtitle mb-1  fw-bold">Social Links</h6>
                <p class="card-text mb-1">
                    <i class="bi bi-facebook me-1"></i>
                    <span id="fb"></span>
                    <?php echo $fb ?>
                </p>
                <p class="card-text mb-1">
                    <i class="bi bi-instagram me-1"> </i>
                    <span id="ins"></span>
                    <?php echo $tw ?>
                </p>
                <p class="card-text">
                    <i class="bi bi-twitter me-1 "></i>
                    <span id="tw"></span>
                    <?php echo $ins ?>
                </p>
            </div>
            <div class="mb-2">
                <h6 class="card-subtitle mb-1  fw-bold">iframe</h6>

                <iframe id="iframe" class="border p-2 w-100" src="<?php echo $iframe ?>"
                    frameborder="0"></iframe>
            </div>
        </div>
    </div>

  </div>
    <?php
    }
    ?>
</div>

<!--contect details  Modal -->
<div class="modal fade" id="contact-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <form action="" method="post" id="contact-s">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" name="sbb">Contact Settings</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <label for="#add" class="form-label">Address</label>
                                <input type="text" name="address" id="add"
                                    class="form-control shadow-none">
                            </div>
                            <div class=" mb-3">
                                <label for="#Google" class="form-label">Google Map Link</label>
                                <input type="text" name="gmap" id="Google"
                                    class="form-control shadow-none">
                            </div>
                            <div class=" mb-3">
                                <label for="#pho" class="form-label">Phone Number</label>
                                <input type="number" name="pn1" id="pho"
                                    class="form-control shadow-none"><br>
                                <input type="number" name="pn2" id="pho"
                                    class="form-control shadow-none">
                            </div>
                            <div class=" mb-3">
                                <label for="#Google" class="form-label">E-mail</label>
                                <input type="mail" name="email" id="Google"
                                    class="form-control shadow-none">

                            </div>
                            <div class=" mb-3">
                                <label for="#Google" class="form-label">Google Map Link</label>
                                <input type="text" name="gmap" id="Google"
                                    class="form-control shadow-none">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <label for="" class="form-label">Social Links</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i
                                            class="bi bi-facebook me-1"></i></span>
                                    <input type="text" name="fb" id="fb"
                                        class="form-control shadow-none">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i
                                            class="bi bi-twitter me-1"></i></span>
                                    <input type="text" name="tw" id="fb"
                                        class="form-control shadow-none">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i
                                            class="bi bi-instagram me-1"></i></span>
                                    <input type="text" name="ins" id="fb"
                                        class="form-control shadow-none">
                                </div>
                                <div class=" mb-3">
                                    <label for="#iframe-inp" class="form-label">iframe src</label>
                                    <input type="number" name="iframe" id="iprame-inp"
                                        class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary shadow-none text-white"
                        data-bs-dismiss="modal" name=" Edit">submit</button>
                </div>
            </div>


        </div>
</div>
</div>


<!-- modal show -->
<!-- show  -->


<!-- managment team section -->
<div class="card border-0 mb-2 ">
<div class="card-body">
    <div class="d-flex align-items-center justify-content-between  mb-3">
        <h5 class="card-title m-0"> Managment team</h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark shadow-none btn-sm " data-bs-toggle="modal"
            data-bs-target="#team-s">
            <i class="bi bi-folder-plus"></i> Add
        </button>
    </div>

    <div class="row" id="team-data">
        <?php
$query="select * from team_details ";
$ck=mysqli_query($cn,$query);
while($chotu=mysqli_fetch_array($ck))
{
$sn=$chotu['sn'];
$mamber_name=$chotu['mamber_name'];


?>
        <div class="col-md-2 mb-2">
            <div class="card bg-dark text-white">
                <img src="<?php echo $imgs ?>" class="card-img" style="height: 150px; ">
                <div class="card-img-overlay text-end">
                    
                    <a href="mamber-delete.php?del=<?php echo $sn?>"><button type="button" class="btn btn-danger btn-sm shadow-none mt-0 ">
                        <i class="bi bi-trash"></i> 
                    </button></a>
                </div>
                <p class="card-text text-ceneter">
                    <?php echo $mamber_name ?>
                </p>
            </div>
        </div>
        <?php
    }
    ?>

    </div>
</div>
</div>

<!-- managment team section Modal -->

<div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" name="sbb">Add Team Member</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="mamber-name-inp" class="form-label">Name</label>
                        <input type="text" name="mamber_name" id="mamber-name-inp" class="form-control shadow-none">
                    </div>
                    <div class="mb-3">
                        <label for="picture-inp" class="form-label">Picture</label>
                        <input type="file" name="imgs" id="picture-inp" accept="image/*" class="form-control shadow-none">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-secondary">
                </div>
            </div>
        </form>
    </div>
</div>

   
</div>
</div>
</div>

    <!-- insert php -->
<?php
    if(isset($_POST['submit']))
    {
    $mamber_name=$_POST['mamber_name'];
    $dir="images/";
    print_r($_FILES);
      $imgs=$dir.basename($_FILES['imgs']['name']);
      move_uploaded_file($_FILES['imgs']['tmp_name'],$imgs);
    $query="insert into team_details values('','$mamber_name' ,'$imgs')";
    // echo $imgs;
    // die();
     $ck=mysqli_query($cn,$query);
    if($ck)
    {
     echo "<script>alert('you have successfully submitted data')</script>";
    }
    
    }
?>

php?del<?php
include_once('inc/scipt.php');
?>

</body>

</html>