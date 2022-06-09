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
				<li class="active">Reports</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><em class="fa fa-bar-chart">&nbsp;</em> Income Reports</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		<div class="row" style="margin:10px">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                           <table class="table table-bordered mytable">
                               <thead>
                                 <tr>
                                    <th>Month</th>
                                    <th>Income</th>
                                 </tr>
                                </thead>
                              <tbody>
                                 <tr>
                                    <td>January</td>
                                    <td>15000</td>
                                 </tr>
                                 <tr>
                                    <td>February</td>
                                    <td>23000</td>
                                 </tr>
                                 <tr>
                                    <td>March</td>
                                    <td>5500</td>
                                 </tr>
                                 <tr>
                                    <td>April</td>
                                    <td>17000</td>
                                 </tr>
                                 <tr>
                                    <td>May</td>
                                    <td>25000</td>
                                 </tr>
                                 <tr>
                                    <td>June</td>
                                    <td>30000</td>
                                 </tr>
                                 <tr>
                                    <td>July</td>
                                    <td>2000</td>
                                 </tr>
                                 <tr>
                                    <td>August</td>
                                    <td>15000</td>
                                 </tr>
                                 <tr>
                                    <td>September</td>
                                    <td>22000</td>
                                 </tr>
                                 <tr>
                                    <td>October</td>
                                    <td>34000</td>
                                 </tr>
                                 <tr>
                                    <td>November</td>
                                    <td>35000</td>
                                 </tr>
                                 <tr>
                                    <td>December</td>
                                    <td>55000</td>
                                 </tr>
                              </tbody>
                           </table>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                           <canvas id="bargraph" height="250"></canvas>
                  </div>
               </div>
		</div>
	</div>	<!--/.main-->
	
    <?php include 'includes/footer.php'?>
	<script src="../assets/js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
            datasets: [{
               label: 'Income',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [15000, 2300, 5500, 17000, 25000, 30000, 2000, 15000, 22000, 34000, 35000, 55000]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: false,
               }
            }
         });

      });
   </script>
		
</body>
</html>