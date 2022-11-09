<?php 

$sidebar = "dashw";
session_start();
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
$id1 = $_SESSION['id'];
$e = $_SESSION['email'];
?>
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];

$ph2 = $_POST['ph2'];
$adress = $_POST['adress'];
$pincode = $_POST['pincode'];
$bank = $_POST['bank'];

$bdate = $_POST['bdate'];
$city = $_POST['city'];
$ac = $_POST['ac'];
$upi = $_POST['upi'];
$age = $_POST['age'];
$shift = $_POST['shift'];

$ifsc = $_POST['ifsc'];
$state = $_POST['state'];
$img1 = $_FILES['qr']['name'];
$type1 = $_FILES['qr']['type'];
$size1 = $_FILES['qr']['size'];
$temp1 = $_FILES['qr']['tmp_name'];
move_uploaded_file($temp1,"images/".$img1);

$img2 = $_FILES['photo']['name'];
$type2 = $_FILES['photo']['type'];
$size2 = $_FILES['photo']['size'];
$temp2 = $_FILES['photo']['tmp_name'];
move_uploaded_file($temp2,"images/".$img2);
$update = mysqli_query($con,"update jobs set name='".$name."',birthdate='".$bdate."',phno2='".$ph2."',adress='".$adress."',age='".$age."',shift='".$shift."',ifsc='".$ifsc."',state='".$state."',city='".$city."',acno='".$ac."',upi='".$upi."',bank='".$bank."',pincode='".$pincode."',proof='".$img2."',qrphoto='".$img1."' where emailid = '".$e."'");
if($update == 1){
    echo "<script>alert('success');</script>";
}
}
?>
	<div class="main-panel">

			<div class="content">
                    
<div class="page-inner">    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-header">
                                    <div class="card-title">Edit Profile</div>
                                </div>

                                <div class="card-body">
 <?php
include('db.php');
$sql=mysqli_query($con,"select * from jobs where id = '".$_SESSION['id']."'");
$res=mysqli_fetch_assoc($sql);
?>
<form method="POST" action="myprofile.php" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-4">
                                           <!--     <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" >Name : - </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                 <label for="name">Name</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-user"></i> </span>
                                                        <span class="input-icon-addon">
                                                    </span>
                                                    </div>
                                            <input type="text"class="form-control" placeholder="Username" name="name" value="<?php echo $res['name'];?>
                                            " >
                                            </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Email</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-envelope"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['emailid'];?>
                                            " class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" style="color: black;"  readonly/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label for="password">Gender</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-mars-double"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text"  style="color: black;" disabled value="<?php echo $res['gender'];?>
                                            " class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label for="password">Address</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                       <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                                       <!--  <span class="input-icon-addon">
                                                       
                                                    </span> -->
                                                    <input class="form-control" aria-label="With textarea" value="<?php echo $res['adress'];?>
                                            " name="adress" required>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Pincode</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class=" fa fa-address-card" aria-hidden="true"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['pincode'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="pincode"aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                           

 <br><br><br>
  <div class="card-header">
                                    <div class="card-title">Bank Details</div>
                                </div>
<br>

 <div class="form-group">
                                                 <label for="password">Bank Name</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-university"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['bank'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="bank"aria-describedby="basic-addon1">
                                                </div>
                                            </div>


 <div class="form-group">
                                                 <label for="password">Upload QR Photo</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <!-- <span class="input-group-text" id="basic-addon1" > <i class="fas fa-building"></i></span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span> -->
                                                    </div>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="qr" access=".jpg,.jpeg">
                                                    <small id="emailHelp2" class="form-text text-muted">Upload QR photo from g-pay/paytm or etc.</small>

                                                    <img src="images/<?php echo $res['qrphoto'];?>" width="100px" height="100px">
                                                </div>
                                            </div>



                                           
                                            
                                            
                                        </div>




                                       <div class="col-md-6 col-lg-4">
                                        <!--     <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" >Name : - </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div> -->
                                             <div class="form-group">
                                                 <label for="password">Phone 1</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-phone"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['phno1'];?>
                                            " class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" style="color: black;"  readonly/>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Birthdate [<?php echo $res['birthdate'];?>]</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-calendar"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="date" value="<?php echo $res['birthdate'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="bdate" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Salary Expectations</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-rupee-sign"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['salarye'];?>
                                            " class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" style="color: black;"  readonly/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                 <label for="password">City</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-building"></i></span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['city'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="city" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label for="password">Joining Date</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-calendar"></i></span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['jdate'];?>
                                            " class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" style="color: black;"  readonly/>
                                                </div>
                                            </div><br><br>
  <br><br>
<br><br><br>

 <div class="form-group">
                                                 <label for="password">A/C No.</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-id-card-alt"></i></span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['acno'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="ac" aria-describedby="basic-addon1">
                                                </div>
                                            </div>



 <div class="form-group">
                                                 <label for="password">UPI-ID</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" ><i class="fab fa-amazon-pay"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['upi'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="upi" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                      













                                           
                                        </div>













                                       <div class="col-md-6 col-lg-4">
                                        <!--     <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" >Name : - </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div> -->
                                              <div class="form-group">
                                                 <label for="password">Phone 2</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-phone"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['phno2'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="ph2" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Age</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-birthday-cake"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['age'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="age" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 <label for="password">Time Shift</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-user-clock"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['shift'];?>
                                            " class="form-control"  name="shift" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">State</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-globe-africa"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['state'];?>
                                            " class="form-control" placeholder="" aria-label="Username"  name="state" aria-describedby="basic-addon1">
                                                </div>
                                            </div>





<br> 
                                            <div class="form-group">
                                                 <label for="password">Upload/update Photo</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <!-- <span class="input-group-text" id="basic-addon1" > <i class="fas fa-building"></i></span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span> -->
                                                    </div>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo"><br />
                                                    <br /><img src="images/<?php echo $res['proof'];?>" style="border:3px solid white;" width="100px" height="100px">
                                                </div>
                                            </div>

                                            <br><br>
  <br><br>
<br><br><br>

 <div class="form-group">
                                                 <label for="password">IFSC Code</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-barcode"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="text" value="<?php echo $res['ifsc'];?>
                                            " class="form-control" placeholder="" aria-label="Username" name="ifsc" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                          



                                           
                                           
                                        </div>

                                <div class="card-action">
                                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>










