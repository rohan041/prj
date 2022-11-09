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



if(isset($_REQUEST['courseSubmitBtn'])){
	 if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_original_price'] == "") || ($_REQUEST['course_price'] == "") || ($_FILES['course_img'] ['name'] == "" )){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>'; 
    }else{
		$course_name = $_REQUEST['course_name'];
		$course_desc = $_REQUEST['course_desc'];
		$course_author = $_REQUEST['course_author'];
		$course_duration = $_REQUEST['course_duration'];
		$course_price = $_REQUEST['course_price'];
		$course_original_price = $_REQUEST['course_original_price'];
		$course_img = addslashes(file_get_contents($_FILES['course_img']['tmp_name']));

		$sql = "INSERT INTO `course`(`course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES('$course_name', '$course_desc', '$course_author','$course_img', '$course_duration', '$course_price', '$course_original_price')";
		if ($conn->query($sql) == TRUE) {
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Successfully</div>';
		}else {
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add Course</div>';
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
	<h3 class="text-center">Add New Courses</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" class="form-control" id="course_name" name="course_name" placeholder="Course Name">
		</div>
		<div class="form-group">
			<label for="course_desc">Course Descriptionn</label>
			<input type="text" class="form-control" id="course_desc" name="course_desc" placeholder="Course Descriptionn">
		</div>
		<div class="form-group">
			<label for="course_author">Author</label>
			<input type="text" class="form-control" id="course_author" name="course_author" placeholder="Course Author">
		</div>
		<div class="form-group">
			<label for="course_duration">Course Duration</label>
			<input type="text" class="form-control" id="course_duration" name="course_duration" placeholder="Course Duration">
		</div>
		<div class="form-group">
			<label for="course_original_price">Course Original Price</label>
			<input type="text" class="form-control" id="course_original_price" name="course_original_price" placeholder="Course Original Price">
		</div>
		<div class="form-group">
			<label for="course_price">Course Selling Price</label>
			<input type="text" class="form-control" id="course_price" name="course_price" placeholder="Course Selling Price">
		</div>
		<div class="form-group">
			<label for="course_img">Course image</label>
			<input type="file" class="form-control" id="course_img" name="course_img">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
			<a href="courses.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($msg)) {echo $msg;} ?>
	</form>
</div>


<?php 
include("admininclude/footer.php");
?>