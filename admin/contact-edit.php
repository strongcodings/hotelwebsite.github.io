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
    <title>Admin Panel-ROOMS</title>
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
 
 if($_REQUEST['sn'])
 {
   $sn=$_GET['sn'];
    $query="select * from contact where sn='$sn' ";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
    $address=$chotu['address'];
    $gmap=$chotu['gmap'];
    $pn1=$chotu['pn1'];
    $pn2=$chotu['pn2'];
    $email=$chotu['email']; 
    $fb=$chotu['fb'];
    $tw=$chotu['tw'];
    $ins=$chotu['ins'];
    $iframe=$chotu['iframe'];

 }
 

?>  

<div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
<div class="row">
    <div class="col-lg-10 ms-auto p-1 overflow-hidden">
        <h3 class="mb-4">Genral Settings</h3>

       <!-- contact -->
        <div class="card border-0 mb-2 ">
            <div class="card-body">
                <div class="text-end  mb-3"> </div>
                <div class="table-responsive-lg" style="overflow-y: scroll;">
                <form action="" method="post">
                    <table class="table table-hover border">
                       
                    <tr>
                            <td scope="col" class="bg-dark text-light">Address</td> <td><input type="text" name="sn" value="<?php echo $sn ?>"><input type="text" name="address" value="<?php echo $address?>"></td>                    
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Google Map</td><td><input type="text" name="gmap" value="<?php echo $gmap?>"></td>
                        </tr>
                        
                        <tr>
                            <td scope="col" class="bg-dark text-light">Phone Number</td><td><input type="number" name="pn1" value="<?php echo $pn1?>"> <br>  <input type="number" name="pn2" value="<?php echo $pn2?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">E-mail</td><td><input type="email" name="email" value="<?php echo $email?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Social Links</td><td><input type="text" name="fb" value="<?php echo $fb?>"> <br> <input type="text" name="tw" value="<?php echo $tw?>"><br> <input type="text" name="ins" value="<?php echo $ins?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">iframe</td><td><input type="text" name="iframe" value="<?php echo $iframe?>"></td>
                        </tr>
                        
                        <tr>
                        <td> <td><input type="submit" class="bg-dark text-light" value="Update" name="editing"></td></td>
                       </tr>
                 </table>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



 <!--update  -->

 <?php
 if(isset($_POST['editing']))
 {
    $sn=$_POST['sn'];
    $address=$_POST['address'];
    $gmap=$_POST['gmap'];
    $pn1=$_POST['pn1'];
    $pn2=$_POST['pn2'];
    $email=$_POST['email'];
    $fb=$_POST['fb'];
    $tw=$_POST['tw'];
    $ins=$_POST['ins'];
    $iframe=$_POST['iframe'];
    $query="update contact set address='$address', gmap='$gmap',pn1='$pn1',pn2='$pn2',email='$email',fb='$fb', tw='$tw', ins='$ins',iframe='$iframe'  where sn='$sn'";
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
     echo "<script>alert('updata data successfully submitted');location.href='settings.php'</script>";
    }  
   

 }
?>





    <?php
 include_once('inc/scipt.php');
 ?>

</body>

</html>