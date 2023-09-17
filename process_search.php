<?php include('header.php');
extract($_POST);
?>
</div>
<div class="content">
	<?php 
	// print_r($rs);
	?>
	<div class="wrap">
		<div class="content-top">
			<h3>Events</h3>
			
			<?php
          	 $today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select DISTINCT event_name,event_id,image from tbl_event where event_name='".$search."'");
						
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  	
						  		<a href="about.php?id=<?php echo $m['event_id'];?>" rel="lightbox"><img src="<?php echo $m['image'];?>" alt="" width="300" height="400"/></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="about.php?id=<?php echo $m['event_id'];?>"><?php echo $m['event_name'];?></a></h4>
						  		
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
			<?php include('footer.php');?>
