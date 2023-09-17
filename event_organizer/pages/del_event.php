<?php
session_start();
include('../../config.php');

$eid=$_GET['eid'];
mysqli_query($con,"DELETE FROM tbl_event WHERE event_id='$eid'");
 $_SESSION['success']="Event Deleted";
header("location:view_event.php");
?>