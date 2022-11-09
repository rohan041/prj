 <?php 
$sidebar = "jobs";
include('include/header.php');
include('include/navbar.php');
?>




<div class="main-panel">
<div class="content">
  <div class="page-inner">
    <div class="col-md-12">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#00</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Salary Invoice</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

  
    <!-- Main content -->
    <section class="invoice" id="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            Employee Management System
            <small class="pull-right">Date: </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Nano Tech</strong><br>
            Bethany<br>
            6964 Ralph Street<br>
            Website: www.nanotech.com<br>
            Email: admin@nanotech.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong></strong><br>
          <br>
         
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #00<?php echo $cnt['id']; ?></b><br>
          <br>
          <b>Paid On:</b> 
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Basic Salary</th>
              <th>Allowance</th>
              <th>Sub Total</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>$ </td>
                <td>$ </td>
                <td>$ </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="visa.png" alt="Visa">
          <img src="mastercard.png" alt="Mastercard">
          <img src="american-express.png" alt="American Express">
          <img src="paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Dear, Our Company has just processed your payments. Your payment has been deposited electronically in your account on 
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Salary Info</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$ </td>
              </tr>
              <tr>
                <th>Tax (0%)</th>
                <td>$ 0</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$ </td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button> -->
          <button type="button" id="cmd" class="btn btn-danger pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
      </div>
    </section>
    <!-- /.content -->

 

    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
  <script>
  $(document).ready(function() {
      var doc = new jsPDF("l", "pt", "letter");
      $('#cmd').click(function () {
        let doc = new jsPDF('p','pt','a4');
        doc.addHTML($('#invoice'),function() {
            doc.save('invoice.pdf');
        }); 
      });
  });
  </script>