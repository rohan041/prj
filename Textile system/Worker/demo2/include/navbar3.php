<!DOCTYPE html>
<html lang="en">
<?php if (!isset($sidebar)) {
	$sidebar = "";
}?>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Online Textile Portal</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<style type="text/css">
		.nav-item-activ a{
	background-color: #fff!important;
	color: #000000!important;

}
.nav-item-activ a p{
	color: #000000!important;
	font-weight: 650;

}	
.nav-item-activ a i{
	color: #000000!important;

}</style>
<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="index01.php" class="logo">
					<img src="../assets/img/sm.png" alt="navbar brand" class="navbar-brand" width="62" height="62">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
				<nav class="navbar navbar-header " data-background-color="dark">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							
							<div><p style="font-size:25px; color: white;"><b>Online Textile Portal</b></p></div>
						</form>
					</div>
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="true" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="true">
								<!-- <div class="avatar-sm"> 
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div> -->
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>

											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="/Textile system/Admin/examples/demo2/myprofile.php" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/Textile system/Admin/examples/demo2/editprofile.php">Edit Profile</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		