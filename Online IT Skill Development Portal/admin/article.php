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
	<p class="bg-dark text-white p-2 mt-4">List Courses</p>
	<?php 
	$sql = "SELECT * FROM article";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
	?>
	<table class="table">
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Title</th>
			<th scope="col">Date</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php 
			while($row = $result->fetch_assoc()){
			echo '<tr>';
			echo '<th scope="row">'.$row['Id'].'</th>';
			echo '<td>'.$row['Title'].'</td>';
			echo '<td>'.$row['Date'].'</td>';
			echo '<td>';
			echo '
			<form action="Editarticle.php" method="POST" class="d-inline">
			<input type="hidden" name="id" value='.$row["Id"].'>
			<button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button>
				</form>';
			echo '
				<form action="" method="POST" class="d-inline">
				<input type="hidden" name="id" value='.$row["Id"].'>
				<button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button> 
				</form>';
			echo '</td>';
			echo '</tr>';
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
		$articleid = $_REQUEST['id'];
		$sql = "DELETE FROM article WHERE Id= {$articleid}";
		if($conn->query($sql)==TRUE){
			echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
		}else {
			echo "Unable to delete data";
		}
	}
?>
</div>
<div>
	<a class="btn btn-danger box" style="margin-top:550px; margin-left: 20px;" href="./addarticle.php" ><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php 
include("admininclude/footer.php");
?>