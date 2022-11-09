<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" href="pdf.js"></script>
	<script src="html2pdf.bundle.min.js"></script>

	<style type="text/css">

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}

h5 {

  border-radius: 6px;

}

/*007ae1*/
	</style>
</head>
<body>
<div class="container">
<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card" id="invoice">
				<div class="card-body p-0">
					<div class="invoice-container">
						<div class="invoice-header">
							<!-- Row start -->
							<div class="row gutters">
								<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="custom-actions-btns mb-5">
										<a href="#" class="btn btn-primary">
											<i class="icon-download"></i> Download
										</a>
										<a href="#" class="btn btn-secondary">
											<i class="icon-printer"></i> Print
										</a>
									</div>
								</div> -->
							</div>
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<img src="01.png" width="70px" height="70px">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<address class="text-right">
										232-A Jagdish nagar Soc.....<br>
										Daya Park, Bombay market.<br>
										+91 93744365
									</address>
								</div>
							</div>
							<?php
							include('db.php');
                            if(isset($_GET['id'])){


							 $select = mysqli_query($con,"select * from jobs where id = '".$_GET['id']."'");
							 $row = mysqli_fetch_assoc($select);
							}
							?>
							<div class="row gutters">
								<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<address>
											<p style="color: black; font-size: 17px;">Name :- <?php echo $row['name'];?></p><br>
												<p style="color: black; font-size: 17px;">Email Id :- <?php echo $row['emailid'];?></p><br>
												<p style="color: black; font-size: 17px;">Mobile No :- <?php echo $row['phno1'];?></p><br>
										<!-- 	150-600 Church Street, Florida, USA -->
									
										
											<p style="color: black; font-size: 17px; ">Bank Name :- <?php echo $row['bank'];?></p><br>
												<p style="color: black; font-size: 17px;">AC No. :- <?php echo $row['acno'];?></p><br>
												<p style="color: black; font-size: 17px;">IFCE :- <?php echo $row['ifsc'];?></p><br>
										<!-- 	150-600 Church Street, Florida, USA -->
										</address>
									</div>
								</div>
								<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<div class="center"><img src="../../Worker/demo2/images/<?php echo $row['qrphoto'];?>" width="220px" height="200px"  class="center"></div><br><br><br>
<h5 align="center" style="color:black;">Upi Id:- <?php echo $row['upi'];?></h5>
										<!-- <div class="invoice-num">
											<div><p style="color: black; font-size: 17px;">Salary Invoice</p></div>
											<div><p style="color: black; font-size: 17px;">21-01-2020</p></div><br><br><br><br><br><br><br><br>
										</div>
									</div>													 -->
								</div>
							</div>
							<!-- Row end -->
						</div>
						<div class="invoice-body">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="table-responsive">
										<table class="table custom-table m-0">
											<thead>
												<tr><th style="width: 10%">ID</th>
													<th> Date</th>
													<th>Design Name</th>
													<th>Design Price</th>

													<th>Done Saree</th>
													
													
													
													<th >Sub Total</th>
												
													<!-- <th>Items</th>
													<th>Product ID</th>
													<th>Quantity</th>
													<th>Sub Total</th> -->
												</tr>
											</thead>
											<?php if(isset($_GET['id']))
											{
												$select = mysqli_query($con,"select emailid from jobs where id = '".$_GET['id']."'");

												$res=mysqli_fetch_assoc($select);
												$sel = mysqli_query($con,"select * from dailywork where email = '".$res['emailid']."'");
												$rt = mysqli_query($con,"select sum(done * price) from dailywork where email = '".$res['emailid']."'");
												$rt1 = mysqli_fetch_assoc($rt);
												$sele = mysqli_query($con,"select sum(withdraw) from salary where userid = '".$_GET['id']."'");
$my = mysqli_fetch_assoc($sele);
												$rese=mysqli_fetch_assoc($sele);
											
										
											$total = 0;
											
while($res1=mysqli_fetch_assoc($sel))
{
	$total += $res1['price'] * $res1['done'];
	$count = 0;?>
											<tbody>
												
												<tr>
													
														<td><?php echo $res1['id'];?></td>
													<td><?php echo $res1['date'];?></td>
													<td><?php echo $res1['d_name'];?></td>
													<td><?php echo $res1['price'];?></td>
													<td><?php echo $res1['done'];?></td>
													
													
													<td><?php echo $res1['price'] * $res1['done'];?></td> 
												</tr>
												<?php $count++;}  ?>
												<tr>
													<td colspan="4"><div class="col-xs-6 margintop">
				<!-- <p class="lead marginbottom">THANK YOU!</p> --><br><br>
				<button class="btn btn-success" id="invoice" onclick="window.print()"><i class="fa fa-print"></i>Print Invoice </button>
				
				<!-- <button class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</button> -->
<!-- 				<button class="btn btn-primary" id="download"><i class="fa fa-download"></i> Download Invoice</button>
 -->				<script type="text/javascript">
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: "myfile.pdf",
                image: { type: "jpeg", quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: "in", format: "letter", orientation: "portrait" }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
				   <!-- <button class="btn btn-primary" id="download"> download pdf</button> -->
			</div></td>                              
													<td>
														<p>
															Subtotal<br>
															Withdraw <br>
															<!-- Tax<br> -->
														</p>
														<h4 class="text-success"><strong>Grand Total</strong></h5>
													</td>			
													<td >
														<p>
															₹<?php echo $rt1['sum(done * price)'];?><br>
															₹<?php echo $my['sum(withdraw)']; ?><br>
															<!-- ₹49.00<br> -->
														</p>
														<h4 class="text-success"><strong>₹<?php echo $rt1['sum(done * price)'] - $my['sum(withdraw)'];?></strong></h5>
													</td>
<?php }?>
												</tr>
											</tbody>
										
										</table>
									</div>
								</div>

							</div>
							<!-- Row end -->
						</div>
						<div class="invoice-footer">
							Thank you 💕
													</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
body{margin-top:20px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.invoice-container {
    padding: 1rem;
}
.invoice-container .invoice-header .invoice-logo {
    margin: 0.8rem 0 0 0;
    display: inline-block;
    font-size: 1.6rem;
    font-weight: 700;
    color: #2e323c;
}
.invoice-container .invoice-header .invoice-logo img {
    max-width: 130px;
}
.invoice-container .invoice-header address {
    font-size: 0.8rem;
    color: #9fa8b9;
    margin: 0;
}
.invoice-container .invoice-details {
    margin: 1rem 0 0 0;
    padding: 1rem;
    line-height: 20%;
    background: #f5f6fa;
}
.invoice-container .invoice-details .invoice-num {
    text-align: right;
    font-size: 0.8rem;
}
.invoice-container .invoice-body {
    padding: 1rem 0 0 0;
}
.invoice-container .invoice-footer {
    text-align: center;
    font-size: 0.7rem;
    margin: 5px 0 0 0;
}

.invoice-status {
    text-align: center;
    padding: 1rem;
    background: #ffffff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 1rem;
}
.invoice-status h2.status {
    margin: 0 0 0.8rem 0;
}
.invoice-status h5.status-title {
    margin: 0 0 0.8rem 0;
    color: #9fa8b9;
}
.invoice-status p.status-type {
    margin: 0.5rem 0 0 0;
    padding: 0;
    line-height: 150%;
}
.invoice-status i {
    font-size: 1.5rem;
    margin: 0 0 1rem 0;
    display: inline-block;
    padding: 1rem;
    background: #f5f6fa;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}
.invoice-status .badge {
    text-transform: uppercase;
}

@media (max-width: 767px) {
    .invoice-container {
        padding: 1rem;
    }
}


.custom-table {
    border: 1px solid #e0e3ec;
}
.custom-table thead {
    background: #007ae1;
}
.custom-table thead th {
    border: 0;
    color: #ffffff;
}
.custom-table > tbody tr:hover {
    background: #fafafa;
}
.custom-table > tbody tr:nth-of-type(even) {
    background-color: #ffffff;
}
.custom-table > tbody td {
    border: 1px solid #e6e9f0;
}


.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.text-success {
    color: #00bb42 !important;
}

.text-muted {
    color: #9fa8b9 !important;
}

.custom-actions-btns {
    margin: auto;
    display: flex;
    justify-content: flex-end;
}

.custom-actions-btns .btn {
    margin: .3rem 0 .3rem .3rem;
}
.icon{



}
</style>


</body>
</html>