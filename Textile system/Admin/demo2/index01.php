<?php 
$sidebar = "dash";
 include('include/header.php');
             include('include/navbar.php');
             include('include/scripts.php');
              ?>
              
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dashboard Cards</title>
  
 <style type="text/css">
.c-dashboardInfo {
  margin-bottom: 15px;
}
.c-dashboardInfo .wrap {
  background: #ffffff;
  box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  text-align: center;
  position: relative;
  overflow: hidden;
  padding: 40px 25px 20px;
  height: 100%;
}
.c-dashboardInfo__title,
.c-dashboardInfo__subInfo {
  color: #6c6c6c;
  font-size: 1.18em;
}
.c-dashboardInfo span {
  display: block;
}
.c-dashboardInfo__count {
  font-weight: 600;
  font-size: 2.5em;
  line-height: 64px;
  color: #323c43;
}
.c-dashboardInfo .wrap:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  content: "";
}

.c-dashboardInfo:nth-child(1) .wrap:after {
  background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(2) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(3) .wrap:after {
  background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
}
.c-dashboardInfo:nth-child(4) .wrap:after {
  background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
}
.c-dashboardInfo__title svg {
  color: #d7d7d7;
  margin-left: 5px;
}
.MuiSvgIcon-root-19 {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 24px;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  user-select: none;
  flex-shrink: 0;
}


 </style>

</head>
<body>
		<div class="main-panel">
			<div class="content"><br><br>
				<div class="page-inner">
				<!---------------------------------------------------------------For1st ------------------------>	
					



  <div class="container-fluid">
                            
	<div class="page-inner mt--5">
	
     
         <div class="row">
                                   <div class="col-6">
                                       <div class="card card-stats card-secondary bg-secondary-gradient">
                                             <div class="card-body ">
                                <div class="row">
                                                       <div class="col-sm-6 col-md-3">
                                   <div class="icon-big  text-center"  >
                                                              <i class="fas fa-palette"  style="font-size: 65; color:black;"></i>
                                                            </div>
                                      </div>
                              <div class="col-7 d-flex align-items-center">
                                                  <div class="numbers">
                                                   <p class="card-category">Design / Work</p>
                                         <?php 
                              require 'dbconfig.php';
                          $query = "SELECT id FROM work ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4><b> Total Design:</b> <h1>'.$row.'</h1></h4>'

                                                ?>
<!------------------ table------------------------------------------->
                      <table>
											<thead  class="col-md-4">
												<tr>
												<th style="color: white;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">	  Name</h4></th>
													<th></th>
													<th></th><th></th><th></th><th></th><th></th>
													<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
													<th style="color: white;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Main Stock</h4></th>
													<th></th>
													<th></th><th></th><th></th><th></th><th></th>
													<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
													<th style="color: white;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Remain Work</h4></th>
												</tr>
											</thead>
<?php
include('db.php');
$sql=mysqli_query($con,"select * from work");
while($row=mysqli_fetch_array($sql))
{
	$id=$row['id'];
	$count=0;
?>
											<tbody>
												<tr>
													
													<td style="color: white;"><?php echo $row['name']; ?></td>
													<td></td>
													<td></td><td></td><td></td><td></td><td></td>
													<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
													<td style="color: white;"><?php echo $row['stock']; ?></td>
													<td></td><td></td><td></td><td></td><td></td>
													<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
													<td style="color: white;"><?php echo $row['updatestock']; ?></td>
												</tr>
												<!--  	 -->
											</tbody>
												<?php $count++; } ?>
										</table>
                     </div>

										<!------------------------------------------table end ----------------->
                                <!--  <h4 class="card-title">1,294</h4> -->
                                        </div>
                                  </div>

                  </div><a href="Multidesign.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                        </div>
                                   </div>
                                   <div class="col-6">
                                        <div class="card card-stats card-primary bg-primary-gradient">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-sm-6 col-md-3">
                                                            <div class="icon-big text-center">
                                                                    <i class="

fas fa-shopping-cart" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <p class="card-category">Thread Stocks</p>

<?php 
                              require 'dbconfig.php';
                          $query = "SELECT id FROM stock ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4><b> Total Stock:</b> <h1>'.$row.'</h1></h4>'



                      ?>
<table>
											<thead  class="col-md-4">
												<tr>
												<th style="color: white;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">	  Name</h4></th>
													<th></th>
													<th></th><th></th><th></th><th></th><th></th>
													<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
													<th style="color: white;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Total</h4></th>
													<th></th>
													<th></th><th></th><th></th><th></th><th></th>
													<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
													<th style="color: white;"><h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Remain</h4></th>
												</tr>
											</thead>
<?php
include('db.php');
$sql=mysqli_query($con,"select * from stock");
while($row=mysqli_fetch_array($sql))
{
	$id=$row['id'];
	$count=0;
?>
											<tbody>
												<tr>
													
													<td style="color: white;"><?php echo $row['threadname']; ?></td>
													<td></td>
													<td></td><td></td><td></td><td></td><td></td>
													<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
													<td style="color: white;"><?php echo $row['totalstock']; ?></td>
													<td></td><td></td><td></td><td></td><td></td>
													<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
													<td style="color: white;"><?php echo $row['remainthread']; ?></td>
												</tr>
												<!--  	 -->
											</tbody>
												<?php $count++; } ?>
										</table>
                     </div>


                                                               <!--   <h4 class="card-title">1303</h4> -->
                                                            </div>
                                                       </div>
                                                  </div><a href="Thread.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="row">



                                    <div class="col-sm-4">
                                        <div class="card card-stats card-info bg-info-gradient">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                    <i class="

fas fa-users" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                    <?php 
                              require 'dbconfig.php';
                          $query = "SELECT id FROM jobs where status = 'confirmed' ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4><b> Total Worker</b> <h1>'.$row.'</h1></h4>'



                      ?>
                                                                <!--     <h4 >Active user right now</h4>
                                    <h1 class="mb-4 fw-bold">17</h1>
                                     <h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
                                    <div id="activeUsersChart"></div>
                                    <h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
                                    <ul class="list-unstyled">
                                    
                                    </ul>
                                                                 <p class="card-category">Staff</p>
                                                                 <h4 class="card-title">1303</h4> -->
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div><a href="staff.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                                        </div>
                                   </div>




                                   <div class="col-sm-4">
                                        <div class="card card-stats card-success bg-success-gradient">
                                             <div class="card-body ">
                                                 
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                  <i class="
fas fa-id-card" style="font-size: 65" ></i>
                        </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                <!--  <p class="card-category" style=" font-family: sans-serif; ">Jobs Form</p>
 -->

                                                                   <?php 
                              require 'dbconfig.php';
                          $query = "SELECT id FROM jobs where status = 'pending' ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4><b> Total Jobs</b> <h1>'.$row.'</h1></h4>'



                      ?>
                                                                <!--  <h4 class="card-title">$ 1,345</h4> -->
                                                                <!--  <br>
                                                                 <h4><button>View All</button></h4>  -->
                                                            </div>
                                                       </div>
                                                  </div> </div><a href="jobs.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                                            
                                        </div>
                                   </div>
                                   
                                    
                                   <div class="col-sm-4">
                                        <div class="card card-stats card-danger bg-danger-gradient">
                                             <div class="card-body ">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="

fas fa-wallet" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <!-- <p class="card-category">Total Expense</p> -->
<?php
include('db.php');
$sql=mysqli_query($con,"select sum(amount) from expense");
$res=mysqli_fetch_array($sql);?>

                                                                 <h4 class="card-title">
 <?php echo '<h4><b> Total Expense</b> <h1>'.'₹'.''. $res['sum(amount)'];?></h4> 
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div><a href="expensea.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                                        </div>
                                   </div>







 <div class="col-sm-4">
                                        <div class="card card-stats card-winger bg-warning-gradient">
                                             <div class="card-body ">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="

fas fa-calander" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>

                                        <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <!-- <p class="card-category">Total Expense</p> -->
<?php
include('db.php');
$sql=mysqli_query($con,"select sum(amount) from expense");
$res=mysqli_fetch_array($sql);?>

                                                                 <h4 class="card-title">
 <?php echo '<h4><b> Total Expense</b> <h1>'.'₹'.''. $res['sum(amount)'];?></h4> 
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div><a href="expensea.php"><button type="button" class="btn btn-light btn-lg btn-block">View All</button></a>
                                        </div>
                                   </div>
</div></div>





























                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!--  <div class="row">
                        <div class="col-md-4">
                            <div class="card card-dark bg-primary-gradient">
                                <div class="card-body pb-0">
                                    <div class="h1 fw-bold float-right">+5%</div>
                                    <h2 class="mb-2">17</h2>
                                    <p>Users online</p>
                                    <div class="pull-in sparkline-fix chart-as-background">
                                        <div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->
</div></div></div></div></div>
</body>

<script>
        $('#lineChart').sparkline([102,109,120,99,110,105,115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });</script>
       

    </script>



   