<?php 

include('db.php');
$s1 = mysqli_query($con,"SELECT * from userreg where email = '$_GET[id]'"); 
$rel1 = mysqli_fetch_assoc($s1);

if($rel1['status'] == 'deactive'){
	$data = 'active';
	$s1 = mysqli_query($con,"UPDATE userreg SET status = '$data' WHERE email = '$_GET[id]'"); 
}else{
	$data = 'deactive';
	$s1 = mysqli_query($con,"UPDATE userreg SET status = '$data' WHERE email = '$_GET[id]'"); 
}
header("location: staff.php");
?>