
<?php 
session_start();
$sidebar = "dashw";

include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
$e = $_SESSION['email'];
?>
<?php 
include("db.php");
if(isset($_POST['add'])){
    $select  = mysqli_query($con,"select password from userreg where email = '".$e."'");
    $row = mysqli_fetch_assoc($select);

$new = $_POST['new'];
$cpass = $_POST['cpass'];
$old = $_POST['old'];
if($old != $row['password']){
  echo "<script>alert('old not matched');</script>";
}
elseif($new != $cpass){
echo "<script>alert('new password not matched');</script>";
}
else{
    
 $update = mysqli_query($con,"update userreg set password = '".$cpass."' where email = '".$e."'");
if($update == 1){
     echo "<script>alert('success');</script>";
}

}
}

?>
<div class="main-panel">
			<div class="content">
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
	<div class="col-md-6 col-lg-4">
</div>
<form method="POST" action="changepwd.php" enctype= multipart/form-data>
 
	
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
                                            
                                            <div class="card-action">
									<button class="btn btn-success" name="add">Update</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form>




</div></div></div></div></div></div></div></div>

