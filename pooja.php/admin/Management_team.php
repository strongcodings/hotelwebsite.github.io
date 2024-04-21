<?php
include_once('connection.php');
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
    <title>Document</title>
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
                $query="select * from team_detail ";
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
</div>
</div>

<!-- modal -->
<div class="modal fade " id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
       <form action="" method="post"  enctype="multipart/form-data">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" name="sbb">Add </h5>
              </div>
      <div class="modal-body">
        <div class=" mb-3">
            <label for="#mamber-name-inp" class="form-label">Name</label>
            <input type="text" name="mamber_name" id="mamber-name-inp"
                class="form-control shadow-none">
        </div>
       <div class="mb-3">
           <label for="#picture-inp" class="form-label">Picture</label>
           <input type="file" name="imgs" id="picture-inp"accept="jpg, png .wedp, jpeg" class="form-control shadow-none">
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

</body>
</html>