<?php
include("./dbconnection.php");
session_start();
if(!isset($_SESSION['stuLogEmail'])){
	echo "<script>location.href = 'loginorsignup.php';</script>";
}else{
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	$stuemail = $_SESSION['stuLogEmail'];
	define('RAZOR_KEY_ID', "rzp_test_h9w6mRZmdGwWun");
    define('RAZOR_KEY_SECRET', "LNjisrvg8M2bOWCXxFzPKuO4");
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="GENERATOR" content="Evrsoft First Page">

	<!--Bootstrap link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--font ausome link -->
	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--Custom css link -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Checkout</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 jumbotron">
				<h3 class="mb-5">Welcome to Payment Page</h3>
					<div class="form-group row">
						<label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
						<div class="col-sm-8">
							<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php $oid = "ORDS" . rand(10000,99999999); echo $oid; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email	</label>
						<div class="col-sm-8">
						<input id="CUST_ID"  class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($stuemail)){echo $stuemail; } ?>">
					</div>
					</div>
					<div class="form-group row">
						<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
						<div class="col-sm-8">
							<input title="TXN_AMOUNT" class="form-control" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php if(isset($_POST['id'])){echo $_POST['id']; } ?>">
					</div>
				</div>
				<div class="form-group row">
					<!--<label for="INDUSTRY_TYPE_ID" class="col-sm-4 col-form-label">Key</label>	-->
						<div class="col-sm-8">
							<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
						</div>
					</div>
					<div class="form-group row">
						<!--<label for="CHANNEL_ID" class="col-sm-4 col-form-label">Channel</label>-->
						<div class="col-sm-8">
							<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</div>
				</div>
				<div class="text-center" style="display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    gap: 10px;
">
					<button class="flex items-center mt-auto text-white bg-yellow-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-yellow-600 rounded" style="    display: flex;
    background: #3800c1;
    outline: none;
" onclick="$('#razor-pay-now').click()" >Pay
			            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
			              <path d="M5 12h14M12 5l7 7-7 7"></path>
			            </svg>
			          </button>

					<a href="./courses.php" class="btn btn-secondary">Cancel</a>
				</div>
				<small class="form-text text-muted">Note: Complate Payment by Clicking Checkout Button</small>
			</div>
		</div>
	</div>

<form style="display: none;" name="razorpay_frm_payment" class="razorpay-frm-payment" id="razorpay-frm-payment" method="post">
<input type="hidden" name="merchant_order_id" id="merchant_order_id" value="12345"> 
<input type="hidden" name="language" value="EN"> 
<input type="hidden" name="currency" id="currency" value="INR"> 
<input type="hidden" name="surl" id="surl" value="http://localhost/Online%20IT%20Skill%20Development%20Portal/payment-success.php?id=<?=$_POST['data']?>&oid=<?=$oid?>"> 
<input type="hidden" name="furl" id="furl" value="http://localhost/Online%20IT%20Skill%20Development%20Portal/payment-fail.php"> 
<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>Razorpay Payment Gateway Integration using PHP with cURL</h2>
    </div>
    <div class="row align-items-center">
       <div class="form-group col-md-6">
        <label for="inputEmail4">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="amount" value="<?php if(isset($_POST['id'])){echo $_POST['id']; } ?>" readonly="readonly">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Full Name</label>
        <input type="text" name="billing_name" class="form-control" id="billing-name"  Placeholder="Name" value="<?php if(isset($_POST['id'])){echo $_POST['name']; } ?>" required> 
      </div>
  </div>
    <div class="row align-items-center">
       <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="billing_email"class="form-control" id="billing-email" Placeholder="Email" value="<?php if(isset($stuemail)){echo $stuemail; } ?>" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Phone</label>
        <input type="text" name="billing_phone" class="form-control" id="billing-phone" Placeholder="Phone" value="" >
      </div>
  </div>
    <div class="row align-items-center">  
      <div class="form-group col-md-6">
        <label for="inputEmail4">Address</label>
         <input type="text" name="billing_address" class="form-control" Placeholder="Address" value="">
      </div>
       <div class="form-group col-md-6">
        <label for="inputEmail4">Country</label>
        <input type="text" name="billing_country" class="form-control" Placeholder="Country" value="IN">
      </div>
    </div>

    <div class="row align-items-center">  
      <div class="form-group col-md-6">
        <label for="inputEmail4">State</label>
         <input type="text" name="billing_state" class="form-control" Placeholder="State" value="Gujrat"> 
      </div>
       <div class="form-group col-md-6">
        <label for="inputEmail4">Zipcode</label>
        <input type="text" name="billing_zip" class="form-control" Placeholder="Zipcode" value="123456">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-success mt-4 float-right" id="razor-pay-now" ><i class="fa fa-credit-card" aria-hidden="true" ></i> Pay</button>
      </div>
    </div>
</div>
</section>
</form>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
  if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/service-worker.js');
  });
}
  jQuery(document).on('click', '#razor-pay-now', function (e) { 
    var total = (jQuery('form#razorpay-frm-payment').find('input#amount').val() * 100);
    var merchant_order_id = jQuery('form#razorpay-frm-payment').find('input#merchant_order_id').val();
    var merchant_surl_id = jQuery('form#razorpay-frm-payment').find('input#surl').val();
    var merchant_furl_id = jQuery('form#razorpay-frm-payment').find('input#furl').val();
    var card_holder_name_id = jQuery('form#razorpay-frm-payment').find('input#billing-name').val();
    var merchant_total = total;
    var merchant_amount = jQuery('form#razorpay-frm-payment').find('input#amount').val();
    var currency_code_id = jQuery('form#razorpay-frm-payment').find('input#currency').val();
    var key_id = "<?php echo RAZOR_KEY_ID; ?>";
    var store_name = 'Online IT Skill Development Portal';
    var store_description = 'Payment';
    var store_logo = 'https://webhaunt.com/wp-content/uploads/2016/11/webhaunt.png';
    var email = jQuery('form#razorpay-frm-payment').find('input#billing-email').val();
    var phone = jQuery('form#razorpay-frm-payment').find('input#billing-phone').val();
    
    jQuery('.text-danger').remove();

    
    var razorpay_options = {
        key: key_id,
        amount: merchant_total,
        name: store_name,
        description: store_description,
        image: store_logo,
        netbanking: true,
        currency: currency_code_id,
        prefill: {
            name: card_holder_name_id,
            email: email
        },
        notes: {
            soolegal_order_id: merchant_order_id
        },
        handler: function (transaction) {
            jQuery.ajax({
                url:"callback.php?id1=<?=RAZOR_KEY_ID?>&id2=<?=RAZOR_KEY_SECRET?>",
                type: 'post',
                data: {razorpay_payment_id: transaction.razorpay_payment_id, merchant_order_id: merchant_order_id, merchant_surl_id: merchant_surl_id, merchant_furl_id: merchant_furl_id, card_holder_name_id: card_holder_name_id, merchant_total: merchant_total, merchant_amount: merchant_amount, currency_code_id: currency_code_id}, 
                dataType: 'json',
                success: function (res) {
                    if(res.msg){
                        alert(res.msg);
                        return false;
                    } 
                    window.location = res.redirectURL;
                }
            });
        },
        "modal": {
            "ondismiss": function () {
                // code here
            }
        }
    };
    // obj        
    var objrzpv1 = new Razorpay(razorpay_options);
    objrzpv1.open();
        e.preventDefault();
            
});
</script>

</body>
</html>

<?php }

?>
