<?php 
if (!isset($_SESSION)) {
	session_start();
}

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "lms_db";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if($conn->connect_error){
	die("connection failed");
}

	if (isset($_SESSION['is_login'])) {
		$stuLogEmail = $_SESSION['stuLogEmail'];
	}else{
		echo "<script>location.href='../index.php';</script>";
	}

if(isset($stuLogEmail)){
	$sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
	$result =$conn->query($sql);
	$row = $result->fetch_assoc();
	$stu_img = $row['stu_img'];
}

?>

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
	<link rel="stylesheet" type="text/css" href="../css/stustyle.css">
</head>
<body>
	<!-- Top Navbar-->
	<nav class="navbar navbar-dark fixed-top   p-0 " style="background-color: #383838; height: 60px; box-shadow: 3px 3px 9px 1px ;">
		<a class="navbar-brand col-sm-3 col-md-2 ml-0" href="studentProfile.php">OITSDP</a>
	</nav>
	<!--End Top Navbar-->

	<!--Start side bar -->
	<div class="container-fluid mb-5" style="margin-top:40px;">
		<div class="row">
			<nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="box-shadow: 3px 3px 9px 1px; background: #383838;">
				<div class="sidebar-sticky" style="margin-top:30px;">
					<ul class="nav flex-colum">
						<li class="nav-item mb-3">
							<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['stu_img']).'" height="150" width="150" />'; ?>
						</li>
						<li class="nav-item">
							<a class="nav-link a-side-bar <?PHP if(PAGE == 'profile'){echo 'active';} ?>" href="studentProfile.php">
								<i class="fas fa-user"></i>
								Profile <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="myCourse.php">
								<i class="fab fa-accessible-icon"></i>
								My Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="stufeedback.php">
								<i class="fab fa-accessible-icon"></i>
								Feedback
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-side-bar" href="studentChangePass.php">
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
					</ul>
				</div>
			</nav>

		<style type="text/css">
	.a-side-bar{
		color: #fff;
	}
</style>

	<!--End side bar -->