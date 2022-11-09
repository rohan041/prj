<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/inter-ui/3.19.3/inter.css'><link rel="stylesheet" href="./style.css">
<style type="text/css">


section {
  font-family: 'Inter', sans-serif;
}





</style>
</head>
<body>
<!-- partial:index.partial.html -->
<!--
Include Tailwind JIT CDN compiler
More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
-->
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<!-- Specify a custom Tailwind configuration -->
<script type="tailwind-config">
{
  theme: {
    extend: {
      colors: {
        gray: colors.blueGray,
        pink: colors.fuchsia,  
      }
    }
  }
}
</script>

<!-- Snippet -->
<section class="flex flex-col justify-center antialiased bg-gray-200 text-gray-600 min-h-screen p-4">
    <div class="h-full">
        <!-- Card -->
        <form  action="payscript.php" method="post" style="padding: 25px;">
        <div class="max-w-[360px] mx-auto">
            <div class="bg-white shadow-lg rounded-lg mt-9">
                <!-- Card header -->
                <header class="text-center px-5 pb-5">
                    <!-- Avatar -->
                   <!--  <svg class="inline-flex -mt-9 w-[72px] h-[72px] fill-current rounded-full border-4 border-white box-content shadow mb-3" viewBox="0 0 72 72"> -->
                       <center><img src="sewing-machine.png" width="80px" height="80px"></center>
                    <!-- </svg> -->
                    <!-- Card name -->
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Payment For Salary</h3>
                    <div class="text-sm font-medium text-gray-500">Online Textile Portal</div>
                </header>
                <!-- Card body -->
                <div class="bg-gray-100 text-center px-5 py-6">
                    <div class="text-sm mb-6"><strong class="font-semibold">₹ <?php 
                    $_SESSION['pricee'] = $_GET['id2']; echo $_GET['id2'];?></strong> <!-- due Jan 27, 2022 --></div>
                    <form class="space-y-3">
                        <div class="flex shadow-sm rounded">
                            <?php
                            include('db.php');

    if(isset($_GET['id'])){
     $select = mysqli_query($con,"select * from jobs where id = '".$_GET['id']."'");
     $row = mysqli_fetch_assoc($select);
    }


                            ?>
                            <div class="flex-grow">
                                <input name="card-nr" class="text-sm text-gray-800 bg-white rounded-l leading-5 py-2 px-3 placeholder-gray-400 w-full border border-transparent focus:border-indigo-300 focus:ring-0" type="text" placeholder="Name" aria-label="Card Number" value="<?php echo $row['name'];?>" readonly />
                            </div></div>
                            <div class="flex-grow">
                                <input name="card-nr" class="text-sm text-gray-800 bg-white rounded-l leading-5 py-2 px-3 placeholder-gray-400 w-full border border-transparent focus:border-indigo-300 focus:ring-0" type="email" placeholder="E-mail" aria-label="Card Number" value="<?php echo $row['emailid'];?>" readonly/>
                            </div>
                        
                        <div class="flex-grow">
                                <input name="card-nr" class="text-sm text-gray-800 bg-white rounded-l leading-5 py-2 px-3 placeholder-gray-400 w-full border border-transparent focus:border-indigo-300 focus:ring-0" type="Number" placeholder="Mobile No" aria-label="Card Number" value="<?php echo $row['phno1'];?>" readonly />
                            </div>
                        </div>
                        </div>
                         <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IvUD9pYvvGdAKj" async> </script>
                        <button type="submit"  value="Pay Now" class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Pay Now</button>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More components -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.7.0/cdn.js'></script>
</body>
</html>
