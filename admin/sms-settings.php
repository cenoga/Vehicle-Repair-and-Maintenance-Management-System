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
				<h1 class="page-header"><em class="fa fa-comments">&nbsp;</em> SMS Settings</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		<div class="panel-body">
						<div class="col-md-12">
						<section class="content">
            <div class="container-fluid">
               <div class="card ">
                  <!-- /.card-header -->
                  <div class="card-header bg-success" style="padding:2px">
                     <h3 class="card-title">SMS Option</h3>
                  </div>
                  <!-- form start -->
                  <form>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="card bg-warning" style="padding:5px">
                                 <div class="card-header">
                                    <p><span class="fa fa-info"></span> To enable SMS Support please insert API code and API Password. <a href="" style="color:#fff">Click here to add.</a> If you don't have one, please obtain trial Api code or Buy ApiCode Package and get your personal api code and api password <a style="color:#fff" href="">here</a>.</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </form>
               </div>
            </div>
            <!-- /.container-fluid -->
         </section><br>
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <!-- /.card-header -->
                  <div class="card-header bg-success" style="padding:2px">
                     <h3 class="card-title">Email Option</h3>
                  </div>
                  <!-- form start -->
                  <form>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="card bg-warning" style="padding:5px">
                                 <div class="card-header">
                                    <p><span class="fa fa-info"></span> This Email Support is powered by PHP Mailer. In order to send email using gmail account, please enable POP and IMAP <a style="color:#fff" href="">here</a>, and turn ON the Less Secuer apps <a style="color:#fff" href="">here</a>. For more documentation of PHPMailer please visit <a style="color:#fff" href="">github.com/PHPMailer</a>. </p>
                                 </div>
                              </div><br>
                              <table id="example1" class="table table-hover">
                     <thead>
                        <tr>
                           <th></th>
                           <th>Username</th>
                           <th>Password</th>
                           <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i></a></td>
                           <td>admin@gmail.com</td>
                           <td>admin_12345</td>
                           <td>Enabled</td>
                        </tr>
                        </tbody>
                  </table>
                           </div>
                        </div>

                     </div>
                  </form>
               </div>
            </div>
            <!-- /.container-fluid -->
         </section>
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