<!DOCTYPE html>
<html  lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">


	<!--Bootstrap link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!--font ausome link -->
	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Custom css link -->
	<link rel="stylesheet" type="text/css" href="css/style.css">




	<title>OITSDP</title>
</head>
<body>
<!-- start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed " style="background-color: #244b62;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">OITSDP</a>
    <span class="navbar-text" style="color: #efefef;">Learn and Implement</span>
    <button class="navbar-toggler " style="outline:none;" id="btn1"  type="button" >
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
    </button>
    
    <div class="collapse navbar-collapse" id="fgh11">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
         <li class="nav-item custom-nav-item"><a href="Viewarticle.php" class="nav-link">Article</a></li>
        <?php 
          session_start();
          if (isset($_SESSION['is_login'])) {
            echo '<li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" class="nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
          }else{
            echo '<li class="nav-item custom-nav-item"><a href="#stulog" class="nav-link" data-toggle="modal" data-target="#stulog">Login</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#sturegi">Signup</a></li>';
          }

        ?>
        
        
        <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link">Feedback</a></li>
        <li class="nav-item custom-nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End navigation -->
<script type="text/javascript" src="js/custom.js"></script>