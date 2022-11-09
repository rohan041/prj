<?php
include("db.php");
	 $id=$_REQUEST['id'];
	 $res=mysqli_query($con,"SELECT name,phno1,emailid FROM jobs WHERE id=$id");
	 $row=mysqli_fetch_assoc($res);
	 $date = date('y/m/d');
	$select = mysqli_query($con,"delete from jobs where id='".$id."'");

  $select = mysqli_query($con,"delete from userreg where email='".$row['emailid']."'");

	        $to = $row['emailid'];
	        $name = $row['name'];
            $subject = "Textile-Admin";
            $txt = "<b>Hello!</b> ".$name."sorry your form not selected ☹️!! We will contact you.
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <meta name='x-apple-disable-message-reformatting'>
  <title></title>
  
  
</head>
<body style='margin:0;padding:0;word-spacing:normal;background-color:#939297;'>
  <div role='article' aria-roledescription='email' lang='en' style='text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;'>
    <table role='presentation' style='width:100%;border:none;border-spacing:0;'>
      <tr>
        <td align='center' style='padding:0;'>
          
          <table role='presentation' style='width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;'>
          
            <tr>
              <td style='padding:30px;background-color:#ffffff;'>
                <center><h1 style='margin-top:0;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;'>Welcome To Online Textile Portal</h1>
                <p style='margin:0; color: red;'><b>Sorry, ☹️ You are not selected for this job </b> <a href='http://www.example.com/' style='color:#e50d70;text-decoration:underline;'></a></p></center>
              </td>
            </tr>
            <tr>
            
            </tr>
            <tr>
              <td style='padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);'>
                
                <div class='col-sml' style='display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;'>
                  <img src='https://assets.codepen.io/210284/icon.png' width='115' alt='' style='width:115px;max-width:80%;margin-bottom:20px;'>
                </div>
               
                <div class='col-lge' style='display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;'>
                  <p style='margin-top:0;margin-bottom:12px;'><h1>Better luck try again</h1></p>
                  <p style='margin-top:0;margin-bottom:18px;'>apply next time.</p>
                  <p style='margin:0;'><a style='background: #ff3884; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884'><span style='mso-text-raise:10pt;font-weight:bold;'></span></a></p>
                </div>
               
              </td>
            </tr>
           
              <td style='padding:30px;background-color:#ffffff;'>
                <center><p style='margin:0;'>Check our website for more inquiry. </p> 
             </center> </td>
            </tr>
            <tr>
              <td style='padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;'>
                <p style='margin:0 0 8px 0;'><a href='http://www.facebook.com/' style='text-decoration:none;'><img src='https://assets.codepen.io/210284/facebook_1.png' width='40' height='40' alt='f' style='display:inline-block;color:#cccccc;'></a> <a href='http://www.twitter.com/' style='text-decoration:none;'><img src='https://assets.codepen.io/210284/twitter_1.png' width='40' height='40' alt='t' style='display:inline-block;color:#cccccc;'></a></p>
                <p style='margin:0;font-size:14px;line-height:20px;'>&reg; online textile portal 2022<br></p>
              </td>
            </tr>
          </table>
       
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
";
            $header = "From:onlinetextileportal159@gmail.com";
			$header = "MIME-Version: 1.0" . "\r\n";
            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			mail($to,$subject,$txt,$header);
	if($row=1){
		echo '<script>alert("Rejected For Job")</script>';
		echo "<script>setTimeout(\"location.href = 'staff.php'\",1500);</script>";
	}else
	{
		echo '<script>alert("something went wrong!!")</script>';
	}
 ?>
