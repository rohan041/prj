<?php 
$sidebar = "rpt";
include('include/header.php');
include('include/navbar.php');
include('include/scripts.php');
?>

<div class="main-panel">
      <div class="content">
<div class="page-inner">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
                                    <div class="card-title">Report
                                    </div>
                                </div>
  <div class="card-body">

    <div class="row">
  <div class="col-md-6 ml-auto mr-auto">
   <!--  <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Report</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>----- select option -----</option>
                          <option>Worker</option>
                          <option>Expense</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div> -->
                       <div class="form-group">
                        <label for="exampleFormControlSelect1">Worker Name</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>----- select option -----</option>

                            
                        <!--  //  $query1 = "SELECT * FROM jobs";
                          // $result1 = mysql_query($query1);
                          // while($rows1 = mysql_fetch_arry($result1)){
                          //   $standerdID = $rows1['id'];
                           //  $rowsData1 = $rows1['name'];


                           //}
                          
                          
                          
                      
                          <option value="<?php echo $standerdID; ?>"><?php echo $rowsData1; ?></option>
                         
                          -->
                         
                         
                          <option>Rohan Padasala</option>
                           <option>Sannket Nakrani</option>
                          <option>Hetvi Patel</option>
                           
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Report</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>----- select option -----</option>
                          <option>withdraw</option>
                          <option>Salary</option>
                          <option>Inquiry</option>
                          <option>Stock</option>
                           <option>Expense</option>
                        </select>
                      </div>
                      <div class="row">
                      <div class="col-md-6 ml-auto mr-auto">
                      <div class="form-group">
                                   <label for="birth date">From Date</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                      <input type="Date" class="form-control" name="bdate" min="1940-12-31" max="today">
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
                      <input type="Date" class="form-control" name="bdate" value="<?php echo $today; ?>" >
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-6 ml-auto mr-auto">
                                            <div class="card-action">
                  <button class="btn btn-success" name="add">Search</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>
                </form>
</div></div></div></div></div></div>
                <div class="col-md-6">
              <div class="card full-height">
                <div class="card-body">
                  <div class="card-title">Total income & spend statistics</div>
                  <div class="row py-3">
                    <div class="col-md-4 d-flex flex-column justify-content-around">
                      <div>
                        <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                        <h3 class="fw-bold">$9.782</h3>
                      </div>
                      <div>
                        <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                        <h3 class="fw-bold">$1,248</h3>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div id="chart-container">
                        <canvas id="totalIncomeChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>






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

  <!-- Atlantis DEMO methods, don't include it in your project! -->
  <script src="../assets/js/setting-demo.js"></script>
  <script src="../assets/js/demo.js"></script>
  <script>
    Circles.create({
      id:'circles-1',
      radius:45,
      value:60,
      maxValue:100,
      width:7,
      text: 5,
      colors:['#f1f1f1', '#FF9E27'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-2',
      radius:45,
      value:70,
      maxValue:100,
      width:7,
      text: 36,
      colors:['#f1f1f1', '#2BB930'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-3',
      radius:45,
      value:40,
      maxValue:100,
      width:7,
      text: 12,
      colors:['#f1f1f1', '#F25961'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
      type: 'bar',
      data: {
        labels: ["Jan","Kirti", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agu", "Sep", "Nov", "Dec"],
        datasets : [{
          label: "Total Income",
          backgroundColor: '#fff',
          borderColor: 'rgb(23, 125, 255)',
          data: [6, <?php echo'50' ?>,4, 9, 5, 4, 6, 4, 3, 8, 10,5],
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        scales: {
          yAxes: [{
            ticks: {
              display: false //this will remove only the label
            },
            gridLines : {
              drawBorder: false,
              display : false
            }
          }],
          xAxes : [ {
            gridLines : {
              drawBorder: false,
              display : false
            }
          }]
        },
      }
    });

    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
      type: 'line',
      height: '70',
      width: '100%',
      lineWidth: '5',
      lineColor: '#ffa534',
      fillColor: 'rgba(255, 165, 52, .14)'
    });
  </script>