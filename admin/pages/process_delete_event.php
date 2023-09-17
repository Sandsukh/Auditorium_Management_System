<?php
session_start();
include('../../config.php');

$eid=$_GET['eid'];
mysqli_query($con,"delete  from tbl_event where event_id='$eid'");
 $_SESSION['success']="Event deleted  successfully";
header("location:index.php");
?>