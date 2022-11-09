 <?php 
 if (!isset($_SESSION)) {
 	session_start();
 }
include_once('../dbconnection.php');

// chcking Email Already registered
if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
	$stuemail = $_POST['stuemail'];
	$sql = "SELECT stu_email FROM student WHERE stu_email = '".$stuemail."'";
	$reslut = $conn->query($sql);
	$row = $reslut->num_rows;
	echo json_encode($row);
}

//Insert Student
if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){

	$stuname = $_POST['stuname'];
	$stuemail = $_POST['stuemail'];
	$stupass = $_POST['stupass'];
	$hash = md5($stupass);
	
	
	$sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES('$stuname', '$stuemail', '$hash')";

	if($conn->query($sql) == TRUE){
	$to=$stuemail;
    $subject = 'Welcome OITSDP';
    $headers = 'From:itsd.portal@gmail.com';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

   $message =' <h1 style="text-align:center"><span style="color:#ecf0f1"><strong><span style="background-color:#e74c3c">&nbsp;OITSDP&nbsp;</span></strong></span></h1>

<h2 style="text-align:center">Hi<strong> <span style="color:#e74c3c">'.$stuname.'</span></strong></h2>

<p style="text-align:center">Welcome to &#39;Online IT Skill Development Portal&#39; we provide education articles and course videos.</p>

<p style="text-align:center">You can see articles and videos.</p>

<p style="text-align:center"><strong><a href="http://localhost/Online%20IT%20Skill%20Development%20Portal/" style="text-decoration: none; outline: none;"><span style="color:#ffffff"><span style="background-color:#2980b9">GO OITSDP</span></span></a></strong></p>
';
$_SESSION['is_login'] = true;
$_SESSION['stuLogEmail'] = $stuemail;
			if (mail($to, $subject, $message, $headers)) {
		   		echo json_encode("ok");
		   }else {
		echo json_encode("Failed");
	}
		
	}

}

//Student Login verification
if(!isset($_SESSION['is_login'])){
	if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && strlen($_POST['stulogpass']) >= 8 && isset($_POST['stulogpass'])){
		$stuLogEmail = $_POST['stuLogEmail'];
		$stuLogPass =  md5($_POST['stulogpass']);

		$sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '".$stuLogEmail."' AND stu_pass = '".$stuLogPass."'";
		$reslut = $conn->query($sql);

		$row = $reslut->num_rows;

		if($row === 1){
			$_SESSION['is_login'] = true;
			$_SESSION['stuLogEmail'] = $stuLogEmail;
			echo json_encode($row);
		}else if ($row === 0) {
			echo json_encode($row);
		}
	}
}
?>
