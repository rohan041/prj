<?php 
$sidebar = "dash";
include('include/header.php');
include('include/navbar2.php');

?>

	<div class="main-panel">
			<div class="content">
<div class="page-inner">

			<div class="card">
				<div class="card-header">
	<div class="card-title"> Edit Profile</div>
	<div class="card-body">


<?php 
include('db.php');
if(isset($_POST['add'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];

$result=mysqli_query($con,"insert into admin(name,email,mob)values('$name','$email','$mob')");
if($result==1)
{
	echo '<script> swal({
						title: "Design update Successfully",
						text: "",
						icon: "success",
						buttons: {
							confirm: {
								text: "OK",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
				</script>';
}
else{
	echo "something went wrong";
}
}	
?>



<div class="row">
	<div class="col-md-4 ml-auto mr-auto">

											<div class="form-group">
												<label for="email2">Name</label>
												<input type="email" name="name" class="form-control" id="email2" placeholder="" required>
												<!---<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>--->
											</div>
											<div class="form-group">
												<label for="password">Email Address</label>
												<input type="email" name="email" class="form-control" id="password" placeholder="Email Address">
												<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
											</div>
											<div class="form-group">
												<label for="email2">Contact No</label>
												<input type="email" name="mob" class="form-control" id="email2" placeholder="">
												
											</div>

<div class="card-action">
									<button class="btn btn-success" name="add">Update</button>
									<button class="btn btn-danger">Cancel</button>
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
</div>








<?php   
    
    include('include/scripts.php');
    
    ?>