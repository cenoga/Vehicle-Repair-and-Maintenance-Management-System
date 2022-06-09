<!DOCTYPE html>
<html>
<?php include 'includes/header.php'?>
   <link rel="stylesheet" href="../assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css"> 
<body>
	
    <?php include 'includes/topbar.php'?>
    <?php include 'includes/sidebar.php'?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tasks</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-file-text">&nbsp;</em> Invoice</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div style="margin:10px">
			<table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Invoice No.</th>
                                                <th class="border-top-0">Transaction Code</th>
                                                <th class="border-top-0">Total Parts</th>
                                                <th class="border-top-0">Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>INV-654-21</td>
                                                <td>TSCN-765-21</td>
                                                <td>3</td>
                                                <td>Php 15,200</td>
                                            </tr>
                                            <tr>
                                                <td>INV-987-21</td>
                                                <td>TSCN-664-21</td>
                                                <td>3</td>
                                                <td>Php 9,000</td>
                                            </tr>
                                            <tr>
                                                <td>INV-542-21</td>
                                                <td>TSCN-983-21</td>
                                                <td>2</td>
                                                <td>Php 7,000</td>
                                            </tr>
                                            <tr>
                                                <td>INV-987-21</td>
                                                <td>TSCN-874-21</td>
                                                <td>5</td>
                                                <td>Php 19,500</td>
                                            </tr>
                                            <tr>
                                                <td>INV-478-21</td>
                                                <td>TSCN-923-21</td>
                                                <td>2</td>
                                                <td>Php 11,200</td>
                                            </tr>
                                        </tbody>
                                    </table>
			</div><!--/.row-->
		</div>
	</div>	<!--/.main-->
	
    <?php include 'includes/footer.php'?>
   <!-- DataTables  & Plugins -->
   <script src="../assets/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../assets/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="../assets/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
		
</body>
</html>