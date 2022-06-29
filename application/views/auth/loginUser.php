<div class="container">
	<div class="row mt-5 p-2">
		<div class="col">
			<img src="<?php echo base_url('assets/')?>img/login.png" width="550erm" />
		</div>
		<div class="col">
			<h1 class="text-center mt-sm-5" style="color:#536D5A">Selamat Datang</h1>
			<form action="#" method="post" enctype="multipart/form">
				<div class="row mt-5">
					<div class="mb-3">
						<label for="user" class="form-label">Username</label>
						<input type="email" class="form-control" id="user" aria-describedby="wrong_user">
						<div id="wrong_user" class="form-text text-danger">* username anda salah</div>
					</div>
					<div class="mb-3">
						<label for="psw" class="form-label">Password</label>
						<input type="password" class="form-control" id="psw" aria-describedby="wrong_psw">
						<div id="wrong_psw" class="form-text text-danger">* password anda salah</div>
					</div>
					<button type="submit" class="btn mt-3 btn-success p-2" style="background:#536D5A">Submit</button>

				</div>
			</form>
			<div class="d-flex justify-content-center flex-row mt-3">
				<a style="color:#536D5A">Dafatarkan akunmu disini , </a><a href="#" class="fw-bold " style="color:#536D5A"> pengguna</a>
			</div>

		</div>
	</div>
</div>
