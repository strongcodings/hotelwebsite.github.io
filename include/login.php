<?php
$error="";
include_once('admin/connection.php');
  
if(isset($_POST['sb']))
{
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $query="select * from login where Email='$Email' and Password='$Password'";
    // echo $query;
    // die()
    $ck=mysqli_query($cn,$query);
    $rw=mysqli_num_rows($ck);
    echo $rw;
    if($rw>0)
    {
      session_start();
      $_SESSION['id']=$Email;
      header("location:pooja.php");

    }
    else
    {
      $error="invalid credenials"; 
    }

    mysqli_close($cn);
}
?>