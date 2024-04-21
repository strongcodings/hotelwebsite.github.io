<?php
include_once('login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logi Panel</title>
 
    <?php
    include_once('inc/links.php');
    ?>
</head>

<body class="bg-light ">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="" method="post">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input  name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Admin Name" id="admin_name">
                </div>
                <div class="mb-3">
                    <input name="admin_pass" type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="sb" class="btn custom-bg shadow-none" type="submit" style="background-color: rgb(115, 138, 177) ;"> Login</button>
            </div>
        </form>
    </div>

<p><?php echo $error ?> </p>


    <?php
include_once('inc/scipt.php');
?>
</body>

</html>