<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from tbl_event where event_id='".$_SESSION['event']."'");
	$event=mysqli_fetch_array($qry2);
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
						<h3><?php echo $event['event_name']; ?></h3>	
							<div class="text-center">	
									<img src="<?php echo $event['image']; ?>" alt="" width="400" height="500" />
								</div>
								<div class="clear"></div>
							</div>
							<table class="table table-bordered text-center">
									<tr>
										<td class="col-md-6">
											Event
										</td>
										<td>
											<?php echo $event['event_name'];?>
										</td>
										</tr>
										<tr>
											<td>
												Date
											</td>
										<td>
											<?php echo date($event['date']);?>
										</td>
									</tr>
									<tr>
										<td>
											Start Time
										</td>
										<td>
											<?php echo date('h:i A',strtotime($event['start_time']));?>
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<?php 
											$av=mysqli_query($con,"select sum(no_tickets) from tbl_bookings where event_id='".$_SESSION['event']."'");//no of sold tickets
											$avl=mysqli_fetch_array($av);
											?>
											<form  action="process_booking.php" method="post">
												<input type="hidden" name="event" value="<?php echo $event['event_id'];?>"/>
											<input type="number" required tile="Number of Seats" max="<?php echo $event['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
											<input type="hidden" name="amount" id="hm" value="<?php echo $event['t_price'];?>"/>
											<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
									</tr>
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">
											Rs <?php echo $event['t_price'];?>
										</td>
									</tr>
									<tr>
										<td colspan="2"><?php if($avl[0]==$event['seats']){?><button type="button" class="btn btn-danger" style="width:100%;background-color:red">House Full</button><?php } else { ?>
										<button class="btn btn-info" style="width:100%">Book Now</button>
										<?php } ?>
										</form></td>
									</tr>
						<table>
							<tr>
								<td></td>
							</tr>
						</table>
					</div>			
				
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>
<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $event['t_price'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>
