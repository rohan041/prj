<?php
include('db.php');
$id = $_GET['id'];

$delete = mysqli_query($con,"delete from dailywork where id ='".$id."'");

header("location: salarya.php");
?>