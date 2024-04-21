<!-- feature -->
<?php
include_once('connection.php');
if($_REQUEST['del'])
{
    $sn=$_GET['del'];
   $query="delete from  features where sn='$sn'";
   
    // echo $query;
    // die();
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
        echo "<script>alert('deleted data successfully');location.href='features_facilities.php'</script>";
    }
}
?>
<!-- facility -->
<?php
include_once('connection.php');
if($_REQUEST['del'])
{
    $id=$_GET['del'];
    $query="delete from  facility where id='$id'";
    // echo $query;1
    // die();
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
        echo "<script>alert('deleted data successfully');location.href='features_facilities.php'</script>";
    }
}
?>

