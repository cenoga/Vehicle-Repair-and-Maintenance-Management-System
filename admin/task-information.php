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
				<li class="active">Tasks</li> <a href="#" class="btn btn-info" style="margin-left:90%"><em class="fa fa-plus">&nbsp;</em> create tasks</a>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-line-chart">&nbsp;</em> Task Information</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div style="margin:10px">
			<table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Transaction Code</th>
                                                <th class="border-top-0">Task Name</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Vehicle Type</th>
                                                <th class="border-top-0">Customer</th>
                                                <th class="border-top-0">Amount</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Completion Date</th>
                                                <th class="border-top-0">Create Invoice</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TSCN-654-21</td>
                                                <td>Task 1</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</td>
                                                <td>Car</td>
                                                <td>Charde Marshall</td>
                                                <td>Php 12,000.00</td>
												<td><span class="badge bg-success">completed</span></td>
                                                <td>Dec 05, 2021</td>
                                                <td><a href="#" class="btn btn-info"><em class="fa fa-plus">&nbsp;</em> create</a></td>
                                                <td><a href="task-details.php" class="btn btn-info"><em class="fa fa-eye">&nbsp;</em> details</a></td>
											</tr>
                                            <tr>
                                                <td>TSCN-567-21</td>
                                                <td>Task 2</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</td>
                                                <td>Car</td>
                                                <td>Quinn Flynn</td>
                                                <td>Php 4,000.00</td>
												<td><span class="badge bg-info">pending</span></td>
                                                <td>Dec 04, 2021</td>
                                                <td><a href="#" class="btn btn-info"><em class="fa fa-plus">&nbsp;</em> create</a></td>
                                                <td><a href="task-details.php" class="btn btn-info"><em class="fa fa-eye">&nbsp;</em> details</a></td>
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