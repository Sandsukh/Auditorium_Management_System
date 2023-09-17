<?php
    session_start();
    include('config.php');
    extract($_POST);
    
    
    mysqli_query($con,"insert into  tbl_reservations values(NULL,'".$_SESSION['user']."','$desc','$rdate','$rtime')");
    
    $_SESSION['success']="Request was sucessfully sent to Admin";
    header('location:requests.php');
?>