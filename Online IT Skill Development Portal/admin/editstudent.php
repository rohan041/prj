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

if(isset($_REQUEST['stuupdate'])){
	if(($_REQUEST['stu_id'] == "") && ($_REQUEST['stu_name'] == "") && ($_REQUEST['stu_email'] == "") && ($_REQUEST['stu_pass'] == "") && ($_REQUEST['stu_occ'] == "")){
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>';
	}else{
		$stu_id = $_REQUEST['stu_id'];
		$stu_name = $_REQUEST['stu_name'];
		$stu_email = $_REQUEST['stu_email'];
		$stu_pass = $_REQUEST['stu_pass'];
		$stu_occ = $_REQUEST['stu_occ'];

		$sql = "UPDATE student SET stu_id='$stu_id', stu_name='$stu_name', stu_email='$stu_email', stu_pass='$stu_pass', stu_occ='$stu_occ' WHERE stu_id='$stu_id'";
		if($conn->query($sql) == TRUE){
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
		}else{
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
		}
	}
}


?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update Courses Details</h3>

	<?php 
	if(isset($_REQUEST['view'])){
		$sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stu_id">Course Id</label>
			<input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])) { echo $row['stu_id']; } ?>" readonly >
		</div>
		<div class="form-group">
			<label for="stu_name">Name</label>
			<input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])) { echo $row['stu_name']; } ?>">
		</div>
		<div class="form-group">
			<label for="stu_email">Email</label>
			<input type="email" class="form-control" id="stu_email" name="stu_email" value="<?php if(isset($row['stu_email'])) { echo $row['stu_email']; } ?>">
		</div>
		<div class="form-group">
			<label for="stu_pass">Password</label>
			<input type="password" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row['stu_pass'])) { echo $row['stu_pass']; } ?>">
		</div>
		<div class="form-group">
			<label for="stu_occ">Occupation</label>
			<input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php if(isset($row['stu_occ'])) { echo $row['stu_occ']; } ?>">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="stuupdate" name="stuupdate">Update</button>
			<a href="student.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($msg)) {echo $msg;} ?>
	</form>
</div>


<?php 
include("admininclude/footer.php");
?>