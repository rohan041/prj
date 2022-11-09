<?php 
session_start();
$email=$_SESSION['email'];
$valid=$nameErr='';
$sidebar = "dailywork";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
include('db.php');
$name=$_POST['name'];
$price="";
$type="";
$stock="";
$updatestock="";	
if(isset($_POST['name']))
	{
$res=mysqli_query($con,"select price,type,updatestock from work where name='$name'");
$roww=mysqli_fetch_assoc($res);
$price =$roww['price'];
$type =$roww['type'];
$updatestock = $roww['updatestock'];
$done = $roww['done'];

	}
	
if(isset($_GET['add']))
		{
		$res1=mysqli_query($con,"select name,email from userreg where email='".$email."'");
        $row1=mysqli_fetch_assoc($res1);
		$wname=$row1['name'];
		$wemail=$row1['email'];
		$price1 =$_GET['price'];
        $type1 =$_GET['type'];
        $name =$_GET['name'];
        $done1 = $_GET['done'];
		$date = date('y-m-d');
		$sql=mysqli_query($con,"insert into dailywork(e_name,email,price,type,d_name,done,date)values('$wname','$wemail','$price1','$type1','$name','$done1','$date')");
		$update=mysqli_query($con,"update work set updatestock = updatestock - $done1  where name='$name'");
		if($sql=1){
			echo '<script> swal({
						title: "Work Added Successfully",
						text: "",
						icon: "success",
						buttons: {
							confirm: {
								text: "OK",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
				</script>';
				/*echo "<script>setTimeout(\"location.href = 'Dailyworkw.php'\",1750);</script>";*/
		}else{
						echo '<script>alert("wrong");</script>';
		}
		}
?>
	
<div class="main-panel">
			<div class="content">
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
	<div class="card-title"> Add Daily Work</div>
	<div class="card-body">
	
<div class="row">
	  <div class="col-md-6 col-lg-4">
    </div>
	

	
   <form method="POST" action="Dailyworkw.php">
	
	    <div class="form-group">
		    <label for="exampleFormControlSelect1"> Design Name</label>
			
			<select class="form-control" name="name" onchange="this.form.submit()">
			<option value="">SELECT DESIGN NAME</option>
			<?php 
			include("db.php");
			$sql=mysqli_query($con,"select * from work where updatestock > 0");
			while($row=mysqli_fetch_assoc($sql))
			{   
		        $name=$_POST['name'];
				$count==0;
			?>
			
			<option required value="<?php echo $row['name'];?>"><?php echo $row['name']; ?></option><?php $count++;
			
				} 
			echo '</select>';
			?>
			<!--<button type="submit" name="submit">Next</button>-->
			
		</div>	
		
		</form>
	
		<form action="Dailyworkw.php" method="GET">
		 <div class="form-group">
		    <label for="exampleFormControlSelect1"> SELECTED DESIGN NAME</label>
			<input type="text" name="name" class="form-control" style="color:black;"  require value="<?php echo $name; ?>" readonly>
			</div>
	 <div class="form-group">
		    <label for="exampleFormControlSelect1"> Design Price</label>
			<input type="text" name="price" class="form-control" style="color:black;"  require value="<?php echo $price; ?>" readonly>
		
			</div>	
		 <div class="form-group">
		    <label for="exampleFormControlSelect1"> Type of Design</label>
			<input type="text" name="type" class="form-control" style="color:black;"  require value="<?php echo $type; ?>" readonly>
			</div>	
		 <div class="form-group">
		    <label for="exampleFormControlSelect1"> Done work(sarees)</label>
			<input type="number" name="done" class="form-control" style="color:white;" max="<?php echo $updatestock; ?>" placeholder="Enter below=<?php echo $updatestock;?>"  min="0"  required>
		    Work done on selected design till now.<?php echo $updatestock; ?>
			</div>	
			<br>
			<button class="btn btn-success" type="submit" name="add">Add</button>
			<button class="btn btn-danger">Cancel</button>
	
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


