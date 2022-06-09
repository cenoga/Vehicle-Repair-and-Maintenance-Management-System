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
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-user">&nbsp;</em> My Profile</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		<div class="panel-body">
						<div class="col-md-12">
							<form role="form">
								<div class="form-group col-md-12">
									<label>Full Name</label>
									<input class="form-control" value="William Jones">
								</div>
								<div class="form-group col-md-12">
									<label>Address</label>
									<textarea class="form-control">Mangga St. Manila City, Manila Philippines</textarea>
								</div>
								<div class="form-group col-md-12">
									<label>Email</label>
									<input class="form-control" value="William@gmail.com">
								</div>
								<div class="form-group col-md-12">
									<label>Contact</label>
									<input class="form-control" value="09879876846">
								</div>
								<div class="form-group col-md-12">
									
								<div class="form-group col-md-4">
									<label>Avatar </label><img src="../assets/image/10.jpg" width="100" style="border-radius:5px;margin-left:10px"><br><br>
									<input type="file" class="form-control">
								</div>
								<div class="form-group col-md-8">
									
								<div class="form-group col-md-12">
									<label>Username</label>
									<input class="form-control" value="william">
								</div>
								<div class="form-group col-md-12">
									<label>Paswword</label>
									<input class="form-control" value="********">
								</div>
								</div>
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