<?php 
$sidebar = "rpt";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
?>
<link rel="stylesheet" type="text/css" href="print.css" media="print">
<div class="main-panel">
      <div class="content">    
<div class="page-inner">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
                                    <div class="card-title">Daily work Report
                                    </div>
                                </div>
  <div class="card-body">
<form action="" method="GET">
    <div class="row">
  <div class="col-md-6 ml-auto mr-auto">
  
                    
                      <div class="row">
                      <div class="col-md-6 ml-auto mr-auto">
                      <div class="form-group">
                                   <label for="birth date">From Date</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                      <input type="Date" class="form-control" name="from_date" min="1940-12-31" max="today" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date'];} ?>">
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6 ml-auto mr-auto">
                      <div class="form-group">
                                   <label for="birth date">To Date</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                      <input type="Date" class="form-control" name="to_date" max="today" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date'];} ?>" >
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-6 ml-auto mr-auto">
                                            <div class="card-action">
                  <button class="btn btn-success" name="submit">Search</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>

</div></div></form></div></div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                      </div>
                </div>
                <div class="card-body">
<div class="col-16 col-md-12">
              <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" style="color: white;">
                      <thead>
                        <tr><th>ID</th>
                          <th> Date</th>
                          <th>Worker Name</th>
                          <th>Design Name</th>
                          <th>Design Type</th>
                          <th>Design Price</th>
                          <th>Done Saree</th> 
                       <th >Total</th>
                        </tr>
                   </thead>  
                    <tbody>
                
<?php 
 $con =  mysqli_connect("localhost","root","","textile1");
 if(isset($_GET['from_date']) && isset($_GET['to_date']))
 {
$from_date = $_GET['from_date'];
$to_date = $_GET['to_date'];

$query = "SELECT * FROM dailywork WHERE date  BETWEEN '$from_date' AND '$to_date' ";
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0)
{
 foreach ($query_run as $row) 
 {
  ?>  
          
                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['date'];?></td>
                          <td><?php echo $row['e_name'];?></td>
                          <td><?php echo $row['d_name'];?></td>
                          <td><?php echo $row['type'];?></td>
                          <td><?php echo $row['price'];?></td>
                          <td><?php echo $row['done'];?></td>  
                          <td><?php echo $row['price'] * $row['done'];?> </td>
                          
                          
                        </tr>
                        
                    <?php
 }
}
else 
{
echo "No Record Found";
}

 }
?>


  </tbody>
                       
                    </table>
                    <div class="text-center">
<button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button> 
                  </div></div>


</div>




                </div>
               

</form>
</div></div></div></div></div></div>






          </div></div></div></div>


          <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


  <!-- Chart JS -->
  <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
  <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

  <!-- Sweet Alert -->
  <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Atlantis JS -->
  <script src="../assets/js/atlantis.min.js"></script>

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