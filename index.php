<?php 
  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Morris.js Charts</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="sys/bootstrap/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Morris charts -->
    <link rel="stylesheet" href="sys/bootstrap/plugins/morris/morris.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="sys/bootstrap/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="sys/bootstrap/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.php" class="navbar-brand"><b><?php echo"$k_k[nama_app]";?></b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="index.php?aksi=home">Quik Count</a></li>
              
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
 
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <?php
if (isset($_GET['aksi'])){
include 'isi.php';
}
else {   
include 'utama.php';
}

?>
          
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://sukait.com">mardybest</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="sys/bootstrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="sys/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="sys/bootstrap/plugins/morris/morris.min.js"></script>
    <!-- FastClick -->
    <script src="sys/bootstrap/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="sys/bootstrap/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="sys/bootstrap/dist/js/demo.js"></script>
    <!-- page script -->
	<script>
      
      $(function () {
        "use strict";
        //DONUT CHART
  
        var donutData = <?php // Query SQL dengan JOIN dan GROUP BY
$sql = "SELECT p.id_paslon,p.nama_paslon, SUM(s.suara_sah) AS total_suara_sah
        FROM paslon p
        JOIN suara s ON p.id_paslon = s.id_paslon
        GROUP BY p.id_paslon";

$result = $koneksi->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        "label" =>  $row["nama_paslon"],
        "value" => $row["total_suara_sah"]
    );
}

echo json_encode($data);
?>;

var donut = new Morris.Donut({
    element: 'sales-chart',
    resize: true,
    colors: ["#3c8dbc", "#f56954", "#00a65a"],
    data: donutData,
    hideHover: 'auto'
});
        //BAR CHART
        var barData = <?php
// Query SQL dengan JOIN dan GROUP BY
$sql = "SELECT p.id_paslon,p.nama_paslon, SUM(s.suara_sah) AS total_suara_sah, SUM(s.suara_rusak) AS total_suara_rusak
        FROM paslon p
        JOIN suara s ON p.id_paslon = s.id_paslon
        GROUP BY p.id_paslon";

$result = $koneksi->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        "y" => $row["nama_paslon"],
        "a" => $row["total_suara_sah"],
        "b" => $row["total_suara_rusak"]
    );
}

echo json_encode($data);
?>;

var bar = new Morris.Bar({
    element: 'bar-chart',
    resize: true,
    data: barData,
    barColors: ['#00a65a', '#f56954'],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Suara Sah', 'Suara Rusak'],
    hideHover: 'auto'
});


     
      
      });
    </script>
  </body>
</html>
