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

if(isset($_REQUEST['requpdate'])){
	if(($_REQUEST['course_name'] == "") && ($_REQUEST['course_desc'] == "") && ($_REQUEST['course_author'] == "") && ($_REQUEST['course_duration'] == "") && ($_REQUEST['course_original_price'] == "") && ($_REQUEST['course_price'] == "")){
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>';
	}else{
		$cid = $_REQUEST['course_id'];
		$cname = $_REQUEST['course_name'];
		$course_desc = $_REQUEST['course_desc'];
		$cauthor  = $_REQUEST['course_author'];
		$cduration = $_REQUEST['course_duration'];
		$cprice = $_REQUEST['course_price'];
		$coriginal_price = $_REQUEST['course_original_price'];
		$course_img = addslashes(file_get_contents($_FILES['course_img']['tmp_name']));

		$sql = "UPDATE course SET course_id='$cid ', course_name='$cname', course_desc='$course_desc', course_author='$cauthor', course_duration='$cduration', course_price='$cprice', course_original_price='$coriginal_price', course_img='$course_img' WHERE course_id='$cid'";
		if($conn->query($sql) == TRUE){
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
		}else{
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
		}
	}
}
if(isset($_FILES['course_img'])){
	$file_name = $_FILES['course_img']['name'];
	$file_size = $_FILES['course_img']['size'];
	$file_tmp = $_FILES['course_img']['tmp_name'];
	$file_type = $_FILES['course_img']['type'];
	move_uploaded_file($file_tmp,"../image/courseing/".$file_name);
}



?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update Courses Details</h3>

	<?php 
	if(isset($_REQUEST['view'])){
		$sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_id">Course Id</label>
			<input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) { echo $row['course_id']; } ?>">
		</div>
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) { echo $row['course_name']; } ?>">
		</div>
		<div class="form-group">
			<label for="course_desc">Course Descriptionn</label>
			<textarea class="form-control" id="course_desc" name="course_desc" row="2"><?php if(isset($row['course_desc'])) { echo $row['course_desc']; } ?></textarea>
		
		</div>
		<div class="form-group">
			<label for="course_author">Author</label>
			<input type="text" class="form-control" id="course_author" name="course_author" value="<?php if(isset($row['course_author'])) { echo $row['course_author']; } ?>">
		</div>
		<div class="form-group">
			<label for="course_duration">Course Duration</label>
			<input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if(isset($row['course_duration'])) { echo $row['course_duration']; } ?>">
		</div>
		<div class="form-group">
			<label for="course_original_price">Course Original Price</label>
			<input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if(isset($row['course_original_price'])) { echo $row['course_original_price']; } ?>">
		</div>
		<div class="form-group">
			<label for="course_price">Course Selling Price</label>
			<input type="text" class="form-control" id="course_price" name="course_price" value="<?php if(isset($row['course_price'])) { echo $row['course_price']; } ?>">
		</div>
		<div class="form-group">
			<label for="course_img">Course image</label>
			<?php if (isset($row['course_img'])) {
			 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['course_img']).'"class="img-thumbnial card-img-top" alt=""  />'; }?>
			<input type="file" class="form-control-file mt-3" id="course_img" name="course_img">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
			<a href="courses.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($msg)) {echo $msg;} ?>
	</form>
</div>


<?php 
include("admininclude/footer.php");
?>