<?php 
$sidebar = "stocks";
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
	<div class="card-title"> Add New Thread</div>
	<div class="card-body">
	<?php 
include('db.php');
if(isset($_POST['add'])){
$threadname=$_POST['threadname'];
$colorcode=$_POST['colorcode'];
$type=$_POST['type'];
$totalstock=$_POST['totalstock'];
$result=mysqli_query($con,"insert into stock(threadname,colorcode,type,totalstock)values('$threadname','$colorcode','$type','$totalstock')");
if($result==1)
{
	echo '<script> swal({
						title: "Thread Added Successfully",
						text: "",
						icon: "success",
						buttons: {
							confirm: {
								text: "OK",
								value: false,
								visible: false,
								className: "btn btn-success",
								closeModal: false
							}
						}
					}); </script>';
					echo "<script>setTimeout(\"location.href = 'Thread.php'\",1550);</script>";
}
else{
	echo "something went wrong";
}
}	
?>
<div class="row">
	<div class="col-md-6 col-lg-4">
</div>
<form method="POST" action="addthread.php">
											<div class="form-group">
												<label for="email2">Thread Name</label>
												<input type="text" name="threadname" class="form-control" placeholder="Thread Name" required>
												
											</div><br>	
												<div class="form-group">
												<label for="exampleFormControlFile1">Thread Color Code</label>
												<input type="text" name="colorcode" class="form-control" placeholder="Thread Color Code" required>
											</div>
								<br>
								<div class="form-group">
												<label for="exampleFormControlSelect1">Type</label>
												<input type="text" name="type" class="form-control" placeholder="Type" required>
											</div>
											<div class="form-group">
												<label for="exampleFormControlSelect1">Thread Stcok</label>
												<input type="number" name="totalstock" class="form-control" placeholder="Thread stock" required>
											</div>
<br>
											
									<div class="card-action">
									<button class="btn btn-success" name="add">Add</button>
									<button class="btn btn-danger">Cancel</button>
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


