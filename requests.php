<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
    $user=mysqli_fetch_array($us);
	?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder;      
  ?> 
  </div>
	<div class="wrap">
	 <section class="content-header">
      <h1 style="color:white">
        Make Your Request to Book The Hall Here!!!!
      </h1>
    </section>
	<section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
          <?php include('msgbox.php');?>
          <form action="process_requests.php" method="post" enctype="multipart/form-data" id="form1">
            <div class="form-group">
              <label class="control-label">User Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $user['name'];?>"/>
            </div>
			<div class="form-group">
              <label class="control-label">Enter the Date you request to Book the Hall </label>
              <input type="date" name="rdate" class="form-control"/>
              <?php $frm->validate("rdate",array("required","label"=>"Release Date")); // Validating form using form builder written in form.php ?>
            </div>
			<div class="form-group">
              <label class="control-label">Enter the Time you request to Book the Hall </label>
              <input type="time" name="rtime" class="form-control"/>
              <?php $frm->validate("time",array("required","label"=>"Start Time")); // Validating form using form builder written in form.php ?>
            </div>
            <div class="form-group">
              <label class="control-label">Your Request</label>
              <textarea name="desc" class="form-control" rows="5"></textarea>
              <?php $frm->validate("desc",array("required","label"=>"Description")); // Validating form using form builder written in form.php ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Request Now!!!</button>
            </div>
          </form>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
	</div>
	<?php include('footer.php');?>