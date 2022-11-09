<?php 
session_start();
$name1 = $_SESSION['name'];
$sidebar = "stockw";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
    

?>
<?php 
include('db.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$dec=$_POST['dec'];
$mac=$_POST['mac'];
$img = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$size = $_FILES["image"]["size"];
$temp = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
//move_uploaded_file($temp,'images/'.$namee);
move_uploaded_file($temp,'images/'.$img);
$result=mysqli_query($con,"insert into inquiry(workername,inquiryname,description,machine,inquiryimage)values('$name1','$name','$dec','$mac','$img')");
if($result==1)
{
	echo "something went wrong
				";
	header("location:inquiryw.php");

}
else{
	echo "something went wrong";
}
}else{
	
?>
<div class="main-panel">
			<div class="content">
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
	<div class="card-title"> Inquiries</div>
	<div class="card-body">
		
<div class="row">
	<div class="col-md-6 ml-auto mr-auto">
					
											
		<form method="POST" action="Inquiryw.php" enctype= multipart/form-data>						
<div class="form-group">
	<label for="email2">Inquiry Name</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user"></i>
													</span>
													<input type="text" class="form-control" placeholder="Name"
													name="name" required>
												</div>
											</div>
									
										
											<div class="form-group">
												<label for="email2"> Descripition</label>
											<div class="input-group">

													<div class="input-group-prepend">
														<span class="input-group-text">Describe</span>
													</div>
													<textarea class="form-control" aria-label="With textarea" name="dec" required></textarea>
												</div>
											</div>




											<div class="form-group">
												<label for="exampleFormControlSelect1">Which Machine</label>
												<select class="form-control" id="exampleFormControlSelect1" name="mac">
													<option vavalue="1"lue="1">0</option>
													<option value="2">1</option>	
													<option value="3">2	</option>
													<option value="4">3	</option>
													<option value="5">4	</option>
													<option value="6">5	</option>
												</select>
											</div>




												<div class="form-group">
												<label for="exampleFormControlFile1">Upload  Photo</label>
												<input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
								<!---small id="emailHelp2" class="form-text text-muted">Chooese only jpeg formet</small>---->
											</div>
											
											
									<div class="card-action">
									<button name="submit" class="btn btn-success">Submit</button>
									<a href="Inquiryw.php"><button class="btn btn-danger">Cancel</button></a>
								</div>

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
<?php } ?>





