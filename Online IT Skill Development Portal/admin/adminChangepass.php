<?php 
if(!isset($_SESSION)){
	session_start();
}
include("admininclude/header.php");
include("../dbconnection.php");

if(isset($_SESSION['is_admin_login'])){
	$adminEmail = $_SESSION['adminlogemail'];
}else{
	echo "<script> location.href='../index.php'; </script>";
}
$adminEmail = $_SESSION['adminlogemail'];
if(isset($_REQUEST['adminchangepass'])){
	if(($_REQUEST['adminpass'] == "")){
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>';
	}else{
		$sql = "SELECT * FROM admin WHERE admin_email='$adminEmail'";
		$result = $conn->query($sql);
		if ($result->num_rows  == 1) {
			$adminpass = md5($_REQUEST['adminpass']);
			$sql = "UPDATE admin SET admin_pass='$adminpass' WHERE admin_email = '$adminEmail'";
			if($conn->query($sql) == TRUE){
				$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully</div>';
			}else{
				$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';
			}
		}

	}
}
?>


<div class="col-sm-9 mt-5">
	<div class="row">
		<div class="col-sm-6">
			<form class="mt-5 mx-5">
				<div class="form-group">
					<label for="inputEmail">Email</label>
					<input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo $adminEmail ?>" readonly>
				</div>
				<div class="form-group">
					<label for="adminpass">Password</label>
					<input type="password" class="form-control" id="adminpass" name="adminpass" placeholder="New Password">
				</div>

			<button type="submit" class="btn btn-danger mr-4 mt-4" id="adminchangepass" name="adminchangepass">Update</button>
				<button type="reset" class="btn btn-secondary mt-4">Reset</button>
		<?php if(isset($passmsg)) {echo $passmsg;} ?>
			</form>
		</div>
	</div>
</div>