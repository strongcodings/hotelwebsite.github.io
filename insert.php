<?php
        if(isset($_POST['send']))
        {
        $name=$_POST['name'];
        // $email=$_POST['email'];
        // $subject=$_POST['subject'];
        // $message=$_POST['message'];
       $query="insert into user values('','$name')";
       echo $name;
       die();
       
    //    $ck=mysqli_query($cn,$query);
    //    if($ck)
    //    {
    //     echo "<script>alert('you have successfully submitted data')</script>";
    //    }
       }
    ?>