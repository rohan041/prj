
<?php
include('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM jobs WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
if($result==1)
{
	echo '<script>alert("deleted succseccfully")</script>';
	echo "<script>setTimeout(\"location.href = 'jobs.php'\",1500);</script>";

}
else
{
	echo '<script>alert("please try again!")</script>';
}

?>