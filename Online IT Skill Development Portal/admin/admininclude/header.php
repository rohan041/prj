<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title></title>
	<!--Bootstrap link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!--font ausome link -->
	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--Custom css link -->
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>
<style>

.nav{
	display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
</style>


<body>
	<!-- top Navbar-->
	<nav class="navbar navbar-dark fixed-top   p-0 " style="background-color: #383838; height: 60px; box-shadow: 3px 3px 9px 1px ;">
		<a class="navbar-brand col-sm-3 col-md-2 ml-0" href="adminDashboard.php">OITSDP<small class="text-white"> Admin area</small></a>
	</nav>

	<!--Start container side bar-->
	<div class="container-fluid mb-5"  style="margin-top:none; ">
		<div class="row"><!--Start row -->
			<nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="box-shadow: 3px 3px 9px 1px; background: #383838;"><!--nav side bar Start colum 1st  -->
				<div class="sidebar-sticky" style="margin-top:30px;">
					<ul class="nav fex-colum">
						<li class="nav-item" >
							<a class="nav-link a-side-bar" href="adminDashboard.php">
								<i class="fas fa-tachometer-alt"></i>
								Dashboard
							</a>
						</li>
		
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="courses.php">
								<i class="fab fa-accessible-icon"></i>
								Coureses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="article.php">
								<i class="fab fa-accessible-icon"></i>
								Article
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="lessons.php">
								<i class="fab fa-accessible-icon"></i>
								Lessons
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="student.php">
								<i class="fas fa-users"></i>
								Student
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link a-side-bar" href="sellReport.php">
								<i class="fas fa-table"></i>
								Sell Report
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link a-side-bar" href="adminPaymentStatus.php">
								<i class="fas fa-table"></i>
								Payment Status
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link a-side-bar" href="feedback.php">
								<i class="fab fa-accessible-icon"></i>
								Feedback
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link a-side-bar" href="adminChangepass.php">
								<i class="fas fa-key"></i>
								Change Password
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link a-side-bar" href="../logout.php">
								<i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</li>
							
<style type="text/css">
	.a-side-bar{
		color: #fff;
	}
</style>

					</ul>		
				</div>
				
			</nav><!--Side bar End-->