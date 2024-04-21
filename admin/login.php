<?php
$error="";
include_once('connection.php');
if(isset($_POST['sb']))
{
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    $query="select * from admin where admin_name='$admin_name' and admin_pass='$admin_pass'";
    // echo $query;
    // die()
    $ck=mysqli_query($cn,$query);
    $rw=mysqli_num_rows($ck);
    echo $rw;
    if($rw>0)
    {
      session_start();
      $_SESSION['id']=$admin_name;
      header("location:admin.php");

    }
    else
    {
      $error="invalid credenials";
    }

    mysqli_close($cn);
}
?>