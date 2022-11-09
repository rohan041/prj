<?php
include('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM expense WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
if($result==1)
{
	echo '<script> 
	swal("This modal will disappear soon!", {
						buttons: false,
						timer: 3000,
					});
				
				</script>';
				
	echo "<script>setTimeout(\"location.href = 'expensea.php'\",1);</script>";

}
else
{
	echo '<script>alert("please try again!")</script>';
}
?>