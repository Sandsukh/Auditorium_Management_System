<?php include('header.php');
	$qry2=mysqli_query($con,"select * from tbl_event where event_id='".$_GET['id']."'");
	$event=mysqli_fetch_array($qry2);
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				
						<h3 style="color:#f7b731; font-size:30px;" class="text-center"><?php echo $event['event_name']; ?></h3>	
							<div class="about-top">	
								<div class="text-center">
									<img src="<?php echo $event['image']; ?>" alt="" width="400" height="500"/>
								</div>
								<div class="desc span_3_of_2">
									<p style="font-size:23px"><b>Date : </b><?php echo date('d-M-Y',strtotime($event['date'])); ?></p>
									<p style="font-size:23px"><b>Time : </b><?php echo date('h:i A',strtotime($event['start_time']));?></p>
									<p style="font-size:15px;color:white;"><?php echo $event['desc']; ?></p>
								</div>
								<div class="clear"></div>
							</div>
		
							<table class="table  table-bordered text-center">
								<h3 style="color:red;" class="text-center">Book Tickets!!!</h3>

								<thead>
										<tr>
											<th class="text-center" style="font-size:16px;"><b>Event</b></th>
											<th class="text-center" style="font-size:16px;"></th>
										</tr>
									</thead>
									

									<tbody>
									<tr>
										<td >
											<?php echo $event['event_name']?>
										</td>
										<td>
												
												<a href="check_login.php?&event=<?php echo $event['event_id'];?>"><button class="btn btn-default">Click Here to Book Tickets</button></a>
												
										</td>
									</tr>
									</tbody>
								
						</table>
							
					
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>