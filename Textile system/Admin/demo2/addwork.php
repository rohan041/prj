<?php 
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
	<div class="card-title"> Add New Work</div>
	<div class="card-body">
	<?php 
include('db.php');
if(isset($_POST['add'])){
$name=$_POST['name'];
$stock=$_POST['stock'];
$typee=$_POST['type'];
$namee = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$size = $_FILES["image"]["size"];
$temp = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
move_uploaded_file($temp,"./assets/img/.".$namee);
$result=mysqli_query($con,"insert into work(name,photo,type,stock,updatestock)values('$name','$namee','$typee','$stock','$stock')");
if($result==1)
{
	echo '<script>alert("work is successfully added in database!!!")</script>';
}
else{
	echo "something went wrong";
}
}else{
	
?>
<div class="row">
	<div class="col-md-6 col-lg-4">
</div>
<form method="POST" action="addwork.php" enctype= multipart/form-data>
											<div class="form-group">
												
												<label for="email2">Design Name</label>
												<input type="text" name="name" class="form-control" placeholder="Name">
												
											</div><br>	
												<div class="form-group">
												<label for="exampleFormControlFile1">Choose Design Photo</label>
												<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
											</div>
								<br>
								<div class="form-group">
												<label for="exampleFormControlSelect1">Type Of Design</label>
												<input type="text" name="type" class="form-control" placeholder="Enter type of design">
											</div>
<br>
											<div class="form-group">
												<label for="email2">Stock</label>
												<input type="number" name="stock" class="form-control" id="email2" placeholder="Enter total Stock">
												
											</div>

	<div class="card-action">
									<button class="btn btn-success" name="add">Add</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form>
							<?php } ?>
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






