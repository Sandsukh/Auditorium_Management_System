<?php
include('header.php');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Requests to Book the Hall
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Requests</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recent Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-2">Requested Date</th>
				  <th class="col-md-2">Requested Time</th>
				  <th class="col-md-2">Username</th>
				  <th class="col-md-2">Email</th>
				  <th class="col-md-2">Phone</th>
                  <th class="col-md-4">Description</th>
                  
                </tr>
                <?php 
					$qry8=mysqli_query($con,"select * from tbl_reservations");
					$no=1;
					while($r=mysqli_fetch_array($qry8))
					{
							
					?>
					<tr>
					<td><?php echo $no;?></td>
					<td><span class="badge bg-green"><?php echo $r['r-date'];?></span></td>
					<td><span class="badge bg-light-blue"><?php echo $r['r_time'];?></span></td>
					<?php $qry9=mysqli_query($con,"select * from tbl_registration where user_id='".$r['u_id']."'");
					$u=mysqli_fetch_array($qry9);
					?>
					<td><?php echo $u['name'];?></td>
					<td><?php echo $u['email'];?></td>
					<td><?php echo $u['phone'];?></td>
					<td><?php echo $r['request'];?></td>
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