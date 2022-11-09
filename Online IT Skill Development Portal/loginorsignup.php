<?php 
include("./dbconnection.php");
include("./mainInclude/header.php");
 ?>
 <div class="container-fluid bg-dark">
    <div class="row">
     <img src="./image/book.jpg" alt="courses" style="height:300px; width: 100%; object-fit: cover; box-shadow: 10px;">
 </div>
 </div>

 <div class="container jumbotron mb-5">
     <div class="row">
         <div class="col-md-4">
             <h5 class="mb-3">IF Already Registered !! xlogin</h5>
             <form role="form" method="POST" action="" id="stuLoginForm">
                 <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="stulogemail" class="pl-2 font-weigh-bold">Email</label><small id="statusLogMSG1"></small><input type="email" class="form-control" id="stulogemail" name="stulogemail" placeholder="Email">
                 </div>
                 <div class="form-group">
                     <i class="fas fa-key"></i><label for="stulogpass" class="pl-2 font-weigh-bold">Email</label><input type="password" class="form-control" id="stulogpass" name="stulogpass" placeholder="Enter Passwords">
                 </div>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin();">Login</button>
             </form><br>
              <small id="statuLogMSG"></small>
         </div>
         <div class="col-md-6 offset-md-1">
             <h5 class="mb-3"> New User !! Sign UP</h5>
             <form role="form" id="sturegform">
                 <div class="form-group">
                      <i class="fas fa-user"></i><label for="stuname" class="pl-2 fonr-weigh-bold">Name</label><small id="statusMSG1"></small>
                    <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
                 </div>
                 <div class="form-group">
                <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 fonr-weigh-bold">Email</label><small id="statusMSG2"></small>
                <input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="Email">
                <small  class="form-text">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i><label for="stupass" class="pl-2 fonr-weigh-bold">New Password</label><small id="statusMSG3"></small>
                <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
              </div>
            <button type="button" class="btn btn-primary" id="signup"  onclick="addstu();">Sign Up</button>
             </form><br>
             <span id="successMSG"></span>
         </div>
</div>
     </div>
 </div>
 <hr/>

<?php 
 include('./contect.php');
?>
<?php
include('./mainInclude/footer.php');
?>