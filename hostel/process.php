<?php

if (isset($_POST['btn-send']))
 {
	 $Username = $_POST['name']
	  $company = $_POST['company']
	   $Email = $_POST['email']
	    $Phone = $_POST['phone']
         $Message = $_POST['message']
         if (empty($Username) || empty($company) || empty($Email) || empty($Phone) || empty($Message))

          {
         	header('location:index.php?error');

         	         }
}

?>