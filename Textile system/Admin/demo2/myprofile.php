<?php 
$sidebar = "dash";
 
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
?>


<div class="main-panel">
      <div class="content">
<div class="page-inner">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
                                    <div class="card-title">Edit Profile
                                    </div>
                                </div>
  <div class="card-body">
   <!--  <div class="row"> -->
 <?php
  include('db.php');
  $select = mysqli_query($con,"select name,email,mob from admin");
  $res = mysqli_fetch_assoc($select);

  if(isset($_POST['add'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mob= $_POST['mob'];
    $update = mysqli_query($con,"update admin set name='".$name."',email='".$email."',mob='".$mob."'");
    if($update==1){
   echo '<script> swal({
                        title: "Profile Update Successfully",
                        text: "",
                        icon: "success",
                        buttons: {
                            confirm: {
                                text: "OK",
                                value: false,
                                visible: false,
                                className: "btn btn-success",
                                closeModal: false
                            }
                        }
                    });
                </script>';
                echo "<script>setTimeout(\"location.href = 'myprofile.php'\",1350);</script>";
}
  }
  ?>  

    
        <form action="myprofile.php" method="post">
  <div class="col-md-6 ml-auto mr-auto">
   <div class="form-group">
                                <label for="name">Name</label>
                                                <div class="input-icon">
                                                    <span class="input-icon-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
     <input type="text"  class="form-control" value="<?php echo $res['name'];?>" placeholder="Name" name="name">
                                                </div>
                                            </div>
                        <div class="form-group">
                                <label for="email">Email Address</label>
                                                <div class="input-icon">
                                                    <span class="input-icon-addon">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </span>
                                    <input  type="email" value="<?php echo $res['email'];?>" class="form-control" placeholder="Email Address" name="email" >
                                                </div>
                                            </div>
                    <div class="form-group">
                                    <label for="phone no.1">Phone No</label>

                                                <div class="input-icon">
                                                    <span class="input-icon-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                        <input type="text" value="<?php echo $res['mob'];?> "class="form-control" placeholder="Phone No" name="mob" min="0" >
                                            </div>
                                            </div>
                          
                    <div class="col-md-6 ml-auto mr-auto">
                                            <div class="card-action">
                  <button class="btn btn-success" name="add">Update</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>
                </form>

                </div></div></div></div></div></div>
                

                </div></div>
              
<div class="page-inner">
                <div class="row">

    <div class="col-md-12">
                <div class="card">
        <div class="card-header">
                                    <div class="card-title">Change Password
                                    </div>
                                </div>
  <div class="card-body">

    <div class="row">
  <div class="col-md-6 ml-auto mr-auto">
  <div class="form-group">
                                                 <label for="password">Exsiting Password</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-unlock-alt"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="password" name="old" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">New Password</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-key"></i></span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="password" name="new" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>

<div class="form-group">
                                                 <label for="password">Confirm Password</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fas fa-lock-open"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                    <input type="password" name="cpass" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                    <div class="col-md-6 ml-auto mr-auto">
                                            <div class="card-action">
                  <button class="btn btn-success" name="add">Update</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
        </div>
    
                

                
</div></div></div></div>
          </div></div></div></div>









