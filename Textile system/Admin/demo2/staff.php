<?php 
$sidebar = "staff";
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



.button-5 {
  align-items: center;
  background-clip: padding-box;
  background-color:#1fd537;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.button-5:hover,
.button-5:focus {
  background-color: #13aa52;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-5:hover {
  transform: translateY(-1px);
}

.button-5:active {
  background-color: #13aa52;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}


.button-52 {
  align-items: center;
  background-clip: padding-box;
  background-color:#e40010;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.button-52:hover,
.button-52:focus {
  background-color: #b3000c;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-52:hover {
  transform: translateY(-1px);
}

.button-52:active {
  background-color: #c85000;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Multi Design</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>
	<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
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
										<h4 class="card-title">Staff</h4>
									<!--<a href="adddesign.php" class=" btn-round ml-auto" ><button class="button" style="vertical-align:middle"><span>Add New Staff </span></button></a>-->

									</div>
								</div>
								

									<div class="table-responsive">
									
										<?php
										include('db.php');
										$sql=mysqli_query($con,"select * from jobs where status = 'confirmed'" );
										
										?>
										
										<table id="add-row" class="display table table-striped table-hover" style="color: white;">
											<thead>
												<tr><th>ID</th>
													<th>Name</th>
													<th>Proof</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Details</th>
													<th>Leave Details</th>
													<th>Active / Deactive</th>
													<th>Action</th>
											</thead><tbody>
											<?php while($row = mysqli_fetch_assoc( $sql )){
												$id = $row['id'];
												$count=1; ?>
											
											<tr>
											
													<td><?php echo $row['id'];?></td>
													<td><?php echo $row['name'];?></td>
													<td><img src="../../Worker/demo2/images/<?php echo $row['adhar'];?>" width="100px" height="100px"></td>
										      <td><?php echo $row['emailid'];?></td>
												<td><?php echo $row['phno1'];?></td>
												<td><div class="card-body">
									
											<?php echo '<a href="viewalldet.php?id='.$id.'"><button class="btn btn-primary">View Details</button></a>'?>
									
								</div></td>
									<td><div class="card-body">
									
											<?php echo '<a href="viewalllv.php?id='.$id.'"><button class="btn btn-secondary">View Details</button></a>'?>
									
								</div></td>

														<td><?php
														$s = mysqli_query($con,"select status from userreg where email = '".$row['emailid']."'"); 
														$rel = mysqli_fetch_assoc($s);
														if($rel['status'] == 'active')
														{
															?>
															<a href="state_data.php?id=<?=$row['emailid']?>" class="btn btn-success" >
														 Active </a>
														<?php }
														$s1 = mysqli_query($con,"select status from userreg where email = '".$row['emailid']."'"); 
														$rel1 = mysqli_fetch_assoc($s1);
                             if($rel1['status'] == 'deactive')
                             	{
                             		?>
														 
															<a href="state_data.php?id=<?=$row['emailid']?>" class="btn btn-danger">
														 Deactive </a><?php 
														  }?></td>
												<td><div class="form-button-action" >
															<?php 
															echo '<a href="deldesign.php?id='.$id.'"<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="delete">
																<i class="fa fa-times"></i>'?>
															</button>
														</div></td>
													
												
												
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

