<?php
include("db.php");
	 $id=$_REQUEST['id'];
	 $res=mysqli_query($con,"SELECT name,phno1,emailid FROM jobs WHERE id=$id");
	 $row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['emailid'];
	$phno1=$row['phno1'];
	$sql=mysqli_query($con,"insert into userreg(name,phone,email,password,type,status)values('$name','$phno1','$email','Aa#123textile','worker','Active')");
	        $to = $row['emailid'];
            $subject = "Textile-Admin";
            $txt = "Hello! ".$name." your are successfully Confirmed for Worker Job.Use Your Mail Id ".$email." as username And This is your temporary Password='Aa#123textile'.Change it after login in worker portal. Thank You";
            $header = "From:onlinetextileportal159@gmail.com";
			$headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			mail($to,$subject,$txt,$header);
	$query=mysqli_query($con,"DELETE FROM jobs WHERE id=$id");
	if($row=1){
		  
		echo '<script>alert("Confirmed For Job")</script>';
		echo "<script>setTimeout(\"location.href = 'staff.php'\",1500);</script>";
	}else
	{
		echo '<script>alert("something went wrong!!")</script>';
	}
 ?>
