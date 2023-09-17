<?php
include('header.php');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event Assistance
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Upcoming Events</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-3">Date</th>
				  <th class="col-md-3">Start Time</th>
                  <th class="col-md-4">Event</th>
                  <th class="col-md-4">No.of sold tickets</th>
                </tr>
                <?php 
					$qry8=mysqli_query($con,"select * from tbl_event where o_id='".$_SESSION['EO']."'");
					$no=1;
					while($en=mysqli_fetch_array($qry8))
					{
						$st=0;
						$qry9=mysqli_query($con,"select * from tbl_bookings where event_id='".$en['event_id']."'");
						
						while($bk=mysqli_fetch_array($qry9))
						{
							$st=$st+$bk['no_tickets'];
						}
							
					?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><span class="badge bg-green"><?php echo $en['date'];?></span></td>
				  <td><span class="badge bg-light-blue"><?php echo $en['start_time'];?></span></td>
                  <td><?php echo $en['event_name'];?></td>
				  <td><span class="badge bg-red"><?php echo $st;?></span></td>
                  </tr>
                  <?php
					       $no=$no+1;
					  
					}
                  ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            
            
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <?php
include('footer.php');
?>