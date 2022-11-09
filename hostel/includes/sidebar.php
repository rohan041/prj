<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop text-light"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user text-light"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-unlock-alt text-light"></i>Change Password</a></li>
<li><a href="book-hostel.php"><i class="fa fa-building-o text-light"></i>Book Hostel</a></li>
<li><a href="room-details.php"><i class="fa fa-info-circle text-light"></i>Room Details</a></li>
<li><a href="access-log.php"><i class="fa fa-calendar-o text-light"></i>Access log</a></li>
<?php } else { ?>
	<li><a href="home01.php"><i class="fa fa-home text-light"></i> Home </a></li>
	<li><a href="gallery001.php"><i class="fa fa-picture-o text-light"></i>Info & Gallery </a></li>
		<li><a href="admin"><i class="fa fa-user text-light"></i> Admin Login</a></li>
	<li><a href="index.php"><i class="fa fa-users text-light"></i> User Login</a></li>	
				<li><a href="registration.php"><i class="fa fa-user-plus text-light"></i> User Registration</a></li>				
				<li><a href="contact.php"><i class="fa fa-envelope text-light"></i> Contact Us</a></li>
				<?php } ?>

			</ul>
		</nav>