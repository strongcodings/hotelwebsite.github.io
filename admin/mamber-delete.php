
<?php
include_once('connection.php');
session_start();
if(!$_SESSION['id'])
{
  echo "<script>alert('please login first');location.href='index.php'</script>";
}
include_once('connection.php');
if($_REQUEST['del'])
{
    $sn=$_GET['del'];
    $query="delete from  team_details where sn='$sn'";
    // echo $query;1
    // die();
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
        echo "<script>alert('deleted data successfully');location.href='settings.php'</script>";
    }
}
?>
