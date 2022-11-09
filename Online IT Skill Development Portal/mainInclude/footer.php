<!-- start Footer -->
<footer class="container-fluid bg-dark text-center d-print-none">
	<small class="text-white">Copyright &copy; 2021 || Designed By Meet&Team ||<a href="#Login" class="nav-link" data-toggle="modal" data-target="#adminlog">Admin Login</a></small>
</footer>

<!--Start Registration Model -->
<?php include("studentRegistration.php"); ?>
<!--End Registration Model -->

<!-- Start login model-->

<!-- Modal -->
<div id="stulog" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title">Student Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form class="stuLoginForm">
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stulogemail" class="pl-2 fonr-weigh-bold">Email</label><small id="LoginStatus"></small>
    <input type="email" class="form-control" id="stulogemail" name="stulogemail" placeholder="Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stulogpass" class="pl-2 fonr-weigh-bold">Password</label><small id="PasswordStatus"></small>
    <input type="password" class="form-control" id="stulogpass" name="stulogpass" placeholder="Password">
    <a class="form-group" href="./ChangePassword.php">Forget Password</a>
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <small id="statuLogMSG"></small>
        <button type="button" class="btn btn-primary" onclick="checkStuLogin();">Login</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>

      </div>
    </div>

  </div>
</div>

<!-- End Login Model-->

<!-- start Admin Login -->
<!-- Modal -->
<div id="adminlog" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title">Admin Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form class="adminLoginfrom">
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="adminlogemail" class="pl-2 fonr-weigh-bold">Email</label>
    <input type="email" class="form-control" id="adminlogemail" name="adminlogemail" placeholder="Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="adminlogpass" class="pl-2 fonr-weigh-bold">Password</label>
    <input type="password" class="form-control" id="adminlogpass" name="adminlogpass" placeholder="Password">
    <a class="form-group" href="./adminChangePassword.php">Forget Password</a>
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <small  id="statuAdminLogMSG"></small>
        <button type="button" class="btn btn-primary" onclick="checkAdminLogin();">Login</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>

      </div>
    </div>

  </div>
</div>
<!-- End Admi login -->




<!-- start Footer -->
<!--Bootstrap & jquery  link  for js -->
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!--font awesome  link  for js -->
<script src="js/all.min.js"></script>
<script type="text/javascript" src="js/ajexrequest.js"></script>
<script type="text/javascript" src="js/adminajexrequest.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 



</body>
</html>