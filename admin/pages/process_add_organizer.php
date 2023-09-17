<?php
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"insert into  tbl_e_organizer values(NULL,'$name','$address','$mail','$phone')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into  tbl_login values(NULL,'$id','$username','$password','1')");
    header('location:add_organizer_2.php?id='.$id);
?>