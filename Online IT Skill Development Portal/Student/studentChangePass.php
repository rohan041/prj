<?php 
if(!isset($_SESSION)){
	session_start();
}
include('../Student/stuInclude/header.php');
include_once('../dbconnection.php');

	if (isset($_SESSION['is_login'])) {
		$stuemail = $_SESSION['stuLogEmail'];
	}else{
		echo "<script>location.href='../index.php';</script>";
	}

	$stuemail = $_SESSION['stuLogEmail'];
	if(isset($_REQUEST['stuPassUpdateBtn'])){
		if(($_REQUEST['stuNewPass'] == "")){
			$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds</div>';
		}else{
			$sql = "SELECT * FROM student WHERE stu_email='$stuemail'";
			$result = $conn->query($sql);
			if($result->num_rows == 1){
				$stuPass = md5($_REQUEST['stuNewPass']);
				$sql = "UPDATE student SET stu_pass = '$stuPass' WHERE stu_email = '$stuemail'";
				if($conn->query($sql) == TRUE){
					$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updateds SuccessFully</div>';
				}else{
					$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
				}
			}
		}
	}
?>

<div class="col-sm-9 mt-5">
	<div class="row">
		<div class="col-sm-6">
			<form class="mt-5 mx-5" method="POST" action="">
				<div class="form-group">
					<label for="inputEmail">Email</label>
					<input type="email" class="form-control" id="inputEmail" value="<?php echo $stuemail ?>" readonly>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="inputnewpassword" name="stuNewPass" placeholder="New Password">
				</div>

			<button type="submit" class="btn btn-danger mr-4 mt-4" id="stuPassUpdateBtn" name="stuPassUpdateBtn">Update</button>
				<button type="reset" class="btn btn-secondary mt-4">Reset</button>
		<?php if(isset($passmsg)) {echo $passmsg;} ?>
			</form>
		</div>
	</div>
</div>