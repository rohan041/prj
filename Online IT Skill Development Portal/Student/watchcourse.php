<?php 
if(!isset($_SESSION)){
	session_start();
}
error_reporting(0);
include_once('../dbconnection.php');

	
if(isset($_SESSION['is_login'])){
$stuLogEmail = $_SESSION['stuLogEmail'];
}else{
	echo "<script> location.href='../index.php';</script>";
}


	if(isset($_GET['course_id'])){
		$sql = "SELECT * FROM lesson WHERE course_id = {$_REQUEST['course_id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!--font ausome link -->
	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--Custom css link -->
	<link rel="stylesheet" type="text/css" href="../css/stustyle.css">
</head>
<body>

	<nav class="container-fluid bg-dark p-2 pl-5 fixed " style="background-color: #244b62;">
  <div class="container-fluid">
    <a class="text-white" style="font-size: 25px;">Welcome To OITSDP</a>
    <a href="./myCourse.php" class="btn btn-secondary" style="margin-left: 71%;">Back To Courses</a>
</div>
</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 border-right">
				<h4 class="text-center">Lessons</h4>
				<ul id="playlist" class="nav-flex-column">
					<?php 
					if (isset($_GET['course_id'])) {
						$course_id = $_GET['course_id'];
						$sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
						$result = $conn->query($sql);
						if($result->num_rows > 0){
							$url_f = "";
							while ($row = $result->fetch_assoc()) {
									
								if ($url_f == "") {
									$url_f = $row['lesson_link']; 
									$copy = $row['lesson_example'];
								}
								$str = "<li class='nav-item border-bottom py-2 ' role='";
								$str .= $row['lesson_example'];
								$str .= " ' title='$row[lesson_link]' style='cursor: pointer;'>$row[lesson_name]</li>";
						echo $str;
						
								}
							}	
					}
						?>
				</ul>
			</div>
<div class="col-sm-8">
		<video id="videoarea" class="mt-5 w-75 ml-2" controls autoplay>
			<source id="videoarea" src="<?=$url_f?>" type="video/mp4">
		</video>		
		<div style="padding: 10px;
    border: 1px solid #9b9b9b;
    border-radius: 4px;
    background: #383838;
    width: 76%;
    color: #ffffff;
    fill: #ffffff;">
			<div style="display: flex;
    
    flex-direction: column;
    align-items: flex-end;"><button id="copy" class="color-svg" style="border: none;
    background: #64636387;
    margin-bottom: -30px;
    outline: none;"><i style="fill: #ffffff" class="fas fa-copy"></i></button></div>
    <style type="text/css">
    	.color-svg svg{
    		
    	}
    </style>
		<pre id="text" style="color: #fff; margin: 5px;">
           <?=$copy?>
     </pre>
   </div>
   </div>
		</div>
	</div>		
</div>


	<!--Bootstrap & jquery  link  for js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!--font awesome  link  for js -->
<script src="../js/all.min.js"></script>
<script type="text/javascript" src="../js/ajexrequest.js"></script>


<script type="text/javascript" src="../js/custom.js"></script>

</body>
</html>