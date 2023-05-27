<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MVC</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="vendor/plugins/fontawesome-free/css/all.min.css">

	<!-- DataTables -->
	<link type="text/css" rel="stylesheet" href="vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link type="text/css" rel="stylesheet"
		href="vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link type="text/css" rel="stylesheet" href="vendor/plugins/datatables/fixedColumns.dataTables.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vendor/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


	<!-- jQuery -->
	<script src="vendor/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- DataTables -->
	<script type="text/javascript" src="vendor/plugins/datatables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="vendor/plugins/datatables/dataTables.fixedColumns.min.js"></script>
	<script type="text/javascript" src="vendor/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="vendor/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="vendor/dist/js/demo.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="../../index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="vendor/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">MVC</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="vendor/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Eduard Rino Carton</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
							<a href="<?= Router::uri() ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-plus-square"></i>
								<p>
									Extras
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= Router::uri('user') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Users</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<?php include $router->route['views_file']; ?>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.0.2-pre
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">ZechSolutions</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
</body>

</html>