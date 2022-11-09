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

if(isset($_REQUEST['artupdate'])){
	if(($_REQUEST['title'] == "") && ($_REQUEST['article_desc'] == "") ($_REQUEST['detail'])){
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>';
	}else{
		$aid = $_REQUEST['Id'];
		$atitle = $_REQUEST['title'];
		$article_desc = $_REQUEST['article_desc'];
        $articledetail = $_REQUEST['detail'];
		$article_img = addslashes(file_get_contents($_FILES['Image']['tmp_name']));

		$sql = "UPDATE article SET Id='$aid ', Title='$atitle', article_desc='$article_desc', article_details ='$articledetail',Image='$article_img' WHERE Id='$aid'";
		if($conn->query($sql) == TRUE){
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
		}else{
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
		}
	}
}
if(isset($_FILES['Image'])){
	$file_name = $_FILES['Image']['name'];
	$file_size = $_FILES['Image']['size'];
	$file_tmp = $_FILES['Image']['tmp_name'];
	$file_type = $_FILES['Image']['type'];
	move_uploaded_file($file_tmp,"../image/Article/".$file_name);
}



?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Update Article Details</h3>

	<?php 
	if(isset($_REQUEST['view'])){
		$sql = "SELECT * FROM article WHERE Id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="Id">Article Id</label>
			<input type="text" class="form-control" id="Id" name="Id" value="<?php if(isset($row['Id'])) { echo $row['Id']; } ?>">
		</div>
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title" value="<?php if(isset($row['Title'])) { echo $row['Title']; } ?>">
		</div>
		<div class="form-group">
			<label for="article_desc">Article Descriptionn</label>
			<textarea class="form-control" id="article_desc" name="article_desc" row="2"><?php if(isset($row['article_desc'])) { echo $row['article_desc']; } ?></textarea>
		</div>
		<div class="form-group">
            <label for="detail">More Details</label>
            <textarea  type="text" class="form-control" placeholder="More Details" rows="7" cols="50" id="detail" name="detail"><?php if(isset($row['article_details'])) { echo $row['article_details']; } ?></textarea>
        </div>
		<div class="form-group">
			<label for="Image">Article image</label>
			<?php if (isset($row['Image'])) {
			 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"class="img-thumbnial card-img-top" alt=""  />'; }?>
			<input type="file" class="form-control-file mt-3" id="Image" name="Image">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="artupdate" name="artupdate">Update</button>
			<a href="article.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($msg)) {echo $msg;} ?>
	</form>
</div>
</div>


<?php 
include("admininclude/footer.php");
?>