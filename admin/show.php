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
    <title>Document</title>
</head>
<body>
    <!-- FEATURE SHOW -->
    <?php
    $query="select * from  features ";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
    $feature_name=$chotu['feature_name'];

    ?>
    <table border="1" align="center" width="400">
      <tr>
        <td>Name</td><td><?php echo $feature_name ?></td>
      </tr>
    </table>
    <br>
    <br>

     <!-- FACILITIES -->
     <?php
    $query="select * from facility ";
    $ck=mysqli_query($cn,$query);
    $chotu=mysqli_fetch_array($ck);
    $icon=$chotu['icon'];
    $name=$chotu['name'];
    $description=$chotu['description'];

    ?>
    <table border="1" align="center" width="400">
      <tr>
        <td><img src="<?php echo $icon ?>" alt=""></td>
    </tr>
    <tr>
    <td>Name</td><td><?php echo $name ?></td>
 </tr>
  <tr><td>Description</td><td><?php echo $description ?></td>
</tr>
    </table>
</body>
</html>