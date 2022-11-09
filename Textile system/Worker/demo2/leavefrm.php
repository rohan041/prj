<?php 
session_start();
$sidebar = "lev";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
?>
<div class="main-panel">
			<div class="content">
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
	<div class="card-title"> Add Leave</div>
	<div class="card-body">
<?php 
include('db.php');
if(isset($_POST['add'])){
$leavename=$_POST['leavename'];
$leavetype=$_POST['leavetype'];
$leavedsc=$_POST['leavedsc'];
$stdate=date('y/m/d');
$enddate=date('y/m/d');
$days=$_POST['days'];
/*$email=$_POST[''];*/

$img = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$size = $_FILES["image"]["size"];
$temp = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
//move_uploaded_file($temp,'images/'.$namee);
move_uploaded_file($temp,'images/'.$img);
$result=mysqli_query($con,"insert into leaveform(leavename,leavetype,leavedsc,stdate,enddate,days,leaveimg)values('$leavename','$leavetype','$leavedsc',$stdate','$enddate','$days','$img')");
if($result==1)
{
	echo '<script>alert("Leave add is successfully  in database!!!")</script>';
}
else{
	echo "something went wrong";
}
}	
?>
<div class="row">
	<div class="col-md-6 ml-auto mr-auto">

<form method="POST" action="leavefrm.php" enctype= multipart/form-data>
	<div class="form-group">
												<label for="exampleFormControlSelect1">Leave Name</label>
											<input type="text" name="leavename" class="form-control" placeholder="Medical" required>
											</div>
												<div class="form-group">
												<label for="exampleFormControlSelect1">Leave Type</label>
										<select class="form-control" id="exampleFormControlSelect1" name="leavetype">
											<option required value="none">Select Leave Type</option>
													<option>Personal</option>	
													<option>Vaction</option>	
													<option>Emerengcy	</option>
													<option>Medical</option>
													<option>Other</option>
												
														
												</select>
											</div>

												<div class="form-group">
												<label for="address">Description</label>
											<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">Describe</span>
													</div>
												<textarea class="form-control" aria-label="With textarea" name="leavedsc"></textarea>
												</div>
											</div>
											






    

                      <div class="row">
                      <div class="col">
                      <div class="form-group">
                                   <label for="birth date">From Date</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                      <input type="Date" class="form-control" name="stdate" min="1940-12-31">
                        </div>
                    </div></div>
 

                     

                    <div class="col">
                      <div class="form-group">
                                   <label for="birth date">To Date</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                      <input type="Date" class="form-control" name="enddate" min="1940-12-31">
                        </div>
                      



</div></div></div>






								<div class="form-group">
												<label for="exampleFormControlSelect1">Days</label>
												<input type="text" name="days" class="form-control" required>
											</div>
										<div class="form-group">
												<label for="exampleFormControlFile1">Upload  Photo</label>
												<input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
								
											</div>

											 <div class="col-md-6 ml-auto mr-auto">
								<div class="card-action">
									<button class="btn btn-success" name="add">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div></div>
								</form>
						
	</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



