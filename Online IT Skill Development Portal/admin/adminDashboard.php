<?php 
if(!isset($_SESSION)){
	session_start();
}
include("admininclude/header.php");
include("../dbconnection.php");

if(isset($_SESSION['is_admin_login'])){
	$adminEmail = $_SESSION['adminlogemail'];
}else{
	echo "<script> location.href='../index.php'; </script>";
}

$sql = "SELECT * FROM course";
$result = $conn->query($sql);
$totalcourse = $result->num_rows;
while($rowc = $result->fetch_assoc()){
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
$totalstu = $result->num_rows;

$sql = "SELECT * FROM courseorder";
$result = $conn->query($sql);
$totalsold = $result->num_rows;
?>
<div class="col-sm-9 mt-5">
	<div class="row mx-5 text-center">
		<div class="col-sm-4 mt-5">
			<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
				<div class="card-header">Courses</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php echo $totalcourse; ?>
						</h4>
					<a class="btn text-white" href="courses.php">View</a>
				</div>
			</div>
		</div>

		<div class="col-sm-4 mt-5">
			<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
				<div class="card-header">Student</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php echo $totalstu; ?>
						</h4>
					<a class="btn text-white" href="student.php">View</a>
				</div>
			</div>
		</div>

		<div class="col-sm-4 mt-5">
			<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
				<div class="card-header">Sold</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php echo $totalsold; ?>
						</h4>
					<a class="btn text-white" href="sellReport.php">View</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mx-5 mt-5 text-center">
		<!-- Table-->
		<p class="bg-dark text-white p-2">Courses Ordered</p>
		<?php 
		$sql = "SELECT * FROM courseorder";
		$result = $conn->query($sql);
		if($result->num_rows > 0){

		echo '<table class="table">
			<thead>
				<tr>
					<th scope="col">Order ID</th>
					<th scope="col">Course ID</th>
					<th scope="col">Student Email</th>
					<th scope="col">Order  Date/Time</th>
					<th scope="col">Amount</th>
					<th scope="col">Action</th>	
				</tr>
			</thead>
			<tbody>';
			while($row = $result->fetch_assoc()){
				echo '<tr>';
				echo '	<th scope="row">'.$row["order_id"].'</th>';
					echo '	<th scope="row">'.$row["course_id"].'</th>';
					echo '	<th scope="row">'.$row["stu_email"].'</th>';
					echo '	<th scope="row">'.$row["order_date"].'</th>';
					echo '	<th scope="row">'.$row["course_price"].'</th>';
					echo '<td><form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='.$row["co_id"].'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>';	
				echo '</tr>';
			}
			echo '</tbody>
		</table>';
			}else{
				echo "0 Result";
			}
			if(isset($_REQUEST['delete'])){
				$sql = "DELETE FROM courseorder WHERE  co_id = {$_REQUEST['id']}";
				if($conn->query($sql) === TRUE){
					echo '<meta http-equiv="refresh" content= "0;URL=?delete" />';
				}else{
					echo "Unable to delete data";
				}
			}
		?>
	</div>
</div>
</div>
</div>
	</div>
	</div>

<?php 
include("admininclude/footer.php");

?> ?>