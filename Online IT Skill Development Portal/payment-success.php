<?php
include 'dbconnection.php';
include './mainInclude/header.php';
if(!isset($_SESSION)){
session_start();
}
if(!isset($_SESSION['stuLogEmail'])){
  echo "<script>location.href = 'loginorsignup.php';</script>";
}elseif(!isset($_GET['id'])){
  echo "<script>location.href = 'index.php';</script>";
}
// get course data from database using id

$sql = "SELECT * From course WHERE course_id = '$_GET[id]'";
$sql = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($sql)) {
  $c_id = $row['course_id'];
  $c_name = $row['course_name'];
  $c_price = $row['course_price'];
}

// get user data using email

$sql = "SELECT * From student WHERE stu_email = '$_SESSION[stuLogEmail]'";
$sql = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($sql)) {
  $s_id = $row['stu_id'];
  $s_name = $row['stu_name'];
  $s_email = $row['stu_email'];
}

  $to=$_SESSION['stuLogEmail'];
    $subject = 'Welcome OITSDP';
    $headers = 'From:itsd.portal@gmail.com';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

   $message =' <h1 style="text-align:center"><span style="color:#ecf0f1"><strong><span style="background-color:#e74c3c">&nbsp;OITSDP&nbsp;</span></strong></span></h1>

<h1 style="text-align:center"><strong>Thank you!</strong></h1>

<p style="text-align:center">A conformation as been sent to your email,</p>
<p style="text-align:center;">your Course purchase Id<b> '.$_GET["oid"].' </b>,</p>

<p style="text-align:center">since you&#39;re here,&nbsp;purchasing course.</p>

<p style="text-align:center"><strong><a href="http://localhost/Online%20IT%20Skill%20Development%20Portal/" style="text-decoration: none; outline: none;"><span style="color:#ffffff"><span style="background-color:#2980b9">GO OITSDP</span></span></a></strong></p>
';
mail($to, $subject, $message, $headers);
  
 
$oid = $_GET['oid'];
$sql = "INSERT INTO courseorder(order_id,stu_email,course_id,course_price) VALUES('$oid','$s_email','$c_id',$c_price)";
  if ($conn->query($sql)) {
  echo "<div class='ml-5 mt-5 text-center'>
  <h2>Paymant Report</h2>
  <table class='table'>
  <tr>
    <th>Order ID</th>
    <td>".$_GET['oid']."<td>
    </tr>
    <tr>
      <th>Email</th>
      <td>".$s_email."</td>
    </tr>
     <tr>
        <th>Course Name </th>
        <td>".$c_name."</td>
    </tr>
    <tr>
        <th>Course Id </th>
        <td>".$c_id."</td>
    </tr>
        <tr>
        <th>Course Price </th>
        <td>".$c_price."</td>
    </tr>
  <tr>
 <td>
 <form class='d-print-none'>
 <div class='row'>
 <div class='text-center'>
 <input class='btn btn-danger font-weight-bold shadow-sm' type='submit' value='Print'
  onClick='window.print()'  value='Print'>
  </div>
  <form>
  </td>
  </tr>
  </table>
  </div>"; 
} else{
  echo "failed";
}
?>
  <div class='text-center d-print-none' >
        <a href='index.php' class='btn btn-info font-weight-bold shadow-sm'><i class="fa fa-home"></i>  Back To Home</a>
      </div>



