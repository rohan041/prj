<?php

 $apiKey = "rzp_test_WIyn11dx9NWDhJ";
session_start();
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<style>
 .rozerpay-payment-button { display: none; }

</style>


<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_SESSION['pricee'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Online Textile Portal"
    data-description="Employee Salary"
    data-image="https://drive.google.com/drive/my-drive"
    data-prefill.name="Rohan"
    data-prefill.email="rohanpadasala041@gmail.com"
    data-prefill.contact="9374536586"
    data-theme.color="#1572e8"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>


<!-- <script type="text/javascript">


$(document).ready(function(){


$('.rozerpay-payment-button').click()


});

</script> -->