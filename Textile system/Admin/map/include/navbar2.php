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
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				
				<div class="container-fluid">
					
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							
							<div><p style="font-size:25px; color: white;"><b>Online Textile Portal</b></p></div>
						</form>
					</div>
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
						
							
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="true">
								<div class="avatar-sm"> 
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>

											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="/Textile system/Admin/demo2/myprofile.php" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										
										
								
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/Textile system/Admin/demo2/editprofile.php">Edit Profile</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/Textile system/Home page/homepage.php">Logout</a>
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
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<!--div class="user">
						
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									HP
									<span class="user-level">Administrator</span>
									
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div-->
					<ul class="nav nav-primary">
						<li <?=($sidebar == "dash") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a  href="index01.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li <?=($sidebar == "design") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?> >
							<a  href="/Textile system/Admin/demo2/Multidesign.php">
								<i class="fas fa-palette"></i>
								<p><b>Design</b></p>
							</a>
							<div class="collapse" id="sidebarLayouts">
							</li>
						<li <?=($sidebar == "work") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
								
								<a  href="Work.php"><i class="
fas fa-microscope"></i><p>Work</p></a>
						</li>
						
						<li <?=($sidebar == "jobs") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
								
								<a href="/Textile system/Admin/demo2/jobs.php"><i class="
fas fa-id-card"></i><p>Jobs</p></a>
						</li>
						<li <?=($sidebar == "stocks") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a data-toggle="collapse" href="#forms">
								<i class="
fas fa-shopping-cart"></i>
								<p>Stocks</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li >
										<a href="/Textile system/Admin/demo2/Thread.php">
											<span class="sub-item">Thread</span>
										</a>
									</li>
									
									<li>
										<a href="/Textile system/Admin/demo2/inquiry.php">
											<span class="sub-item">Inquiries</span>
										</a>
									</li>
								</ul>
							</div>
							
						</li>
						<li <?=($sidebar == "staff") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
					
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-users"></i>
								<p>Staff</p>
								<span class="caret"></span>
							</a>
							<div  class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="/Textile system/Admin/demo2/staff.php">
											<span class="sub-item">Manage Staff</span>
										</a>
									</li>
									<li>
										<a href="/Textile system/Admin/demo2/salarya.php">
											<span class="sub-item">Salary</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
							<li <?=($sidebar == "expns") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?> >
							<a  href="/Textile system/Admin/demo2/expensea.php">
								<i class="fas fa-wallet"></i>
								<p><b>Expense</b></p>
							</a>
							<div class="collapse" id="sidebarLayouts">
							</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="
fas fa-signal"></i>
								<p>Report</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="#">
											<span class="sub-item">Stocks Report</span>
										</a>
									</li>
									<li>
										<a href="">
											<span class="sub-item">Staff Report</span>
										</a>
									</li>
								</ul>
							</div>
							</li>		
				</div>
			</div>
		</div>
	</head>
		</html>
		<!-- End Sidebar -->