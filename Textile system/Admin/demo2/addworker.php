<?php 
$sidebar = "jobs";
include('include/header.php');
include('include/navbar.php');
 include('include/scripts.php');
    include('db.php');
    if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $phno1=$_POST['phno1'];
    $phno2=$_POST['phno2'];
    $emailid=$_POST['emailid'];
    $bdate=date('y-m-d',strtotime($_POST['birthdate']));
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $salarye=$_POST['salarye'];
    $shift=$_POST['shift'];
    $adress=$_POST['adress'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $namee = $_FILES["image"]["name"];
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
$temp = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];
move_uploaded_file($temp,'assets/img/'.$namee);
    //move_uploaded_file($temp,"./assets/img/.".$proof);
	$result=mysqli_query($con,"insert into jobs(name,phno1,phno2,emailid,birthdate,age,gender,salarye,shift,adress,city,state,pincode,proof,status) VALUES ('$name', '$phno1', '$phno2', '$emailid', '$bdate', '$age','$gender', '$salarye', '$shift', '$adress', '$city', '$state', '$pincode', '$namee','confirmed')");
if($result == 1)
{
	echo '<script> swal({
						title: "New Worker Added Successfully",
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
					}); </script>';
	echo "<script>setTimeout(\"location.href='jobs.php'\",1500)</script>";
}
else{
	echo "something went wrong";
}
}
else{	
?>

			<div class="content">

	<div class="row">
		<div class="col-md-6 ml-auto mr-auto">
			<div class="card">
				
				<div class="card-header">
	<div class="card-title">Job Form</div>
	<div class="card-body">
									<div class="row">
									<div class="col-md-6 ml-auto mr-auto">
		 
   					<form method="POST" action="addworker.php" enctype="multipart/form-data">
		<div class="form-group">
								<label for="name">Name</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user"></i>
													</span>
										           <input type="text" class="form-control" placeholder="Name" name="name">
												</div>
											</div>
											<div class="form-group">
									<label for="phone no.1">Phone No.1</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-phone"></i>
													</span>
										<input type="number" class="form-control" placeholder="Phone No" required pattern=".{10,}" maxlength="10" name="phno1">
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
									<input type="email" class="form-control" placeholder="Email Address" name="emailid">
												</div>
											</div>
                                    <div class="form-group">
	                                 <label for="birth date">Birth Date</label>
												<div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-calendar" aria-hidden="true"></i>
													</span>
											<input type="Date" class="form-control" name="bdate" required="">
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
													
<option value="Andhra Pradesh">Andhra Pradesh</option>	
													<option value="Arunachal Pradesh">Arunachal Pradesh</option>	
													<option value="Assam">Assam	</option>
													<option value="Bihar">Bihar	</option>
													<option value="Chhattisgarh">Chhattisgarh</option>
													<option value="Goa">Goa</option>
													<option value="Gujarat">Gujarat	</option>
													<option value="Haryana">Haryana	</option>
													<option value="Himachal Pradesh">Himachal Pradesh	</option>
													<option value="Jharkhand">Jharkhand	</option>
													<option value="Karnataka">Karnataka	</option>
													<option value="Kerala">Kerala	</option>
													<option value="Madhya Pradesh">Madhya Pradesh	</option>
													<option value="Maharashtra">Maharashtra	</option>
													<option value="Manipur">Manipur	</option>
													<option value="Meghalaya">Meghalaya	</option>
													<option value="Mizoram">Mizoram	</option>
													<option value="Nagaland">Nagaland</option>
													<option value="Odisha">Odisha	</option>
													<option value="Punjab">Punjab	</option>
													<option value="Rajasthan">Rajasthan</option>
													<option value="Sikkim">Sikkim</option>
													<option value="Tamil Nadu">Tamil Nadu</option>
													<option value="Telangana">Telangana</option>
													<option value="Tripura">Tripura</option>
													<option value="Uttar Pradesh">Uttar Pradesh</option>
													<option value="Uttarakhand">Uttarakhand</option>
													<option value="Gairsain">Gairsain</option>
													<option value="West Bengal">West Bengal</option>
														
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
												<label for="exampleFormControlFile1">Upload Adhaar-card Photo</label>
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
</div>