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

 function convator($val)
{
	$len = strlen($val);
	$output = "";
	for ($i=0; $i < $len; $i++) { 
		if ($val[$i] == "<") {
			$output .= "<span>&lt;</span>";
		}else if ($val[$i] == ">") {
			$output .= "<span>&gt;</span>";
		}else{
			$output .= $val[$i];
		}
	}
	return $output;
}

if(isset($_REQUEST['requpdate'])){
	if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['lesson_example'] == "")  || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>';
	}else{

		$lid = $_REQUEST['lesson_id'];
		$lesson_name = $_REQUEST['lesson_name'];
		$lesson_desc = $_REQUEST['lesson_desc'];
		$lession_example = convator($_REQUEST['lesson_example']);
		$course_id = $_REQUEST['course_id'];
		$course_name = $_REQUEST['course_name'];
		$lesson_link = $_FILES["lesson_link"]["name"];
		$lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
		$link_folder ='../video/'.$lesson_link;
		move_uploaded_file($lesson_link_temp, $link_folder);
		

		$sql = "UPDATE lesson SET lesson_id='$lid ', lesson_name='$lesson_name', lesson_desc='$lesson_desc', course_id='$course_id', course_name='$course_name', lesson_link='$link_folder', lesson_example='$lession_example' WHERE lesson_id='$lid'";
		if($conn->query($sql) == TRUE){
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
		}else{
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
		}
	}
}


?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update lesson Details</h3>

	<?php 
	if(isset($_REQUEST['view'])){
		$sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="lesson_id">Lesson Id</label>
			<input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php if(isset($row['lesson_id'])) { echo $row['lesson_id']; } ?>" readonly>
		</div>
		<div class="form-group">
			<label for="lesson_name">Course Name</label>
			<input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php if(isset($row['lesson_name'])) { echo $row['lesson_name']; } ?>">
		</div>
		<div class="form-group">
			<label for="lesson_desc">Course Descriptionn</label>
			<textarea class="form-control" id="lesson_desc" name="lesson_desc" row="2"><?php if(isset($row['lesson_desc'])) { echo $row['lesson_desc']; } ?></textarea>
		
		</div>
		<div class="form-group">
			<label for="course_id">Course ID</label>
			<input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) { echo $row['course_id']; } ?>" readonly
			>
		</div>
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) { echo $row['course_name']; } ?>">
		</div>
		<div class="form-group">
			<label for="lesson_link">Lesson Link</label>
			<iframe class="embed-responsive-item"  src="<?php if(isset($row['lesson_link'])) { echo $row['lesson_link']; } ?>" alt="" ></iframe>
			<input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
		</div>
		<div class="form-group">
            <label for="lesson_example">Lesson Example</label>
            <textarea  type="text" class="form-control" placeholder="Lesson Example" rows="7" cols="50" id="lesson_example" name="lesson_example" value=""><?php if(isset($row['lesson_example'])) { echo $row['lesson_example']; } ?></textarea>
        </div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
			<a href="lessons.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($msg)) {echo $msg;} ?>
	</form>
</div>


<?php 
include("admininclude/footer.php");
?>