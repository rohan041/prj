<?php
include('db.php');
$sql=mysqli_query($con,"select * from work where id = '$_POST[id]'");
while($row=mysqli_fetch_assoc($sql)){
	$arr['prise'] = $row['price'];
	$arr['type'] = $row['type'];
}
echo json_encode($arr);
?>