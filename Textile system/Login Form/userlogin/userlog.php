<?php 
 include("db.php");
 session_start();
 if(isset($_POST['login']))
 {
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query = "SELECT * FROM userreg WHERE email='$email' AND password='$password'"; 
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rows = mysqli_num_rows($result);
	$row1 = mysqli_fetch_assoc($result);
	$phone = $row1['phone'];
	$name = $row1['name'];
	
	$st=mysqli_query($conn,"SELECT * from jobs where emailid='$email'");
	$row = mysqli_fetch_assoc($st);

	$status=$row['status'];
    $emailid=$row['emailid'];
    $id = $row['id'];
    $proof = $row['proof'];
	if($rows == 1)
	{
	   if($status=="pending")
	   {
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$_SESSION['phone'] = $phone;
		$_SESSION['proof'] = $proof;
		$_SESSION['id'] = $id;
		header('location: ../../worker/demo2/jobpending.php');
	   }
       elseif($emailid != $email){
       	$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$_SESSION['phone'] = $phone;
		$_SESSION['id'] = $id;
		$_SESSION['proof'] = $proof;
	header('location: ../../worker/demo2/jobsw.php');
      }
      elseif($row1['status']=="deactive"){
       	$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$_SESSION['phone'] = $phone;
		$_SESSION['id'] = $id;
		$_SESSION['proof'] = $proof;
	header('location: ../../worker/demo2/jobdeactive.php');
      }
	   else{
	   	$_SESSION['email'] = $email;
	   	$_SESSION['name'] = $name;
	    $_SESSION['phone'] = $phone;
	    $_SESSION['id'] = $id;
	    $_SESSION['proof'] = $proof;
	   	echo "<script>setTimeout(\"location.href='../../Worker/demo2/Dashboardw.php'\",1500)</script>";
	        }
	}
	else{

		echo "<script>alert('Username/Password do not match!!')</script>";
		}
 }
?>