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


    $query="select * from settings where sn='$sn' ";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
    $site_title=$chotu['site_title'];
    $site_about=$chotu['site_about'];
 }
?>  

<div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
<div class="row">
    <div class="col-lg-10 ms-auto p-1 overflow-hidden">
        <h3 class="mb-4">Genral Settings</h3>

        <!-- settings -->
        <div class="card border-0 mb-2 ">
            <div class="card-body">
                <div class="text-end  mb-3"> </div>
                <div class="table-responsive-lg" style="overflow-y: scroll;">
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table table-hover border">
                       
                        <tr>
                            <td scope="col" class="bg-dark text-light">Site title</td> <td> <input type="hidden" name="sn" value="<?php echo $sn?>"><input type="text" name="site_title" value="<?php echo $site_title?>"></td>                    
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">About Us</td><td><input type="text" name="site_about" value="<?php echo $site_about?>"></td>
                        </tr>
                        <tr>
                        <td><input type="submit" class="bg-dark text-light" value="Update" name="edit"></td>
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
 if(isset($_POST['edit']))
 {
    $sn=$_POST['sn'];
    $site_title=$_POST['site_title'];
    $site_about=$_POST['site_about'];
    $query="update  settings set site_title='$site_title', site_about='$site_about' where sn='$sn'";
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