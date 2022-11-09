<?php 
$sidebar = "dash";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
?>
<div class="main-panel">

			<div class="content">
  <?php
  include('db.php');
  $select = mysqli_query($con,"select name,email,mob from admin");
  $res = mysqli_fetch_assoc($select);
  ?>                  
<div class="page-inner"> 
	<div class="col-md-6 ml-auto mr-auto">
                            <div class="card card-profile">
                                <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                    <div class="profile-picture">
                                        <div class="avatar avatar-xl">
                                            <img src="../assets/img/01.JPG" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile text-center">
                                        <div> <p style="color: white; font-size: 28px; border: white;"> 
                                        <?php echo $res['name'];?></p></div>
                                        <div><p style="color: darkgrey; font-size: 18px;"><?php echo $res['email'];?></p></div>
                                        <div><p style="color: darkgrey; font-size: 18px;">+91 <?php echo $res['mob'];?></p></div>
                                       <div class="desc">You are the admin of the online textile portal system</div>
                                        <div class="social-media">
                                            <a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
                                                <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                                            </a>
                                            <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                                <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
                                            </a>
                                            <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                                                <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                                            </a>
                                            <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                                <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
                                            </a>
                                        </div>
                                        <div class="view-profile">
                                            <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                                        </div>
                                    </div>
                                </div>
</div>
</div>


</div>
</div>
</div>
</div>