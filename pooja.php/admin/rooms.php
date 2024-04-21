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
        td img{
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


<div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-1 overflow-hidden">
<h3 class="mb-4">ROOMS</h3>

<!--room -->
<div class="card border-0 mb-2 ">
    <div class="card-body">
        <div class="text-end  mb-3">
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark shadow-none btn-sm " data-bs-toggle="modal"
                data-bs-target="#add-room">
                <i class="bi bi-folder-plus"></i> Add
            </button>
        </div>
        <div class="table-responsive-lg" style="overflow-y: scroll;">           
            <table class="table table-hover border">
                <tr class="bg-dark text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Area</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
               <?php
                $query="select * from rooms ";
                $ck=mysqli_query($cn,$query);
                while($chotu=mysqli_fetch_array($ck))
                {
                    $id=$chotu['id'];
                    $name=$chotu['name'];
                    $area=$chotu['area'];
                    $adult=$chotu['adult'];
                    $children=$chotu['children'];
                    $price=$chotu['price'];
                    $quantity=$chotu['quantity'];
                   
                 ?>
                
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $name?></td>
                    <td><?php echo $area?></td>
                    <td><?php echo $adult?><?php echo $children?></td>
                    <td><?php echo $price?></td>
                    <td><?php echo $quantity?></td> 
                   
                    <td><a href="room-delete.php?del=<?php echo $id?>"><button type="button" class="btn btn-danger shadow-none" >
                    <i class="bi bi-trash"></i>
                    </button></a>
                    <a href="r-show.php?id=<?php echo $id ?>"><button type="button" class="btn btn-dark shadow-none" >
                    <i class="bi bi-eye-slash"></i>
                    </button></a>
                    <a href="room-edit.php?id=<?php echo $id ?>"><button type="button" class="btn btn-info shadow-none" >
                    <i class="bi bi-pencil-square"></i>
                    </button></a>
                    
                   </td>
                    
                </tr>
                <?php
                
                }
                ?> 

           </table>
        </div>
    </div>
</div>
</div>
</div>
</div>

    <!--add room modal -->
<div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="" method="post" id="add-room-form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" name="sbb">Add </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="#Name" class="form-label">Name</label>
                            <input type="text" name="name" id="Name"class="form-control shadow-none">
                        </div>
                        <div class=" col-md-6 mb-3">
                            <label for="#Area" class="form-label">Area</label>
                            <input type="text" name="area" id="Area"class="form-control shadow-none">
                        </div>
                        <div class=" col-md-6 mb-3">
                            <label for="#Price" class="form-label">Price</label>
                            <input type="text" name="price" id="Price"class="form-control shadow-none">
                        </div>
                        <div class=" col-md-6 mb-3">
                            <label for="#Quantity" class="form-label">Quantity</label>
                            <input type="text" name="quantity" id="Quantity"class="form-control shadow-none">
                        </div>
                        <div class=" col-md-6 mb-3">
                            <label for="#Adult" class="form-label">Adult(Max.)</label>
                            <input type="text" name="adult" id="Adult"class="form-control shadow-none">
                        </div>
                         <div class=" col-md-6 mb-3">
                            <label for="#Children" class="form-label">Children(Max.)</label>
                            <input type="text" name="children" id="Children"class="form-control shadow-none">
                        </div>
                        <div class="col-12 mb-3">
                            <label  class="form-label"><h5>Features</h5></label>
                          <div  class="row">
                                <input class="form-check-input ms-5" type="checkbox" name="bedroom" value="bedroom" >bedroom
                                <input class="form-check-input ms-5" type="checkbox" name="balcony" value="balcony" id="">balcony
                                <input class="form-check-input ms-5" type="checkbox" name="kitchen" value="kitchen" id="">kitchen
                                 
                          </div>
                        </div>
                        <div class="col-12 mb-3">
                        <label  class="form-label"><h5>Facilities</h5></label>
                      <div  class="row">
                            <input class="form-check-input ms-5 mx-1" type="checkbox" name="wi" value="Wi-fi" >wifi
                            <input class="form-check-input ms-3 mx-1" type="checkbox" name="air" value="AC" id="">Air conditioner
                            <input class="form-check-input ms-3 mx-1" type="checkbox" name="tele" value="Telivision" id="">Telivision
                            <input class="form-check-input ms-3 mx-1" type="checkbox" name="gey" value="Geyser" >Geyser
                            <input class="form-check-input ms-3 mx-1" type="checkbox" name="spa" value="SPA" id="">Spa
                            <input class="form-check-input ms-3 mx-1" type="checkbox" name="heat" value="Heater" id="">Room heater
                             
                      </div>
                        </div>
                        <div class=" col-md-6 mb-3">
                            <label for="#images" class="form-label">Upload</label>
                            <input type="file" name="img" id="images"class="form-control shadow-none">
                        </div>
                        <div class="col-12 mb-3">
                            <label  class="form-label">Description</label>
                            <textarea class=" form-control shadow-none" name="desc" id="" cols="4" rows="10"></textarea>
                        </div>
              </div>
                 </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="submit"class="form-control shadow-none justify-content-between w-50 btn-secondary">

                    <!-- <button type="button" class="btn btn-primary shadow-none text-white" data-bs-dismiss="modal" name=" sb">submit</button> -->
                </div>
            </div>
        </form>
    </div>
</div>

<!-- show data -->




    

    <!-- insert query    -->
<?php
 if(isset($_POST['submit']))
  {
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
    $desc=$_POST['desc'];
     // echo $carousel_picture;
     //  die();
      $query="insert into rooms values('','$name','$area','$price','$quantity','$adult','$children','$bedroom','$balcony','$kitchen','$wi','$air','$tele','$gey','$spa','$heat','$img','$desc')";
    //   echo $name;
    //   die();
     $ck=mysqli_query($cn,$query);
      if($ck)
      {
       echo "<script>alert('you have successfully submitted data')</script>";
      }
     }
?>
 
 <!--update  -->
<?php
 if(isset($_POST['edit']))
 {
    $sn=$_POST['sn'];
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
    $img=$_POST['img'];
    $desc=$_POST['desc'];
    $query="update rooms set name='$name', area='$area',price='$price', quantity='$quantity', adult='$adult', children='$children' ,bedroom='$bedroom',balcony='$balcony',kitchen='$kitchen', wi='$wi', tele='$tele',gey='$gey',spa='$spa',heat='$heat' , img='$img'  where sn='$sn'";
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
     echo "<script>alert('you have successfully submitted data')</script>";
    }
    // echo $name;
    // die();

 }
 ?>

 <?php
 include_once('inc/scipt.php');
 ?>

</body>

</html>