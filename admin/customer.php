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
				<li class="active">Customer</li> <a href="add-customer.php" class="btn btn-info" style="margin-left:88%"><em class="fa fa-user-plus">&nbsp;</em> add customer</a>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-users">&nbsp;</em> Customers</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div style="margin:10px">
			<table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Full Name</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Contact</th>
                                                <th class="border-top-0">Avatar</th>
                                                <th class="border-top-0">Account Status</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jared Murphy</td>
                                                <td>New York</td>
                                                <td>jred@gmail.com</td>
                                                <td>09898989859</td>
                                                <td><img src="../assets/image/1.jpg" width="50" style="border-radius:5px"></td>
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
                                                <td>Leroy Francis</td>
                                                <td>California, USA</td>
                                                <td>leroy@gmail.com</td>
                                                <td>09898989859</td>
                                                <td><img src="../assets/image/5.jpg" width="50" style="border-radius:5px"></td>
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
                                                <td>Michael William</td>
                                                <td>New York</td>
                                                <td>michael@gmail.com</td>
                                                <td>09898989859</td>
                                                <td><img src="../assets/image/10.jpg" width="50" style="border-radius:5px"></td>
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
                                            </tr><tr>
                                                <td>Alexam Angles</td>
                                                <td>New York</td>
                                                <td>alexam@gmail.com</td>
                                                <td>09898989859</td>
                                                <td><img src="../assets/image/2.jpg" width="50" style="border-radius:5px"></td>
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
                                            </tr><tr>
                                                <td>Quinn Flynn</td>
                                                <td>New York</td>
                                                <td>quin@gmail.com</td>
                                                <td>09898989859</td>
                                                <td><img src="../assets/image/11.jpg" width="50" style="border-radius:5px"></td>
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