<?php 
if(!isset($_SESSION)){
	session_start();
}
error_reporting(0);
include('../Student/stuInclude/header.php');
include_once('../dbconnection.php');

	if (isset($_SESSION['is_login'])) {
		$stuemail = $_SESSION['stuLogEmail'];
	}else{
		echo "<script>location.href='../index.php';</script>";
	}
	$sql = "SELECT * FROM student WHERE stu_email='$stuemail'";
	$result = $conn->query($sql);
	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$stuId = $row["stu_id"];
		$stuName = $row["stu_name"];
		$stuOcc= $row["stu_occ"];
		$stuImg = $row["stu_img"];
	}

	if(isset($_REQUEST['updateStuNameBtn'])){
		if (($_REQUEST['stuName'] == "")) {
			$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds</div>';
		}else{
			$stuName = $_REQUEST['stuName'];
			$stuOcc = $_REQUEST['stuOcc'];
			$stu_image =  addslashes(file_get_contents($_FILES['stuImg']['tmp_name']));

			$sql = "UPDATE student SET stu_name = '$stuName', stu_occ= '$stuOcc', stu_img= '$stu_image' WHERE stu_email = '$stuemail'";
			if ($conn->query($sql) == TRUE) {
				$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
			}else{
				$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
			}
		}
	}
if(isset($_FILES['stuImg'])){
	$file_name = $_FILES['stuImg']['name'];
	$file_size = $_FILES['stuImg']['size'];
	$file_tmp = $_FILES['stuImg']['tmp_name'];
	$file_type = $_FILES['stuImg']['type'];
	move_uploaded_file($file_tmp,"image/Stu/".$file_name);
}


?>

<div class="col-sm-6" style="margin-top:40px;">
	<form class="mx-5" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stuId">Student Id</label>
			<input type="text" class="form-control" id="stuId" name="stuId" value=" <?php if(isset($stuId
			)){echo $stuId; } ?>" readonly>
		</div>
		<div class="form-group">
			<label for="stuemail">Email</label>
			<input type="email" class="form-control" id="stuemail" name="stuemail" value=" <?php if(isset($stuemail)){echo $stuemail; } ?>" readonly>
		</div>
		<div class="form-group">
			<label for="stuName">Name</label>
			<input type="text" class="form-control" id="stuName" name="stuName" value=" <?php if(isset($stuName)){echo $stuName; } ?>">
		</div>
		<div class="form-group">
			<label for="stuOcc">Occupation</label>
			<input type="text" class="form-control" id="stuOcc" name="stuOcc" value=" <?php if(isset($stuOcc
			)){echo $stuOcc; } ?>" >
		</div>
		<div class="form-group">
			<label for="stuImg">Upload image</label>
			<input type="file" class="form-control" id="stuImg" name="stuImg">
			
		</div>
		<button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>
		<?php if(isset($passmsg)) {echo $passmsg;} ?>
	</form>
</div>
<?php 
include('../Student/stuInclude/footer.php');

?>