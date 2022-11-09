<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

</head>
<body>

</body>
</html>


<?php
 
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
include('db.php');
$id=$_REQUEST["id"];
$query = mysqli_query($con,"SELECT * from work where id='".$id."'"); 
$row = mysqli_fetch_assoc($query);
?>
<div class="main-panel">
			<div class="content">
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
	<div class="card-title"> Edit Work</div>
	<div class="card-body">
<div class="row">
	<div class="col-md-6 col-lg-4">
</div>
<?php
if(isset($_REQUEST['add']))
{
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$photo = $_FILES['image']['name'];
$type = $_REQUEST['type'];
$price = $_REQUEST['price'];
$update=mysqli_query($con,"update work set name='".$name."',photo='".$photo."',type='".$type."',price='".$price."'where id='".$id."'");
if($update==1)
{
?>
	<script type="text/javascript">

				$('#alert_demo_4').click(function(e) {
					swal({
						title: "Good job!",
						text: "You clicked the button!",
						icon: "success",
						button: {
							confirm: {
								text: "confirm Me",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
				});
</script><?php
}else{
	echo "failed";
}
}else{?>

<form method="POST" action="editdessign.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

											
<br>
											<div class="form-group">
												<div class="form-group">
												<label for="email2">Design Name</label>
												<input type="text" name="name" class="form-control" placeholder="Name" require value="<?php echo $row['name'];?>">
												
											</div><br>	
												<div class="form-group">
												<label for="exampleFormControlFile1">Choose Design Photo</label>
												<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" require value="<?php echo $row['photo'];?>" required="">
											</div>
								<br>
								<div class="form-group">
												<label for="exampleFormControlSelect1">Type Of Design</label>
												<input type="text" name="type" class="form-control" placeholder="Enter type of design" require value="<?php echo $row['type'];?>">
											</div>
											<div class="form-group">
												<label for="exampleFormControlSelect1">Price Of Design</label>
												<input type="number" name="price" class="form-control" placeholder="Enter price of design" require value="<?php echo $row['price'];?>">
											</div>
												<tr>
											
											<td>
												<button type="submit" name="add" class="btn btn-success"> Show me</button>		
											</td>
										</tr>
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







