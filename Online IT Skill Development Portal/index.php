<?php 
include("./dbconnection.php");
include("./mainInclude/header.php");
 ?>

<!-- Start video backgournd -->
<div class="container-fluid remove-vid-marg">
	<div class="vid-parent">
		<video playsinline autoplay muted loop>
			<source src="video/video.mp4">
		</video>
		<div class="vid-overlay"></div>
	</div>
	<div class="vid-content">
		<h1 class="my-content">Welcome to OITSDP</h1>
		<small class="my-contect">Learn and Implement</small><br>

		<?php 
			if(!isset($_SESSION['is_login'])){
				echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#sturegi">Get Started</a>';
			}else{
				echo '<a href="Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
			}
		 ?>
		<!-- Button trigger modal -->
</button>

	</div>
</div>
<!-- End video backgournd -->


<!-- Start text baner -->
<div class="container-fluid bg-danger txt-banner">
	<div class="row bottom-banner">
		<div class="col-sm">
			<h5><i class="fas fa-book-open mr-3"></i> 100+ online courses<</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-user mr-3"></i>Expert Instructors</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-keyboard mr-3"></i>lifetime Access</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
		</div>
	</div>
</div>

<!-- End text banner -->

<!--Start most populer course-->
<div class="container mt-5">
	<h1 class="text-center">popular Course</h1>
</div>
<!--Start most populer course card 1-->

<div class="card-deck mt-4">
	<div class="row mt-4">
	<?php 
		$sql = "SELECT * FROM course LIMIT 3";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while ($row =$result->fetch_assoc()) {
			 	$course_id = $row['course_id'];
			 	echo '
			 		<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left;padding: 0px;margin: 0px;">
	<div class="card">
		<img src="data:image/jpeg;base64,'.base64_encode($row['course_img']).'"class="card-img-top" alt="Guiter" />
		<div class="card-body">
			<h5 class="card-title">'.$row['course_name'].'</h5>
			<p class="card-text">'.$row['course_desc'].'</p>
		</div>
			<div class="card-footer">
				<p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del></small
				><span class="font-wetght-bolder">&#8377 '.$row['course_price'].'</span></p><a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
			</div>
	</div>
</a>';
			}
		}
	?>
	
</div>
<!--End most populer course-->
<!--Start most populer course card 2-->
<div class="card-deck mt-4">
	<?php 
		$sql = "SELECT * FROM course LIMIT 3,3";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while ($row =$result->fetch_assoc()) {
			 	$course_id = $row['course_id'];
			 	echo '
			 		<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left;padding: 0px;margin: 0px;">
	<div class="card" >
		 <img src="data:image/jpeg;base64,'.base64_encode($row['course_img']).'" style="width: 100%; height: 300px;" class="card-img-top" alt="Guiter"  />
		<div class="card-body">
			<h5 class="card-title">'.$row['course_name'].'</h5>
			<p class="card-text">'.$row['course_desc'].'</p>
		</div>
			<div class="card-footer">
				<p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del></small
				><span class="font-wetght-bolder">&#8377 '.$row['course_price'].'</span></p><a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
			</div>
	</div>
</a>';
			}
		}
	?>
</div>
</div>
<!--End most populer course-->
<div class="text-center">
	<a href="courses.php" class="btn btn-danger btn-sm">View all couses</a>
</div>

<!-- End most populer couse-->

<!-- Contect us start -->
<div style="display: flex;
    justify-content: center;">
<?php include("contect.php"); ?>
</div>
</div>
<!-- End contect us -->


<!-- Start Student terminer-->
<div id="Feedback">
<?php include("feedback.php"); ?>
</div>

<!-- End Terminer-->

<!-- Start social follow-->
<div class="container-fluid bg-danger">
	<div class="row text-white text-center">
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
		</div>
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
		</div>
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>WhatsApp</a>
		</div>
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
		</div>
	</div>
</div>

<!-- Ed scial follow--> 

<!-- Start About section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
	<div class="container" style="background-color:#E9ECEF;">
		<div class="row">
		<div class="col-sm">
			<h5>About US</h5>
			<p>IT provides universal access
			 to the world's best education, partnering with
			  top universities and organization   
			  to offer couses  online
			</p>
		</div>
			<div class="col-sm">
				<h5>Category</h5>
				<a href="#" class="text-dark">Web Development</a><br>
				<a href="#" class="text-dark">Web Designing</a><br>
				<a href="#" class="text-dark">Android App Dev</a><br>
				<a href="#" class="text-dark">ios Development</a><br>
				<a href="#" class="text-dark">Data analysis</a><br>
			</div>
			<div class="col-sm">
				<h5>Contact Us</h5>
				<p>Mumbai:<br>
				ITSDP pvt LTD,<br>
				Bandra Kurla Road, Mumbai, India <br>Maharashtra<br>
				Phone: +918756921354<br><a href="#" target="_blank">www.ITSDP.com</a><br></p>
			</div>
			</div>
		</div>
	</div>
</div>

<!-- Ennd About section -->

<!-- Start Footer -->

<?php include("./mainInclude/footer.php"); ?>

<!-- End Footer -->