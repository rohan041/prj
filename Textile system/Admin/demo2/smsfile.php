<?php 

$sidebar = "staff";
include('include/header.php');
include('include/navbar.php');
    include('include/scripts.php');

    use Twilio\Rest\Client;

if (isset($_POST['send'])) {
    
require  'SMS/vendor/autoload.php';

    // Your Account SID and Auth Token from twilio.com/console
    $sid = 'ACd9290ebb5878b407f56a9ca74a288fb7';
    $token = '92d028f675d35036b21e642b4bf8401c';
    $client = new Client($sid, $token);

    // Use the client to do fun stuff like send text messages!
    $client->messages->create(
        // the number you'd like to send the message to
        "+91".$_POST['mobile'],
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+19034379650',
            // the body of the text message you'd like to send
            'body' => $_POST['message'],
        ]
    );
}

?>


<div class="main-panel">
            <div class="content">
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                                    <div class="card-title">SMS Inquiry Form
                                    </div>
                                </div>
    <div class="card-body">

        <div class="row">
    <div class="col-md-6 ml-auto mr-auto">
<form method="POST" enctype= multipart/form-data>
 
    
                                               
                                             <div class="form-group"><div class="col-md-6 ml-auto mr-auto">
                                                 <label for="password">Mobile No:</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                       <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                                       <!--  <span class="input-icon-addon">
                                                       
                                                    </span> -->
                                                    <div style="display: flex;">
                                                        <label style="position: absolute; margin-top: 10px; margin-left: 5px;  size: 20px;">+91</label>
                                                        <input class="form-control" style="padding-left: 36px;" aria-label="With textarea"name="mobile"  required>
                                                    </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="password">Description  For Action on Inquiry</label>
                                               <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" > <i class="fa fa-envelope"></i> </span>
                                                        <span class="input-icon-addon">
                                                       
                                                    </span>
                                                    </div>
                                                  <textarea class="form-control" aria-label="With textarea" name="message" rows="4" cols="50"></textarea>
                                                </div>
                                            </div>

<div class="col-md-6 ml-auto mr-auto">
                                            <div class="card-action" style="display: flex;">
                                    <input class="btn btn-success" name="send" type="submit" value="Send SMS">
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                                </form>


</div></div></div></div></div></div></div></div>



<!--   
// Required if your environment does not handle autoloading


// Use the REST API Client to make requests to the Twilio REST API


    //m
//use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console

    //m
//$sid = 'ACd9290ebb5878b407f56a9ca74a288fb7';
//$token = '92d028f675d35036b21e642b4bf8401c';
//$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!

//$client->messages->create(
    // the number you'd like to send the message to
    //'+15558675309',
   // [
        // A Twilio phone number you purchased at twilio.com/console
      //  'from' => '+19034379650',
        // the body of the text message you'd like to send
        //'body' => 'Hey Jenny! Good luck on the bar exam!'
   // ]
//);?> -->