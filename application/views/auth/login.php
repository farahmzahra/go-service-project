<?= $this->session->flashdata('message'); ?>
<div class="container">
	<div class="row mt-5 p-2 ">
		<div class="col border rounded">
			<img src="<?php echo base_url('assets/')?>img/login.png" width="550erm" />
		</div>		
		<div class="col border rounded mx-1">
			<h1 class="text-center mt-sm-5" style="color:#536D5A">Selamat Datang!</h1>
			<form action="<?=base_url('Login/cek_login'); ?>" method="post" enctype="multipart/form">
				<div class="row mt-5">
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="mb-3">
						<label for="psw" class="form-label">Password</label>
						<input type="password" class="form-control" id="psw" name="password">
					</div>
					<div class="text-center">
						<button type="submit" class="btn text-light px-4" style="background:#536D5A">Login</button>
					</div>
				</div>
			</form>
			<div class="d-flex justify-content-center flex-row mt-3">
				<a style="color:#536D5A">Daftarkan akunmu disini,</a>
				<a href="<?=base_url('Login/registrasi'); ?>" class="fw-bold " style="color:#536D5A"> Pengguna</a>
			</div>
		</div>
	</div>
</div>
