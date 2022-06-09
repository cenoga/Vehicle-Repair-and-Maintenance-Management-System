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
				<li class="active">Settings</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-cogs">&nbsp;</em> Company Settings</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		<div class="panel-body">
						<div class="col-md-12">
							<form role="form">
								<div class="form-group col-md-12">
									<label>Company Name</label>
									<input class="form-control" value="Vehicle-Repair-and-Maintenance-Management-System">
								</div>
								<div class="form-group col-md-12">
									<label>Address</label>
									<input type="text" class="form-control" value="123 St. Manggahan Pasig City, Philippines 1171">
								</div>
								<div class="form-group col-md-6">
									<label>TIN</label>
									<input type="text" class="form-control" value="00-00301000199-21">
								</div>
								<div class="form-group col-md-6">
									<label>Contact</label>
									<input type="text" class="form-control" value="09089786675">
								</div>
								<div class="form-group col-md-12">
									<label>Logo</label>
									<input type="file" class="form-control">
								</div>
								</div>
									<button type="submit" class="btn btn-danger">Cancel</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
					</div>
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