<?php
	
	include("admininclude/header.php");
	include('../dbconnection.php');

?>


<div class="col-sm-9 mt-5 mx-3">
	<form action="" class="mt-4 form-inline d-print-none" method="POST" enctype="multipart/form-data">
		<div class="form-group mr-3 ">
		<label for="checkid">Enter Payment Id</label>
		<input type="text" class="form-control ml-3" name="ORDER_ID" id="ORDER_ID">	
		</div>
		<button type="submit" class="btn btn-primary" >View</button>
	</form>

<?php
if(isset($_REQUEST['ORDER_ID'])){
$sql= " SELECT * FROM courseorder";
$result = $conn->query($sql);
if ($row =$result->fetch_assoc()){
        echo "<div class='jumbotron ml-5 mt-5'>
        <h1 class='text-center' style='margin-bottom: 4%;'>Payment Receipt</h1>
    <table class='table'>
    <tr>
        <th>Request ID</th>
        <td>".$row['co_id']."<td>
        </tr>
        <tr>
            <th>Name</th>
            <td>".$row['order_id']."</td>
        </tr>
        <tr>
                <th>Email Id </th>
                <td>".$row['stu_email']."</td>
        </tr>
        
        <tr>
                <th>Request Description</th>
                <td>".$row['course_price']."</td>
        </tr>
        <tr>
                <th>Request Date</th>
                <td>".$row['order_date']."</td>
        </tr>
    <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print'
    onClick='window.print()'  value='Print'><form></td>
    </tr>
    </table>
    </div>"; 
}else{
    echo "failed";
}
}

?>
		
<?php include("admininclude/footer.php"); ?>