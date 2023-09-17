<?php
    session_start();
    include('../../config.php');
    extract($_POST);
    
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
    $flname="images/".basename($_FILES["image"]["name"]);
    
    mysqli_query($con,"insert into  tbl_event values(NULL,'".$_SESSION['EO']."','$name','$desc','$rdate','$time','$seats','$t_price','$flname')");
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    $_SESSION['success']="Event Added";
    header('location:add_event.php');
?>