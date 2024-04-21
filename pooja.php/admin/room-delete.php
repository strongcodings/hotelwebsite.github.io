<?php
include_once('connection.php');
session_start();
if(!$_SESSION['id'])
{
  echo "<script>alert('please login first');location.href='index.php'</script>";
}
if($_REQUEST['del'])
{
    $id=$_GET['del'];
    $query="delete from  rooms where id='$id'";
    // echo $query;1
    // die();
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
        echo "<script>alert('deleted data successfully');location.href='rooms.php'</script>";
    }
}
?>
<?php
include_once('connection.php');
if($_REQUEST['userdel'])
{
    $id=$_GET['userdel'];
    $query="delete from  user where id='$id'";
    // echo $query;1
    // die();
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
        echo "<script>alert('deleted data successfully');location.href='user.php'</script>";
    }
}
?>
