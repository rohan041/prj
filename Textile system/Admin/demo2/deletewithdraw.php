<?php
include('db.php');
$id = $_GET['id'];

$delete = mysqli_query($con,"delete from salary where id ='".$id."'");

header("location: viewwithdraw.php");
?>