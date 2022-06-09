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
				<li class="active">Team Member</li> <a href="#" class="btn btn-info" style="margin-left:88%"><em class="fa fa-user-plus">&nbsp;</em> add member</a>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-user-secret">&nbsp;</em> Team Members</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div style="margin:10px">
			<table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Full Name</th>
                                                <th class="border-top-0">Designation</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Account Status</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jared Murphy</td>
                                                <td>Mechanic</td>
                                                <td>123 st. Manggahan, Pasig</td>
                                                <td>jred@gmail.com</td>
                                                <td><span class="badge bg-success">active</span></td>
												<td>
													<ul class="pull-right panel-settings" style="border:none">
														<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
															<em class="fa fa-cogs"></em>
														</a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li>
																	<ul class="dropdown-settings">
																		<li><a href="#">
																			<em class="fa fa-eye"></em> view
																		</a></li>
																		<li><a href="#">
																			<em class="fa fa-edit"></em> edit
																		</a></li>
																		<li class="divider"></li>
																		<li><a href="#">
																			<em class="fa fa-trash"></em> delete
																		</a></li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Mechanic</td>
                                                <td>Manga st. Rosario, Pasig</td>
                                                <td>bradley@gmail.com</td>
                                                <td><span class="badge bg-success">active</span></td>
												<td>
													<ul class="pull-right panel-settings" style="border:none">
														<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
															<em class="fa fa-cogs"></em>
														</a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li>
																	<ul class="dropdown-settings">
																		<li><a href="#">
																			<em class="fa fa-eye"></em> view
																		</a></li>
																		<li><a href="#">
																			<em class="fa fa-edit"></em> edit
																		</a></li>
																		<li class="divider"></li>
																		<li><a href="#">
																			<em class="fa fa-trash"></em> delete
																		</a></li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Mechanic</td>
                                                <td>Ampalya st. Napico, Pasig</td>
                                                <td>bruno@gmail.com</td>
                                                <td><span class="badge bg-success">active</span></td>
												<td>
													<ul class="pull-right panel-settings" style="border:none">
														<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
															<em class="fa fa-cogs"></em>
														</a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li>
																	<ul class="dropdown-settings">
																		<li><a href="#">
																			<em class="fa fa-eye"></em> view
																		</a></li>
																		<li><a href="#">
																			<em class="fa fa-edit"></em> edit
																		</a></li>
																		<li class="divider"></li>
																		<li><a href="#">
																			<em class="fa fa-trash"></em> delete
																		</a></li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Mechanic</td>
                                                <td>Atis st. Rosario, Pasig</td>
                                                <td>cedric@gmail.com</td>
                                                <td><span class="badge bg-success">active</span></td>
												<td>
													<ul class="pull-right panel-settings" style="border:none">
														<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
															<em class="fa fa-cogs"></em>
														</a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li>
																	<ul class="dropdown-settings">
																		<li><a href="#">
																			<em class="fa fa-eye"></em> view
																		</a></li>
																		<li><a href="#">
																			<em class="fa fa-edit"></em> edit
																		</a></li>
																		<li class="divider"></li>
																		<li><a href="#">
																			<em class="fa fa-trash"></em> delete
																		</a></li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</td>
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