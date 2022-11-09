<?php
include('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM work WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
if($result==1)
{
	echo '<script> swal({
						title: "Design update Successfully",
						text: "",
						icon: "success",
						buttons: {
							confirm: {
								text: "OK",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
				</script>';
				
	echo "<script>setTimeout(\"location.href = 'Multidesign.php'\",1500);</script>";

}
else
{
	echo '<script>alert("please try again!")</script>';
}

?>