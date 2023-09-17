<?php
include('header.php');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event Organizer Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="add_theater.php">Add Event Organizer</a></li>
        <li class="active">Event Organizer Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
         <div class="box-header with-border">
              <h3 class="box-title">General Details</h3>
            </div>
        <div class="box-body">
          <?php
            $th=mysqli_query($con,"select * from tbl_e_organizer where id='".$_GET['id']."'");
            $theatre=mysqli_fetch_array($th);
          ?>
            <table class="table table-bordered table-hover">
                <tr>
                    <td class="col-md-6">Name</td>
                    <td  class="col-md-6"><?php echo $theatre['name'];?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $theatre['address'];?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?php echo $theatre['phone'];?></td>
                </tr>
                
            </table>
        </div> 
        <!-- /.box-footer-->
      </div>
         