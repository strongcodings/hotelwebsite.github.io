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

    <style>
        .custom-bg {
            border: 1px solid rgb(115, 138, 177);
            background: rgb(115, 138, 177);
        }

        .custom-bg:hover {
            background: rgb(85, 95, 111);
        }

        td img {
            width: 60px;
            height: 50px;
        }
    </style>

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
                    <form action="" method="post" enctype="multipart/form-data">
                    <table class="table table-hover border">
                        <tr>
                          <td scope="col" class="bg-dark text-light" style="width: 50px;">Images</td> <td ><input type="file" name="img" value="<?php echo $img ?>"> <img src="<?php echo $img?>" alt="" srcset=""></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Name</td> <td> <input type="hidden" name="id" value="<?php echo $id?>"> <input type="text" name="name" value="<?php echo $name?>"></td>                    
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Area</td><td><input type="text" name="area" value="<?php echo $area?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Guest</td><td><input type="text" name="adult" value="<?php echo $adult?>"><br> <input type="text" name="children" value="<?php echo $children?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Price</td><td><input type="text" name="price" value="<?php echo $price?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Quantity</td><td> <input type="text" name="quantity" value="<?php echo $quantity?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Features</td>
                            <td> <input type="text" name="bedroom" value="<?php echo $bedroom?>"> <br>  
                                <input type="text" name="balcony" value="<?php echo $balcony?>">  <br> 
                                <input type="text" name="kitchen" value="<?php echo $kitchen?>">
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Facilities</td>
                            <td><input type="text" name="wi" value="<?php echo $wi?>"> <br>
                                <input type="text" name="air" value="<?php echo $air?>"><br> 
                                <input type="text" name="tele" value="<?php echo $tele?>"><br>
                                <input type="text" name="gey" value="<?php echo $gey?>"><br>
                                <input type="text" name="spa" value="<?php echo $spa?>"><br>
                                <input type="text" name="heat" value="<?php echo $heat?>"></td>
                        </tr>
                        <tr>
                            <td scope="col" class="bg-dark text-light">Description</td><td><input type="text" name="desc" value="<?php echo $desc?>"></td>
                        </tr>
                       <tr>
                        <td><input type="submit" class="form-control shadow-none justify-content-between btn-secondary" value="Update" name="edit"></td>
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
    $id=$_POST['id'];
    $name=$_POST['name'];
    $area=$_POST['area'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $adult=$_POST['adult'];
    $children=$_POST['children'];
    $bedroom=$_POST['bedroom'];
    $balcony=$_POST['balcony'];
    $kitchen=$_POST['kitchen'];
    $wi=$_POST['wi'];
    $air=$_POST['air'];
    $tele=$_POST['tele'];
    $gey=$_POST['gey'];
    $spa=$_POST['spa'];
    $heat=$_POST['heat'];
    $dir="images/";
    $img=$dir.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$img);
    
    $query="update rooms set name='$name', area='$area',price='$price', quantity='$quantity', adult='$adult', children='$children' ,bedroom='$bedroom',balcony='$balcony',kitchen='$kitchen', wi='$wi',air='$air', tele='$tele',gey='$gey',spa='$spa',heat='$heat',img='$img' where id='$id'";
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
     echo "<script>alert('updata data successfully submitted');location.href='rooms.php'</script>";
    }  
   

 }
?>


    <?php
 include_once('inc/scipt.php');
 ?>

</body>

</html>