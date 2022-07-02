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

<body>


	<!-- navbar admin -->
	<div class="container-fluid">
		<div class="row flex-nowrap">
			<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background:#536D5A">

				<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
					id="navbarSupportedContent">

					<a class="navbar-brand fw-bold fs-1 px-3" style="color:#CBD5B2" href="#">Go-<br>Service!</a>
					<ul class="navbar-nav mt-5 mx-lg-4 px-3">
						<li class="nav-item mt-3 ">
							<a class="nav-link active btn px-3 btn-block btn-default fs-6 rounded-pill " aria-current=""
								href="<?=site_url('Admin/daftar') ?>" style="background-color:#CBD5B2">Daftar teknisi</a>
						</li>
						<li class="nav-item mt-3">
							<a class="nav-link active btn  btn-default fs-6  rounded-pill" aria-current="" href="<?=site_url('Admin/index') ?>"
								style="background-color:#CBD5B2">Data teknisi</a>
						</li>
						<li class="nav-item mt-3">
							<a class="nav-link active btn  btn-default fs-6 rounded-pill " aria-current="" href="<?=site_url('Admin/jasa') ?>"
								style="background-color:#CBD5B2">Data jasa</a>
						</li>
						<li class="nav-item mt-3 ">
							<a class="nav-link active btn  btn-default fs-6 rounded-pill " aria-current="" href="<?=site_url('Admin/jenisJasa') ?>"
								style="background-color:#CBD5B2">Data Jenis jasa</a>

						</li>
						<li class="nav-item mt-5  ">
							<a class="nav-link active btn  btn-default fs-6 rounded-pill mt-5 " aria-current="" href=""
								style="background-color:#CBD5B2">Keluar</a>

						</li>
					</ul>



				</div>
			</div>

			<div class="col py-3">
				<div class="container ">
					<div style="margin-left:80%;">

						<div class="d-flex justify-content-center">
							<img src="<?php echo base_url('assets')?>/img/user.png" width="70px" />
						</div>

						<div class="d-flex justify-content-center">
							<h4>Hello, Name!</h4>
						</div>
					</div>
