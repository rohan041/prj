<?php 
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
$sidebar = "salary";
include('include/header.php');
include('include/navbar.php');
    include('include/scripts.php');
?>
<html>
<head> 

<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #1572e8
;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 5px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>


	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Jobs</title>
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
										<h4 class="card-title">Salary</h4>
										<a href="viewwithdraww.php?id=<?php echo $id;?>" class=" btn-round ml-auto" ><button class="button" style="vertical-align:middle"><span>View Withdraw</span></button></a>

									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>

													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="addName" type="text" class="form-control" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Position</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Office</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="fill office">
																</div>
																	
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
                                            <?php 
											include("db.php");
											
											$select = mysqli_query($con,"select * from dailywork where email= '".$email."'");
											?>
										
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" style="color: white;">
											<thead>
												<tr><th>ID</th>
													<th> Date</th>
													<th >Design Name</th>
													<th>Design Price</th>

													<th style="width: 10%">Done Saree</th>
													
													
													
													<th >Total</th>
												
												</tr>
											</thead>
																								<?php
include('db.php');
$sql=mysqli_query($con,"select sum(price * done) from dailywork where email = '".$email."'");
$res=mysqli_fetch_array($sql);?>

											<tfoot>
												<tr>
													<th colspan="2"></th>
													 <th></th>
													<th></th><th></th>
													<th>Total : ??? &nbsp;<?php echo $res['sum(price * done)'];?></th>
												   
												   
												</tr>
											</tfoot><tbody>
											<?php
while($res=mysqli_fetch_assoc($select))
{
	$count=0;
											?>
											
											
												<tr>
													<td><?php echo $res['id'];?></td>
													<td><?php echo $res['date'];?></td>
													<td><?php echo $res['d_name'];?></td>
													<td><?php echo $res['price'];?></td>
													<td><?php echo $res['done'];?></td>
													
													<td><?php echo $res['price'] * $res['done'];?> </td>
													
													
												</tr>
												<!--  	 -->
											
												<?php $count++;}?></tbody>
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
									<div class="card-body">
									<div class="demo">
										<ul class="pagination pg-primary">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
													<span class="sr-only">Previous</span>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
													<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
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
			$('#basic-datatables').DataTable({
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
