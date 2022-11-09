<!--Start Registration Model -->


<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="sturegi" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title">Student Registration</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form id="sturegform" action="" method="POST">
  <div class="form-group">
    <i class="fas fa-user"></i><label for="stuname" class="pl-2 fonr-weigh-bold">Name</label><small id="statusMSG1"></small>
    <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
  </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 fonr-weigh-bold">Email</label><small id="statusMSG2"></small>
    <input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="Email">
    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 fonr-weigh-bold">New Password</label><small id="statusMSG3"></small>
    <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <span id="successMSG"></span>
        <button type="button" class="btn btn-primary" id="signup"  onclick="addstu();">Sign Up</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>

      </div>
    </div>

  </div>
</div>

<!-- End Registration -->