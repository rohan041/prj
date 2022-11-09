<?php
include('./dbConnection.php');
include('mainInclude/header.php');
if(session_id()==''){
	session_start();
}
		if(isset($_REQUEST['passupdate'])){
			if(($_REQUEST['sEmail'] == "") || ($_REQUEST['sPassword'] == "")){
				$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill All Fileds </div>';
			}
			else{
			$sPass = md5($_REQUEST['sPassword']);
			$sEmail = $_REQUEST['sEmail'];
			if($_REQUEST['sPassword'] == $_REQUEST['c_password'])
			$sql = "UPDATE student SET stu_pass  = '$sPass' WHERE stu_email = '$sEmail'";
			if($conn->query($sql) == TRUE){
			$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2"> Updated Succcessfully </div>';
			}else{
				$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unablle to Upddate</div>';	
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewpport" content="width=device-width,initial-scale=1.0">
		<!--Bootstrap link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!--font ausome link -->
	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<style>
	.custom-margin{
		margin-top:8vh;
	}
</style>
	<title>Forgot Password</title>
</head>

	<p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-primary mr-2"></i>
	Student Area For Forgot Password</p>
		
<div class="container-fluid">
	<div class="row justify-content-center custom-margin mt-5">
		<div class="col-sm-6 col-md-4">
			<form action="" class="shadow-lg p-4" method="POST" name="forgotpass" onSubmit="return validateform()">
				<div class="form-group">
					<i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label><br>
					<input type="email" id="sEmail" name="sEmail" placeholder="Email" style="width: 100%; border: 1px solid #ced4da; padding: 5px; font-size: 18px; padding-left: 10px;"><br>
					<small class="form-text">we,ll  never shere your email with anyone else.</small>
				</div>
		<div class="form-group">
			<label for="rPassword">New Password</label>
			<input type="password" class="form-control" id="sPassword" placeholder="New Password" name="sPassword">
		</div>
		<div class="form-group">
			<label for="r_password">Conform Password</label>
			<input type="password" class="form-control" id="c_password" placeholder="Conform Password" name="c_password">
		</div>

		<button type="submit" class="btn btn-primary mr-4 mt-4" name="passupdate">Update
		</button>

		<button type="reset" class="btn btn-primary mt-4">Reset
		</button>
		<?php if(isset($passmsg)){ echo $passmsg; }?>
	</form>
	<div class="text-center"><br>
				<a href="./index.php" class="btn btn-info font-weight-bold shadow-sm fas fa-home"></a>
			</div>

</div><!--End user Service request form 2nd colum-->



<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{	
	
					if(document.forgotpass.sEmail.value == "")
						{
						alert("Email ID should not be empty..");
						document.forgotpass.sEmail.focus();
						return false;
					}else{
							if(document.forgotpass.sPassword.value == "")
							{
								alert("Password should not be empty..");
								document.forgotpass.sPassword.focus();
								return false;
							}else{
								if(document.forgotpass.sPassword.value.length <= 8)
								{
									alert("Password length should be more than 8 characters...");
									document.forgotpass.sPassword.focus();
									return false;
								}
								
									else{
									 if(document.forgotpass.sPassword.value != document.forgotpass.c_password.value )
									{
										alert(" New Password and confirm password should be equal..");
										document.forgotpass.c_password.focus();
										return false;
									}
								}
							}
						}
					}
		
</script>