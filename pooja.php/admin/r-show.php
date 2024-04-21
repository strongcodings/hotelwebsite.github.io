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

<div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
<div class="row">
    <div class="col-lg-10 ms-auto p-1 overflow-hidden">
        <h3 class="mb-4">ROOMS</h3>

        <!--room -->
        <div class="card border-0 mb-2 ">
            <div class="card-body">
                <div class="text-end  mb-3"> </div>
                <div class="table-responsive-lg" style="overflow-y: scroll;">
                    <table class="table table-hover border">
                        <tr>
                          <td scope="col" class="bg-dark text-light" style="width: 50px;">Images</td> <td ><img src="<?php echo $img ?>" alt="" ></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Name</td> <td><?php echo $name?></td>                    
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Area</td><td><?php echo $area?></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Guest</td><td> <?php echo $adult?> <?php echo $children?></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Price</td><td> <?php echo $price?></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Quantity</td><td> <?php echo $quantity?></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Features</td><td> <?php echo $bedroom?>  <?php echo $balcony?>  <?php echo $kitchen?></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Facilities</td><td> <?php echo $wi?> <?php echo $air?>  <?php echo $tele?> <?php echo $gey?> <?php echo $spa?> <?php echo $heat?></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Description</td><td> <?php echo $desc?></td>
                        </tr>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






    <?php
 include_once('inc/scipt.php');
 ?>

</body>

</html>