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

?>

<div class="col-sm-9 mt-5">
	<!--table-->
	<p class="bg-dark text-white p-2 mt-4">List Student</p>
	<?php 
	$sql = "SELECT * FROM student";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
	?>
	<table class="table">
		<thead>
		<tr>
			<th scope="col">Student ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php 
			while($row = $result->fetch_assoc()){
			echo '<tr>';
			echo '<th scope="row">'.$row['stu_id'].'</th>';
			echo '<td>'.$row['stu_name'].'</td>';
			echo '<td>'.$row['stu_email'].'</td>';
			echo '<td>';
			echo '
			<form action="editstudent.php" method="POST" class="d-inline">
			<input type="hidden" name="id" value='.$row["stu_id"].'>
			<button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button>
				</form>';
			echo '
				<form action="" method="POST" class="d-inline">
				<input type="hidden" name="id" value='.$row["stu_id"].'>
				<button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button></form></td></tr>';
				 } ?>
		</tbody>
	</table>
	<?php 
	}else{
	echo '0 Result';
	}
	?>
<?php 
	if(isset($_REQUEST['delete'])){
		$stuid = $_REQUEST['id'];
		$sql = "DELETE FROM student WHERE stu_id= {$stuid}";
		if($conn->query($sql)==TRUE){
			echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
		}else {
			echo "Unable to delete data";
		}
	}
?>
</div>
<div>
	<a class="btn btn-danger box " style="margin-top:550px; margin-left: 20px;" href="./addnewstudent.php" ><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php 
include("admininclude/footer.php");
?>