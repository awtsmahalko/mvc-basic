<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap 5 Website Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		.fakeimg {
			height: 200px;
			background: #aaa;
		}
	</style>
</head>

<body>
	<div class="p-2 bg-primary text-white text-center">
		<h1>MVC</h1>
		<p>Basic MVC for your app!</p>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="/mvc-basic">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/mvc-basic/user">User</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-12">
				<?php include $router->route['views_file']; ?>
			</div>
		</div>
	</div>

	<div class="mt-5 p-1 bg-dark text-white text-center">
		<p>Footer</p>
	</div>

</body>

</html>