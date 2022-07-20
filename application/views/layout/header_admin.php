<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Go-Service</title>
	<link rel="stylesheet" href="<?=base_url('assets')?>/style/navbar.css">
	<link rel="stylesheet" href="<?=base_url('assets')?>/style/input.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
</style>
<body>
	<!-- navbar admin -->
	<div class="container-fluid">
		<div class="row flex-nowrap">
			<div class="col-auto px-0 w-25rem" style="background:#536D5A">
				<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
					id="navbarSupportedContent">
					<a class="navbar-brand fw-bold fs-1 px-3 fs-2 mt-4" style="color:#CBD5B2" href="#">Go-<br>Service!</a>
					<ul class="navbar-nav mt-4 px-3">
						<li class="nav-item mt-1">
							<a class="btn text-light px-5 w-100 fs-5" href="<?=site_url('Admin/daftar') ?>" 
								style="background-color:#CBD5B2">Daftar Teknisi</a>
						</li>
						<li class="nav-item mt-3">
							<a class="btn text-light px-5 w-100 fs-5" href="<?=site_url('Admin/index') ?>"
								style="background-color:#CBD5B2">Data Teknisi</a>
						</li>
						<li class="nav-item mt-3">
							<a class="btn text-light px-5 w-100 fs-5" href="<?=site_url('Admin/jasa') ?>"
								style="background-color:#CBD5B2">Data Jasa</a>
						</li>
						<li class="mt-3 ">
							<a class="btn text-light px-5 w-100 fs-5" href="<?=site_url('Admin/jenis') ?>"
								style="background-color:#CBD5B2">Data Jenis Jasa</a>
						</li>
						<li class="nav-item mt-5">
							<a class="btn text-light px-5 mt-5 w-100 fs-5" aria-current="" href="<?=base_url('Login/logout'); ?>" style="background-color:#CBD5B2">Keluar</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col py-3">
				<div class="container ">
					<div style="margin-left:80%;">

						<div class="d-flex justify-content-center mt-2">
							<img src="<?php echo base_url('assets')?>/img/user.png" width="30px" />
						</div>

						<div class="d-flex justify-content-center mt-2">
							<h6>Hello, Admin!</h6>
						</div>
					</div>
				</div>