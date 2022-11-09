<?php 
 include("db.php");
 session_start();
 if(isset($_POST['regi']))
 {
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$u_type=$_POST['u_type'];
	
	$query = "INSERT INTO users(name,email,password,phoneno,u_type)values($name,$email,$password,$phoneno,$u_type)"; 
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rows = mysqli_num_rows($result);
	if($rows == 1)
	{
		header('location: ../../Admin/demo2/index01.php');
	}
	else
	{
		echo "<script>alert('something went wrong!!')</script>";
	}

 }
?>
