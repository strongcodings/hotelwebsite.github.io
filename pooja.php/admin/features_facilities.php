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

<div class="container-fluid ms-auto p-4 overflow-hidden" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-1 overflow-hidden">
<h3 class="mb-4"></h3>

<!--feature -->
<div class="card border-0 mb-2 ">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between  mb-3">
            <h5 class="card-title m-0"> Features</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark shadow-none btn-sm " data-bs-toggle="modal"
                data-bs-target="#Features-s">
                <i class="bi bi-folder-plus"></i> Add
            </button>
        </div>
        <div class="table-responsive-md" style="overflow-y: scroll;">
            <table class="table table-hover border">
                <tr class="bg-dark text-light">
                    <th scope="col">Sn</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
                <?php
                $query="select * from  features ";
                $ck=mysqli_query($cn,$query);
                $i=1;
                while($chotu=mysqli_fetch_array($ck))
                {
                    $sn=$chotu['sn'];
                    $feature_name=$chotu['feature_name'];
                 ?>
                
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $feature_name?></td>
                    <td><a href="action.php?del=<?php echo $sn?>"><button type="button" class="btn btn-danger shadow-none" >Delete</button></a></td>
                </tr>
                <?php
                $i++;
                }
                ?>

           </table>
        </div>
    </div>
</div>

<!-- facilities  -->
<div class="card border-0 mb-2 ">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between  mb-3">
            <h5 class="card-title m-0"> Facilities</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark shadow-none btn-sm " data-bs-toggle="modal"  data-bs-target="#facilities-s">
                <i class="bi bi-folder-plus"></i> Add
            </button>
        </div>
        <div class="table-responsive-md" style="overflow-y: scroll;">
            <table class="table table-hover border">
                <tr class="bg-dark text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                <?php
                $query="select * from  facility ";
                $ck=mysqli_query($cn,$query);
                while($chotu=mysqli_fetch_array($ck))
                {
                    $id=$chotu['id'];
                    $icon=$chotu['icon'];
                    $facility_name=$chotu['facility_name'];
                    $description=$chotu['description'];
                   
                 ?>
                
                <tr>
                    <td><?php echo $id ?></td>
                    <td ><img src="<?php echo $icon?>" alt=""  ></td>
                    <td><?php echo $facility_name?></td>
                    <td><?php echo $description?></td>
                    <td><a href="action.php?del=<?php echo $id?>"><button type="button" class="btn btn-danger shadow-none" >Delete</button></a></td>
                    
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

    <!--feature modal -->
<div class="modal fade " id="Features-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" id="features-s-form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" name="sbb">Add </h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="#feature_name-inp" class="form-label">Feature_name</label>
                        <input type="text" name="feature_name" id="feature_name-inp"
                            class="form-control shadow-none">
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

     <!-- facilities modal -->
 <div class="modal fade " id="facilities-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <form action="" method="post" id="features-s-form" enctype="multipart/form-data">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" name="sbb">Add </h5>
                 </div>
                 <div class="modal-body">
                 <div class="mb-3">
                        <label for="#feature_picture-inp" class="form-label">Feature_icon</label>
                        <input type="file" name="icon" id="feature_picture-inp"  class="form-control shadow-none">
                    </div>
                     <div class="mb-3">
                         <label for="#feature_name-inp" class="form-label">Feature_name</label>
                         <input type="text" name="name" id="feature_name-inp"  class="form-control shadow-none">
                     </div>
                    
                    <div class="mb-3">
                        <label for="#floatingTextarea" class="form-label">Description</label>
                       <textarea class="form-control shadow-none" name="description"  rows="3" id="floatingTextarea"></textarea>
                    </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <input type="submit" name="sb" class="form-control shadow-none justify-content-between w-50 btn-secondary">

                     <!-- <button type="button" class="btn btn-primary shadow-none text-white" data-bs-dismiss="modal" name=" sb">submit</button> -->
                 </div>
             </div>
         </form>
     </div>
 </div>

    <!-- insert query    -->
    <?php
 if(isset($_POST['submit']))
 {
    $feature_name=$_POST['feature_name'];
     // echo $carousel_picture;
     //  die();
      $query="insert into  features values('','$feature_name')";
      $ck=mysqli_query($cn,$query);
      if($ck)
      {
       echo "<script>alert('you have successfully submitted data')</script>";
      }
      }
 ?>
 
 <!-- facility insert -->
 <?php
 if(isset($_POST['sb']))
 {
    $dir="images/";
    $icon=$dir.basename($_FILES['icon']['name']);
    move_uploaded_file($_FILES['icon']['tmp_name'],$icon);
    $name=$_POST['name'];
    $description=$_POST['description'];
     // echo $carousel_picture;
     //  die();
      $query="insert into  facility values('','$icon','$name','$description')";
      $ck=mysqli_query($cn,$query);
      if($ck)
      {
       echo "<script>alert('you have successfully submitted data')</script>";
      }
      }
 ?>
 ?>

    <?php
include_once('inc/scipt.php');
?>

</body>

</html>