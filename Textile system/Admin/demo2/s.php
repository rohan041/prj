<?php 
include("db.php");
if($_GET['id'])
{
$sel = mysqli_query($con,"select email from jobs where id = '".$_GET['id']."'");
$r = mysqli_fetch_assoc($sel);
$e = $r['emailid'];
$s1 = mysqli_query($con,"select status from userreg where email = '".$r['emailid']."'"); 
$rel = mysqli_fetch_assoc($s1);
$rel['status'] == ''
if($rel['status'] == 'Active')
{
	$s = mysqli_query($con,"select * from userreg where email = '".$e."'");
	$rr = mysqli_fetch_assoc($s);

	echo $rr['status'];
}elseif($rel['status'] == 'Deactive'){
$s = mysqli_query($con,"select * from userreg where email = '".$e."'");
$rr = mysqli_fetch_assoc($s);
  echo $rr['status'];
}
}
?>