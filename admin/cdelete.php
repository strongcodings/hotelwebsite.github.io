<?php
include_once('connection.php');
if($_REQUEST['del'])
{
    $sn=$_GET['del'];
    $query="delete from  carousel where sn='$sn'";
    // echo $query;1
    // die();
    $ck=mysqli_query($cn,$query);
    if($ck)
    {
        echo "<script>alert('deleted data successfully');location.href='carousel.php'</script>";
    }
}
?>
