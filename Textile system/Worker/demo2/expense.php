<?php 
session_start();
$sidebar = "exw";
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
	<div class="card-title"> Add Expense</div>
	<div class="card-body">
<?php 
include('db.php');
if(isset($_POST['add'])){
$ename=$_POST['ename'];
$edec=$_POST['edec'];
$date=date('y/m/d');
$amount=$_POST['amount'];
$email=$_POST['email'];
$result=mysqli_query($con,"insert into expense(ename,edec,date,amount,workeremail)values('$ename','$edec','$date','$amount','$email')");
if($result==1)
{
	echo '<script>alert("Expense is successfully added in database!!!")</script>';
}
else{
	echo "something went wrong";
}
}	
?>
<div class="row">
	<div class="col-md-6 col-lg-4">
</div>
<form method="POST" action="expense.php" enctype= multipart/form-data>
	<div class="form-group">
												<label for="exampleFormControlSelect1">Expense Name</label>
											<input type="text" name="ename" class="form-control" placeholder="Tea etc...." required>
											</div>
												
												<div class="form-group">
												<label for="address">Description</label>
											<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">Describe</span>
													</div>
												<textarea class="form-control" aria-label="With textarea" name="edec"></textarea>
												</div>
											</div>
											
								<div class="form-group">
												<label for="exampleFormControlSelect1">Amount</label>
												<input type="text" name="amount" class="form-control" placeholder="Rs. 200" required>
											</div>
											<div class="form-group">
												<label for="exampleFormControlSelect1">Email</label>
												<input type="email" name="email" class="form-control" placeholder="eg.xyz@gmail.com" required>
											</div>
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



