<?php 
session_start();
$e = $_SESSION['email'];
$sidebar = "dashw";
include('include/header.php');
include('include/navbar.php');
 include('include/scripts.php')
    
?>

<div class="main-panel">
<div class="content"><br><br>
<div class="page-inner">
	

  <div class="container-fluid">
                            
     <div class="page-inner mt--5">
     
     
         <div class="row">
                                   <div class="col-9 col-md-5">
                                       <div class="card card-stats card-secondary bg-secondary-gradient">
                                             <label  class="bg-secondary-gradient btn-lg btn-block"><h2><marquee style="color:white;">  Daily Work . Daily Work . Daily Work . Daily Work </marquee></h2></label>
                             
                                                 
                                         <?php 
                              require 'dbconfig.php';
                          $query = "SELECT id FROM dailywork ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            /*echo '<h4><b> Total Salary:</b> <h1>'.$row.'</h1></h4>'*/

                                                ?>
<!------------------ table------------------------------------------->
<form>
                      <table>
                                                       <thead  class="col-md-4">
                                                            <tr >
                                                            <th style="color: white;  width:100px;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">     Date</h4></th>

                                                                 <th style="color: white; width:100px;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold"> Name</h4></th>
                                                                 
                                                                 <th style="color: white;  width:100px;">


                                                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold"> Price</h4></th>
                                                                
                                                    <th style="color: white;  width:100px;">


                                                        <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">    Done Work</h4></th>
                                          
                                                   
                                                    <th style="color: white;  width:100px;">


                                                        <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">   Total</h4></th>
                                                   
                                                     
                                                       
 </thead>



 <?php
include('db.php');
$sql=mysqli_query($con,"select * from dailywork where email = '".$e."'");
while($row=mysqli_fetch_array($sql))
{
    $id=$row['id'];
    $count=0;
?>
                                                       <tbody>
                                                           <tr>
                                                    
                                                    <td style="color: white;"><?php echo $row['date']; ?></td>
                                                  
                                                   
                                                    <td style="color: white;"><?php echo $row['d_name']; ?></td>
                                                    
                                                  
                                                    <td style="color: white;"><?php echo $row['price']; ?></td>
                                                <!-- </tr><tr>
                                                    
                                                    <td style="color: white;"></td> -->
                                                   
                                                    <td style="color: white;"><?php echo $row['done']; ?></td>
                                                    
                                                    <td style="color: white;"><?php echo $row['price'] * $row['done']; ?></td>
                                                </tr>
                                                            
                                                       </tbody>
                                                        <?php $count++; } ?>   
                                                  </table></form>
                     <a href="salaryw.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                        </div>

                                                  <!------------------------------------------table end ----------------->
                                <!--  <h4 class="card-title">1,294</h4> -->
                                        
                                         
                                  
</div>

 
 <div class="row">


                                      <div class="col-12">
                                        <div class="card card-stats card-info bg-info-gradient">
                                   <label  class=" bg-info-gradient btn-lg btn-block"><h2><marquee style="color:white;">  Total Credit . Total Credit . Total Credit . Total Credit </marquee></h2></label>
                                        
                                             <div class="card-body ">
                                                 
                                                  <div class="row">
                                                       <div class="col-5"> <center>  <h3><b>Salary</b></h3></center>
                                                            <div class="icon-big text-center">
                  <i class="
fas fa-id-card" style="font-size: 65" ></i>
                        </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                
                                                            
<div class="row">
    <?php
include('db.php');
$sql=mysqli_query($con,"select sum(price * done) from dailywork where email = '".$e."'");
$res=mysqli_fetch_array($sql);
$s = mysqli_query($con,"select id from jobs where emailid = '".$e."'");
$r = mysqli_fetch_assoc($s);
$sql1=mysqli_query($con,"select sum(withdraw) from salary where userid = '".$r['id']."'");
$res1=mysqli_fetch_array($sql1);
?>

                              <h4><b> Total Salary </b> &nbsp;&nbsp;&nbsp; <h4> - </h4>&nbsp;&nbsp;&nbsp; <h4> <b>Total Withdraw</b></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <h2 class="text-warning">₹ <?php echo $res['sum(price * done)'];?></h2> &nbsp;&nbsp; &nbsp;<h1>-</h1>&nbsp;&nbsp; &nbsp;<h2 class="text-danger">₹ <?php echo $res1['sum(withdraw)'];?></h2></h4></div>
<div class="row"><h4><b> Total Credit</b></h4></div><div class="row"> <h1 class="text-success">₹ <?php echo $res['sum(price * done)']-$res1['sum(withdraw)'];?></h1></div>


                    
                                                                <!--  <h4 class="card-title">$ 1,345</h4> -->
                                                                <!--  <br>
                                                                 <h4><button>View All</button></h4>  -->
                                                              </div></div></div> </div>  <a href="salaryw.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                                                            
                                                       
                                                  
                                            
                                        </div>
                                   </div>
                                   