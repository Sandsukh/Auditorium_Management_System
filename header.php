<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Colombo');
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Auditorium managing Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" /><!-- remove if -->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
	<link rel="stylesheet" href="css/styles.css">
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	
</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><span><img src="images/logo.png" widith="40" height="40">U</span>O<span>K</span></a>

    <nav class="navbar">
        <a href="index.php">
		Home</a>
        <a href="requests.php">Reservations</a>
        <?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?><i class="fa fa-user"></i></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login<i class="fa fa-user"></i></a><a href="registration.php">Register</a><?php }?>
    </nav>
	
	
    <div id="menu-bars" class="fas fa-bars"></div>
	

</header>

<!-- header section ends -->
<div class="block" align="right">
	<div class="wrap">
		
        <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Enter an Event Name" style="height:30px;width:300px"  required id="search111" name="search">
                                
                                <input type="submit" value="Search" class="btn" id="button111">
    </div>       	

		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>
</div>
   	

<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter event name...");
            return false;
        }
    else{
        return true;
    }
    </script>
}