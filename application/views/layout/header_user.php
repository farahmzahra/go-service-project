<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Go-Service</title>
	<link rel="stylesheet" href="<?=base_url('assets')?>/style/navbar.css">
	<link rel="stylesheet" href="<?=base_url('assets')?>/style/input.css">
	<link rel="stylesheet" href="<?=base_url('assets')?>/style/card-select.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
	<!-- Navbar Pengguna -->
	<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand fw-bold fs-2 px-3" style="color:#CBD5B2" href="<?=base_url('User'); ?>">Go-Service</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="toggler-icon top-bar"></span>
				<span class="toggler-icon middle-bar"></span>
				<span class="toggler-icon bottom-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mt-2 mb-2 mb-lg-0 ">
					<li class="nav-item">
						<a class="nav-link active fw-bold me-3" aria-current="page" href="<?=base_url('User/user/') . $user['id_pengguna']; ?>">Halaman Saya</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active fw-bold me-3" aria-current="page" href="<?=base_url('User/userTerima/') . $user['id_pengguna']; ?>">Pesanan Saya</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active fw-bold me-3" aria-current="page" href="<?=base_url('User/userRiwayatData/') . $user['id_pengguna']; ?>">Riwayat pesanan</a>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link active btn text-light btn-lg px-4" style="background-color:#536D5A" aria-current="page" href="<?=base_url('Login/logout'); ?>">Keluar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Navbar Teknisi
	<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand fw-bold fs-2 px-3" style="color:#CBD5B2" href="#">Go-Service</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="toggler-icon top-bar"></span>
				<span class="toggler-icon middle-bar"></span>
				<span class="toggler-icon bottom-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mt-2 mb-2 mb-lg-0 ">
					<li class="nav-item me-4">
						<a class="nav-link active btn text-light btn-lg px-4" style="background-color:#536D5A" aria-current="page" href="">Keluar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> -->
	<hr>