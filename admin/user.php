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
    <h3 class="mb-4">Users</h3>

    <!-- user -->
    <div class="card border-0 mb-2 ">
    <div class="card-body">
      <div class="table-responsive-md" style="overflow-y: scroll;">
        <table class="table table-hover border">
        <thead class="sticky-top">
            <tr class="bg-dark text-light">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
            <th scope="col" colspan="3" >Action</th>
            </tr>
            <?php
                $query="select * from  user ";
                $ck=mysqli_query($cn,$query);
                $i=1;
                while($chotu=mysqli_fetch_array($ck))
                {
                //     $seen='';
                //     if($chotu['seen']!==1){
                //     $seen="<a href='?seen=$chotu[sn]' class='btn btn-sm rounded-pill btn-primary' >  mark as read</a>";
                // }
                    $id=$chotu['id'];
                    $name=$chotu['name'];
                    $email=$chotu['email'];
                    $subject=$chotu['subject'];
                    $message=$chotu['message'];
                    $date=$chotu['date'];
                  ?>

                 <tr>
                    <td><?php echo $i ?></td>
                   
                    <td><?php echo $name?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $subject?></td>
                    <td><?php echo $message?></td>
                    <td><?php echo $date?></td>
                    <td><a href="room-delete.php?userdel=<?php echo $id?>"><button type="button" class="btn btn-danger shadow-none" >
                    <i class="bi bi-trash"></i>
                    </button></a>
                   <a href="room-edit.php?id=<?php echo $id ?>"><button type="button" class="btn btn-info shadow-none" >
                    <i class="bi bi-pencil-square"></i>
                    </button></a>
                    
                   </td>

                   
                    <!-- <td><a href="rom.php?seen=<?php echo $sn?>"><button type="button" class="btn btn-danger shadow-none" >
                    mark
                    </button></a> -->
                   
                </tr>
                <?php
                $i++;
                }
               
                ?>

        </thead>
        <tbody>
            
        </tbody>
            </table>
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