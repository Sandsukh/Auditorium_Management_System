<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3 style="color:white;" class="text-center">BOOKING HISTORY</h3>
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from tbl_bookings where user_id='".$_SESSION['user']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table class="table table-bordered">
						<thead>
						<th>Booking Id</th>
						<th>Event</th>
						<th>Seats</th>
						<th>Amount</th>
						<th></th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$e=mysqli_query($con,"select * from tbl_event where event_id='".$bkg['event_id']."'");
							$ev=mysqli_fetch_array($e);
							?>
							<tr>
								<td>
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td>
									<?php echo $ev['event_name'];?>
								</td>
								<td>
									<?php echo $bkg['no_tickets'];?>
								</td>
								<td>
									Rs. <?php echo ($bkg['no_tickets']*$ev['t_price']);?>
								</td>
								<td>
									<a href="cancel.php?id=<?php echo $bkg['book_id'];?>" style="text-decoration:none; color:red;">Cancel</a>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3 style="color:red;" class="text-center">No Previous Bookings Found!</h3>
					<p>Once you start booking tickets with this account, you'll be able to see all the booking history.</p>
					<?php
				}
				?>
					</div>			
				
				
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>
