<?php 
$sidebar = "leav";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php') 
  
?>
<html>
<?php
include('db.php');
if(isset($_GET['iid'])){
	$del = mysqli_query($con,"delete from inquiry where id = '".$_GET['iid']."'");
     //  header("location:inquiry.php");
}

?>
<head> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Multi Design</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">


</head>


<body>
	<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					
					
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Inquiry</h4>
									
									</div>
								</div>
								

									<div class="table-responsive">
									
										<?php
										include('db.php');
										$sql=mysqli_query($con,'select * from inquiry');
										
										
										?>
										
										<table id="add-row" class="display table table-striped table-hover"style="color: white;" >
											<thead>
												<tr><th>ID</th>
													<th>Worker Name</th>
													<th>Inquiry Name</th>
													<th>Descripition</th>
												<th>Which Machine</th>
													<th>Inquiry Photo</th>
													<th>Send SMS</th>
<th style="width: 10%">Take Action</th>

													<th>Delet</th>													
												</tr>
											</thead>	<tbody>
											<?php while($row = mysqli_fetch_assoc($sql)){
												$id = $row['id'];

												$count=1; ?>
										
											<tr>
											
													<td><?php echo $row['id'];?></td>
													<td><?php echo $row['workername'];?></td>
													<td><?php echo $row['inquiryname'];?></td>
													<td><?php echo $row['description'];?></td>
													<td><?php echo $row['machine'];?><d>
													<?php echo '<td><img src="../../Worker/demo2/images/'.$row['inquiryimage']. '" width="169" height="155" alt=" " border="0" /></td>'?>

							
												<td><div class="card-body">
									
											<a href="smsfile.php"><button class="btn btn-secondary">Send SMS</button></a>
								
										
								</div></td>
												<td><div class="card-body">
									<p class="demo">
										<?php if($row['status'] == 'done'){
											echo '<span style="background:green;"><b>seen✅</b></span>';
										}else{?>
											<a href="viewinq.php?iid=<?php echo $row['id'];?>"><button class="btn btn-primary">View Inquiry</button></a>
								<?php } ?>
										</p>
								</div></td>
									<td>
														
															<a href="inquiry.php?iid=<?php echo $row['id'];?>"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button></a>
														
													</td>
													
												
												</tr>
											
											<?php $count++; } ?></tbody>
										</table>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>


									</div>
									
				
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>

</div>
			</div>
<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#Multidesign').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#ID").val(),
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');



			});
		});
	</script>
</body>


</html>
