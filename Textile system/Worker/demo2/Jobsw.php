<?php 
$sidebar = "jobsw";
session_start();
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$name = $_SESSION['name'];
include('include/header.php');
include('include/navbar2.php');
    include('include/scripts.php');
    include('db.php');
    if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $phno1=$_POST['phno1'];
    $phno2=$_POST['phno2'];
    $emailid=$_POST['emailid'];
    $birthdate=$_POST['bdate'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $salarye=$_POST['salarye'];
    $shift=$_POST['shift'];
    $adress=$_POST['adress'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $namee = $_FILES["image1"]["name"];
$type = $_FILES['image1']['type'];
$size = $_FILES['image1']['size'];
$temp = $_FILES['image1']['tmp_name'];
$error = $_FILES['image1']['error'];
move_uploaded_file($temp,'images/'.$namee);
$nameee = $_FILES["image"]["name"];
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
$temp = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];
move_uploaded_file($temp,'images/'.$nameee);
    //move_uploaded_file($temp,"./assets/img/.".$proof);

	$result=mysqli_query($con,"INSERT INTO `jobs` (`name`, `phno1`, `phno2`, `emailid`, `birthdate`, `age`,`gender`, `salarye`, `shift`, `adress`, `city`, `state`, `pincode`, `proof` , `status`,`adhar`) VALUES ('$name', '$phno1', '$phno2', '$emailid', '$birthdate', '$age','$gender', '$salarye', '$shift', '$adress', '$city', '$state', '$pincode', '$namee' , 'pending','$nameee')");
	 $to = $emailid;
            $subject = "Mr./Miss. ".$name." Your Job-Form Submitted ✅ Textile-Admin";
            $txt = "<!DOCTYPE html>
<html lang='en' >
<head>
  <meta charset='UTF-8'>
  <title>Appointment Reminder Email </title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!doctype html>
<html lang='en-US'>

<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
    <title>Appointment Reminder Email Template</title>
    <meta name='description' content='Appointment Reminder Email Template'>
</head>
<style>
    a:hover {text-decoration: underline !important;}
</style>

<body marginheight='0' topmargin='0' marginwidth='0' style='margin: 0px; background-color: #f2f3f8;' leftmargin='0'>
    <table cellspacing='0' border='0' cellpadding='0' width='100%' bgcolor='#f2f3f8'
        style='@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;'>
        <tr>
            <td>
                <table style='background-color: #f2f3f8; max-width:670px; margin:0 auto;' width='100%' border='0'
                    align='center' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td style='height:80px;'>&nbsp;</td>
                    </tr>
                    <!-- Logo -->
                   
                    <tr>
                        <td style='height:20px;'>&nbsp;</td>
                    </tr>
                    <!-- Email Content -->
                    <tr>
                        <td>
                            <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'
                                style='max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;'>
                                <tr>
                                    <td style='height:40px;'>&nbsp;</td>
                                </tr>
                                <!-- Title -->
                                <tr>
                                    <td style='padding:0 15px; text-align:center;'>
                                          <h1 style='color:#1572e8; font-weight:810; margin:0;font-size:40px;font-family:'Rubik',sans-serif;'>Online Textile Portal
                                        </h1>
                                        <span style='display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
                                        width:100px;'></span>
                                    </td>
                                </tr>
                                <!-- Details Table -->
                                <tr>
                                    <td>
                                        <table cellpadding='0' cellspacing='0'
                                            style='width: 100%; border: 1px solid #ededed'>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Name:</td>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                        ".$name." </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Ph No.1:</td>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                        ".$phno1." </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Ph No.2:</td>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                        ".$phno2."</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)'>
                                                        E-Mail:</td>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                        ".$emailid."</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px;  border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Birth Date:</td>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056;'>
                                                        ".$birthdate."</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Age:</td>
                                                    <td
                                                        style='padding: 10px; border-bottom: 1px solid #ededed; color: #455056; '>
                                                        ".$age."</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Gender:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$gender."  </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Salary Expectations:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$salarye." </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                       Time Shift:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$shift."</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                        Address:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$adress."  </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                       City:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$city."  </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                       State:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$state."  </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style='padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)'>
                                                      Pincode:</td>
                                                    <td style='padding: 10px; color: #455056;'>".$pincode."  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='height:40px;'>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style='height:20px;'>&nbsp;</td>
                    </tr>
                   
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
<!-- partial -->
  
</body>
</html>

"; 
			$header = "From:onlinetextileportal159@gmail.com";
			$header = "MIME-Version: 1.0" . "\r\n";
            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	       mail($to,$subject,$txt,$header);
if($result==1)
{
	echo '<script>alert("Jobs Form Fillup is successfully added in database!!!")</script>';
echo "<script>setTimeout(\"location.href='../../Home page/homepage.php'\",1500);</script>";
	
}
else{
	echo "something went wrong";
}
}
else{	
?>

<div class="main-panel">
			<div class="content">
	<br><br>
	<div class="row">
		<div class="col-md-6 ml-auto mr-auto">
			<div class="card">
			
				<div class="card-header">
	<div class="card-title">Job Form</div>
	<div class="card-body">
									<div class="row">
									<div class="col-md-6 ml-auto mr-auto">
						
	<form method="POST" action="jobsw.php" enctype="multipart/form-data">
		<div class="form-group">
								<label for="name">Name</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user"></i>
													</span>
	 <input type="text" value ="<?php echo $_SESSION['name'];?>" class="form-control" placeholder="Name" name="name">
												</div>
											</div>
											<div class="form-group">
									<label for="phone no.1">Phone No.1</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-phone"></i>
													</span>
										<input type="number" value ="<?php echo $_SESSION['phone'];?>" class="form-control" placeholder="Phone No" style="color: black;" name="phno1" readonly/>
											</div>
											</div>
											<div class="form-group">
								<label for="phone no2">Phone No.2</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-phone"></i>
													</span>
								<input type="number" class="form-control" placeholder="Phone No" required pattern=".{10,}" maxlength="10" name="phno2">
												</div>
											</div>

									<div class="form-group">
								<label for="email">Email Address</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-envelope" aria-hidden="true"></i>
													</span>
									<input style="color:black;" type="email" value ="<?php echo $_SESSION['email'];?>" class="form-control" placeholder="Email Address" name="emailid" readonly/>
												</div>
											</div>
                                    <div class="form-group">
	                                 <label for="birth date">Birth Date</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-calendar" aria-hidden="true"></i>
													</span>
											<input type="Date" class="form-control" name="bdate" min="1940-12-31" max="2002-12-31">
												</div>
											</div>
											<div class="form-group">
										<label for="age">Age</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-birthday-cake" aria-hidden="true"></i>
													</span>
										<input type="number" class="form-control" placeholder="Age" name="age">
												</div>
											</div>
											<div>
												<div class="form-group">
							<label for="salary">Gender</label><br>

  <input type="radio" id="huey" name="gender" value="Male"
         checked>
  <label for="huey">Male</label><br>
  <input type="radio" id="dewey" name="gender" value="Female">
  <label for="dewey">Female</label>
</div>
</div>
							<div class="form-group">
							<label for="salary">Salary Expectations</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fas fa-rupee-sign" aria-hidden="true"></i>
													</span>
							<input type="number" class="form-control" placeholder="Eg. Rs.11,500" name="salarye">
												</div>
											</div>
										<div class="form-group">
												<label for="exampleFormControlSelect1">Time Shift</label>
										<select class="form-control" id="exampleFormControlSelect1" name="shift">
													<option>Day</option>
													<option>Night</option>
												</select>
											</div>
											<div class="form-group">
												<label for="address">Address</label>
											<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">Address Line</span>
													</div>
												<textarea class="form-control" aria-label="With textarea" name="adress"></textarea>
												</div>
											</div>
<div class="form-group">
	<label for="city">City</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class=" fa fa-map-marker " aria-hidden="true"></i>
													</span>
										<input type="text" class="form-control" placeholder="City" name="city">
												</div>
											</div>
											<div class="form-group">
												<label for="exampleFormControlSelect1">State</label>
										<select class="form-control" id="exampleFormControlSelect1" name="state">
											<option required value="none">Select State</option>
													<option>Andhra Pradesh</option>	
													<option>Arunachal Pradesh</option>	
													<option>Assam	</option>
													<option>Bihar	</option>
													<option>Chhattisgarh</option>
													<option>Goa</option>
													<option>Gujarat	</option>
													<option>Haryana	</option>
													<option>Himachal Pradesh	</option>
													<option>Jharkhand	</option>
													<option>Karnataka	</option>
													<option>Kerala	</option>
													<option>Madhya Pradesh	</option>
													<option>Maharashtra	</option>
													<option>Manipur	</option>
													<option>Meghalaya	</option>
													<option>Mizoram	</option>
													<option>Nagaland</option>
													<option>Odisha	</option>
													<option>Punjab	</option>
													<option>Rajasthan</option>
													<option>Sikkim</option>
													<option>Tamil Nadu</option>
													<option>Telangana</option>
													<option>Tripura</option>
													<option>Uttar Pradesh</option>
													<option>Uttarakhand</option>
													<option>Gairsain</option>
													<option>West Bengal</option>
														
												</select>
											</div>

									<div class="form-group">
									<label for="pincode">Pincode</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class=" fa fa-address-card" aria-hidden="true"></i>
													</span>
													<input type="text" class="form-control" placeholder="Pincode" required pattern=".{6,}" maxlength="6" name="pincode">
												</div>
											</div>


												<div class="form-group">
												<label for="exampleFormControlFile1">Upload  Photo</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image1">
											</div>	
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Upload Adhar/Driving License Photo</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                            </div>  			
									<div class="card-action">
									<button class="btn btn-success" name="submit">Submit</button>
									<button class="btn btn-danger" name="cancel">Cancel</button>
								</div>
</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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