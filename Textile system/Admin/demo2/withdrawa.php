<?php 
session_start();

$sidebar = "staff";
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
	<div class="card-title">  Withdraw Form</div>
	<div class="card-body">
		<?php include("db.php"); 
		?>
	<?php 

include("db.php");

if(isset($_POST['add']))
{
	$select = mysqli_query($con,"select * from userreg where id = '".$_POST['id']."'");
$res = mysqli_fetch_assoc($select);
$id = $_POST['id'];

$wname = $_POST['wname'];
	$datet = $_POST['date']; 
	$price = $_POST['price'];
	$namee = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$size = $_FILES["image"]["size"];
$temp = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];

	move_uploaded_file($temp,"assets/upload/".$namee);
	$insert = mysqli_query($con,"insert into salary(userid,wname,withdraw,datetime,image)values('$id','$wname','$price','$datet','$namee')");
	

if($insert==1)
{
	echo '<script> swal({
						title: "withdraw Amount Added Successfully",
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
				echo "<script>setTimeout(\"location.href = 'viewwithdraw.php'\",1550);</script>";
}
else{
	echo "something went wrong";
}

}else{
	
?>
<div class="row">
	<div class="col-md-6 col-lg-4">
</div>

<form method="POST" action="Withdrawa.php" enctype= multipart/form-data>
										<div class="form-group">
												<label for="exampleFormControlSelect1">Withdraw Name</label>
												<input type="text" style="display: none;" name="id" value="<?=$_GET['id']?>">
												<textarea name="wname" class="form-control" placeholder="Enter Withdraw Name"></textarea>
											</div>
<br>	
								<br>
								<div class="form-group">
												<label for="exampleFormControlSelect1">Withdraw Date</label>
												<input type="datetime-local" name="date" class="form-control" >
											</div>
											<br>	
												<div class="form-group">
												<label for="exampleFormControlFile1">Choose Withdraw Photo</label>
												<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
											</div><br>
											<div class="form-group">
												<label for="exampleFormControlSelect1">Withdraw Amount</label>
												<input type="text" style="display: none;" name="id" value="<?=$_GET['id']?>">
												<input type="number" name="price" class="form-control" placeholder="Enter Withdraw amount"  min="0">
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




<?php   
    
    include('include/scripts.php');
    
    ?>