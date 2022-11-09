
<?php 
session_start();
$sidebar = "stocks";

include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
include("db.php");
$e = $_SESSION['email'];
?>
<?php if(isset($_GET['iid'])){
     $st  = mysqli_query($con,"select * from inquiry where id = '".$_GET['iid']."'");
    $rr = mysqli_fetch_assoc($st);
    $pl = $rr['inquiryname'];

}?>
<?php 



if(isset($_POST['send'])){
    
    
$iname = $_POST['iname'];
$text = $_POST['text'];
$to = $e;
            $subject = "Textile-Admin-Inquiry".$iname."";
            $txt = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
 <head> 
  <meta charset='UTF-8'> 
  <meta content='width=device-width, initial-scale=1' name='viewport'> 
  <meta name='x-apple-disable-message-reformatting'> 
  <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
  <meta content='telephone=no' name='format-detection'> 
  <title>New message</title> 
  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i' rel='stylesheet'> 
  
  
 </head> 
 <body style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'> 
  <div class='es-wrapper-color' style='background-color:#F1F1F1'> 
  
               </td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
         <tr style='border-collapse:collapse'> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-header-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'> 
             <tr style='border-collapse:collapse'> 
              <td style='Margin:0;padding-top:30px;padding-bottom:30px;padding-left:40px;padding-right:40px;background-color:#333333' bgcolor='#333333' align='left'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td valign='top' align='center' style='padding:0;Margin:0;width:520px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr style='border-collapse:collapse'> 
                      <td align='center' style='padding:0;Margin:0;font-size:0px'><a href='https://viewstripo.email/' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px'><img src='https://uyrlgo.stripocdn.email/content/guids/CABINET_7027dc80c4b2aa1d6dae8d44b506624c/images/sewingmachine.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='57'></a></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr style='border-collapse:collapse'> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#333333;width:600px' cellspacing='0' cellpadding='0' bgcolor='#333333' align='center'> 
             <tr style='border-collapse:collapse'> 
              <td style='Margin:0;padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px;background-image:url('https://uyrlgo.stripocdn.email/content/guids/CABINET_85e4431b39e3c4492fca561009cef9b5/images/93491522393929597.png');background-repeat:no-repeat' align='left' background='https://uyrlgo.stripocdn.email/content/guids/CABINET_85e4431b39e3c4492fca561009cef9b5/images/93491522393929597.png'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td valign='top' align='center' style='padding:0;Margin:0;width:520px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr style='border-collapse:collapse'> 
                      <td align='center' style='padding:0;Margin:0;padding-bottom:10px;padding-top:40px'><h1 style='Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#ffffff'><p style='color: white;'>".$iname."</p></h1></td> 
                     </tr> 
                     <tr style='border-collapse:collapse'> 
                      <td esdev-links-color='#757575' align='center' style='Margin:0;padding-top:10px;padding-bottom:20px;padding-left:30px;padding-right:30px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:23px;color: white;font-size:15px'>I read your inquiry</p></td> 
                     </tr> 
                     
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr style='border-collapse:collapse'> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-content-body' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
             <tr style='border-collapse:collapse'> 
              <td align='left' style='padding:0;Margin:0;padding-top:40px;padding-left:40px;padding-right:40px'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td valign='top' align='center' style='padding:0;Margin:0;width:520px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr style='border-collapse:collapse'> 
                      <td class='es-m-txt-c' align='left' style='padding:0;Margin:0;padding-top:5px;padding-bottom:15px'><h2 style='Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#333333'>ACTION ONYOUR INQUIRY</h2></td> 
                     </tr> 
                     <tr style='border-collapse:collapse'> 
                      <td align='left' style='padding:0;Margin:0;padding-bottom:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:23px;color:#555555;font-size:15px'><strong>".$text."</strong></p></td> 
                     </tr> 
                   
                     <tr style='border-collapse:collapse'>  
                      <td align='left' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:23px;color:#555555;font-size:15px'>Yours sincerely,</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style='border-collapse:collapse'> 
              <td align='left' style='Margin:0;padding-top:10px;padding-bottom:40px;padding-left:40px;padding-right:40px'> 
              
            
               <table cellspacing='0' cellpadding='0' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td align='left' style='padding:0;Margin:0;width:460px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr style='border-collapse:collapse'> 
                      <td align='left' style='padding:0;Margin:0;padding-top:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#222222;font-size:14px'><strong>Navneet Padasala</strong><br></p></td> 
                     </tr> 
                     <tr style='border-collapse:collapse'> 
                      <td align='left' style='padding:0;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#666666;font-size:14px'>ADMIN | Online Textile Portal</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
             </td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr style='border-collapse:collapse'> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#26a4d3;width:600px' cellspacing='0' cellpadding='0' bgcolor='#26a4d3' align='center'> 
             <tr style='border-collapse:collapse'> 
              <td style='Margin:0;padding-bottom:20px;padding-top:40px;padding-left:40px;padding-right:40px;background-color:#26a4d3' bgcolor='#26a4d3' align='left'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td valign='top' align='center' style='padding:0;Margin:0;width:520px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr style='border-collapse:collapse'> 
                      <td class='es-m-txt-c' align='center' style='padding:0;Margin:0'><h2 style='Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#ffffff'>FOR MORE INFORMATION CONTACT US<br></h2></td> 
                     </tr> 
                    
                    
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr style='border-collapse:collapse'> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#292828;width:600px' cellspacing='0' cellpadding='0' bgcolor='#292828' align='center'> 
             <tr style='border-collapse:collapse'> 
              <td align='left' style='Margin:0;padding-top:30px;padding-bottom:30px;padding-left:40px;padding-right:40px'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td valign='top' align='center' style='padding:0;Margin:0;width:520px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr style='border-collapse:collapse'> 
                      <td align='center' style='padding:0;Margin:0;font-size:0'> 
                       <table class='es-table-not-adapt es-social' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                         <tr style='border-collapse:collapse'> 
                          <td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px'><img title='Facebook' src='https://uyrlgo.stripocdn.email/content/assets/img/social-icons/circle-white/facebook-circle-white.png' alt='Fb' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                          <td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px'><img title='Twitter' src='https://uyrlgo.stripocdn.email/content/assets/img/social-icons/circle-white/twitter-circle-white.png' alt='Tw' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                          <td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px'><img title='Instagram' src='https://uyrlgo.stripocdn.email/content/assets/img/social-icons/circle-white/instagram-circle-white.png' alt='Inst' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                          
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding='0' cellspacing='0' class='es-footer' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
         <tr style='border-collapse:collapse'> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-footer-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:600px' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'> 
             <tr style='border-collapse:collapse'> 
              <td align='left' style='Margin:0;padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px'> 
               <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr style='border-collapse:collapse'> 
                  <td valign='top' align='center' style='padding:0;Margin:0;width:520px'> 
                   <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     
                     <tr style='border-collapse:collapse'> 
                      <td align='center' style='padding:0;Margin:0;padding-bottom:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:18px;color:#666666;font-size:12px'>This email was sent to you from OTP</p></td> 
                     </tr> 
                     
                     <tr style='border-collapse:collapse'> 
                      <td align='center' style='padding:0;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:18px;color:#666666;font-size:12px'>® online textile portal 2022 </p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>";
            $header = "From:onlinetextileportal159@gmail.com";
               $header = "MIME-Version: 1.0" . "\r\n";
            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
if(mail($to, $subject, $txt,$header)){
   $update= mysqli_query($con,"update inquiry set status = 'done' where id = '".$_POST['iid']."'");
     echo "<script>alert('success');</script>";
      echo "<script>setTimeout(\"location.href='inquiry.php'\",1500)</script>";
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
                                    <div class="card-title">Inquiry Form
                                    </div>
                                </div>
	<div class="card-body">

		<div class="row">
	<div class="col-md-6 ml-auto mr-auto">
<form method="POST" action="viewinq.php" enctype= multipart/form-data>
 
	
												<div class="form-group"><div class="col-md-6 ml-auto mr-auto">
                                                 <label for="password">Inquiry Name</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                       <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                                       <!--  <span class="input-icon-addon">
                                                       
                                                    </span> -->
                                                    <input class="form-control" aria-label="With textarea" value="<?php echo $rr['inquiryname']; ?>" name="iname"  required>
                                                    <input type="text" name="iid" style="display: none;" value="<?php echo $_GET['iid']; ?>" />
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Desc..  For Action on Inquiry</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-envelope"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                  <textarea class="form-control" aria-label="With textarea" name="text" rows="4" cols="50"></textarea>
                                                </div>
                                            </div>

<div class="col-md-6 ml-auto mr-auto">
                                            <div class="card-action">
									<button class="btn btn-success" name="send">Send Email</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form>




</div></div></div></div></div></div></div></div>

