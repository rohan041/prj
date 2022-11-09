<?php
 $sidebar = "work";
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
$stock = $_REQUEST['stock'];
$update=mysqli_query($con,"update work set stock='".$stock."', updatestock='".$stock."' where id='".$id."'");
if($update==1)
{

	echo '<script> swal({
						title: "Work Added Successfully",
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
				echo "<script>setTimeout(\"location.href = 'Work.php'\",1550);</script>";
}
else{
	echo "something went wrong";
}
}else{
	
?>
<form method="POST" action="editwork.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

											
<br>
											<div class="form-group">
												<label for="email2">Stock</label>
												<input type="number" name="stock" required value="<?php echo $row['stock'];?>"  class="form-control" id="email2"  min="0">
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







<?php   
    
    include('include/scripts.php');
    
    ?>