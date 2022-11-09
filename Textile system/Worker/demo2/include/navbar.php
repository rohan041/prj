<?php

include("db.php"); 
?>
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
				
				<a href="Dashboardw.php" class="logo">
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
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="true" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="true">
								<div class="avatar-sm"> 
									<img src="../demo2/images/<?php echo $_SESSION['proof']?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
						
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../demo2/images/<?php echo $_SESSION['proof']?>" alt="image profile" class="avatar-img rounded"></div>

											<div class="u-text">
												<!-- <h4>Hizrian</h4>
												<p class="text-muted"></p> --><a href="/Textile system/Worker/demo2/myprofile.php" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
												</a><div class="dropdown-divider"></div>
<p class="text-muted"></p><a href="/Textile system/Worker/demo2/changepwd.php" class="btn btn-xs btn-primary btn-sm">Change Password</a>
												</a><div class="dropdown-divider"></div>
<p class="text-muted"></p><a href="/Textile system/Home page/homepage.php" class="btn btn-xs btn-success btn-sm">Logout</a>
												
											</div>
										</div>
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
					
					<ul class="nav nav-primary">
						<li <?=($sidebar == "dashw") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a  href="/Textile system/Worker/demo2/Dashboardw.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li> -->
						<!-- <li <?=($sidebar == "jobsw") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
						
								<a href="/Textile system/Worker/demo2/Jobsw.php"><i class="fa fa-graduation-cap"></i><p>Jobs</p></a>
							</a>
							
						</li> -->

						<li <?=($sidebar == "stockw") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a data-toggle="collapse" href="#forms">
								<i class="
fas fa-shopping-cart"></i>
								<p>Stocks</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="/Textile system/Worker/demo2/Threadw.php">
											<span class="sub-item">Thread</span>
										</a>
									</li>
									
									<li>
										<a href="/Textile system/Worker/demo2/Inquiryw.php">
											<span class="sub-item">Inquiries</span>
										</a>
									</li>
								</ul>
							</div>
							
						</li>
						<li <?=($sidebar == "dailywork") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a  href="/Textile system/Worker/demo2/Dailyworkw.php">
								<i class="fa fa-briefcase"></i>
								<p>Daliy Work</p>
								
							</a>
							
									
						
						<li <?=($sidebar == "salary") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a href="/Textile system/Worker/demo2/salaryw.php">
								<i class="fas fa-rupee-sign"></i>
								<p>Salary</p>
								
							</a>
							
							
						</li>
						
						<li <?=($sidebar == "exw") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a  href="/Textile system/Worker/demo2/expense.php">
								<i class="fas fa-wallet"></i>
								<p>Expense</p>
								
							</a>
							
							</li>

<li <?=($sidebar == "lev") ? 'class="nav-item nav-item-activ"' : 'class="nav-item"' ; ?>>
							<a  href="/Textile system/Worker/demo2/leavefrm.php">
								<i class="fas fa-wallet"></i>
								<p>Leave</p>
								
							</a>
							
							</li>		

											</div>
			</div>
		</div>
	</head>
		</html>
		<!-- End Sidebar -->