
<?php
session_start();
 $sidebar = "stockw";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
include('db.php');
$id=$_REQUEST["id"];
$query = mysqli_query($con,"SELECT * from work where id='".$id."'"); 
$row = mysqli_fetch_assoc($query);
$q = mysqli_query($con,"SELECT * from stock where id='".$id."'"); 
$r = mysqli_fetch_assoc($q);
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

$remainthread = $_REQUEST['remainthread'];

$update=mysqli_query($con,"update stock set ustock = $remainthread,remainthread='".$remainthread."'where id='".$id."'");
if($update==1)
{

	echo '<script> swal({
						title: "Thread Update Successfully",
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
				echo "<script>setTimeout(\"location.href = 'Threadw.php'\",1550);</script>";
}else{
	echo "failed";
}
}else{
	?>

<form method="POST" action="editstock.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

											
<br>
											<div class="form-group">
												<label for="email2">Remain Thread</label>
												<input type="number" max="<?php echo $r['ustock'];?>" name="remainthread" required value="<?php echo $row['remainthread'];?>"  class="form-control" id="email2" min="0">
												<tr>
											<br>
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
