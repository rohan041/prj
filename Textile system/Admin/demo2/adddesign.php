<?php 
$sidebar = "design";
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
	<div class="card-title"> Add New Design</div>
</div>	<div class="card-body">
	<?php 
include('db.php');
if(isset($_POST['add'])){
$name=$_POST['name'];
$price=$_POST['price'];
$typee=$_POST['type'];
$namee = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$size = $_FILES["image"]["size"];
$temp = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
move_uploaded_file($temp,"./assets/img/.".$namee);
$result=mysqli_query($con,"insert into work(name,photo,type,price)values('$name','$namee','$typee','$price')");
if($result==1)
{
	echo '<script> swal({
						title: "Design Added Successfully",
						text: "",
						icon: "success",
						buttons: {
							confirm: {
								text: "OK",
								value: false,
								visible: false,
								className: "btn btn-success",
								closeModal: false
							}
						}
					});
				</script>';
				echo "<script>setTimeout(\"location.href = 'Multidesign.php'\",1550);</script>";
}
else{
	echo "something went wrong";
}
}else{
	
?>
<div class="row">
	<div class="col-md-6 col-lg-4">
</div>
<form method="POST" action="adddesign.php" enctype= multipart/form-data>
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
											<div class="form-group">
												<label for="exampleFormControlSelect1">Price Of Design</label>
												<input type="number" name="price" class="form-control" placeholder="Enter price of design">
											</div>
<br>
											
								<div class="card-action">
									<button class="btn btn-success" name="add">show me</button>
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


