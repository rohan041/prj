<?php 
 include("db.php");
 session_start();
 if(isset($_POST['login']))
 {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'"; 
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rows = mysqli_num_rows($result);
	if($rows == 1)
	{
		$_SESSION['username'] = $username;
		header('location:../Admin/demo2/index01.php');
	}
	else{
		echo "<script>alert('Username/Password do not match!!')</script>";
	}
 }
?>