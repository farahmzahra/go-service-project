<div class="container">
	<div class="row mt-5 mx-5">
		<div class="col border rounded mx-5">
			<h1 class="text-center mt-3" style="color:#536D5A">Daftar</h1>
			<form action="<?=base_url('Login/registrasi_user'); ?>" method="post" enctype="multipart/form-data">
				<div class="mx-5">
					<div class="row">
					<div class="col-lg-5 mb-2 w-100">
						<label for="Nama" class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 mb-2 w-100">
						<label for="Email" class="form-label">Email</label>
						<input type="email" class="form-control" name="email">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 mb-2 w-100">
						<label for="Password" class="form-label">Password</label>
						<input type="text" class="form-control" name="password">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 mb-2 w-100">
						<label for="No HP" class="form-label">No HP</label>
						<input type="text" class="form-control" name="no_hp">
					</div>
				</div>
				<div class="row">
					<div class="custom-file">
						<label for="profil" class="custom-file-label">Upload Foto</label>
						<div>
							<input type="file" class="custom-file-input" name="profil" id="profil">
						</div>
					</div>
				</div>
				<div class="text-center mb-3">
						<button type="submit" class="btn mt-3 btn-success p-2" style="background:#536D5A">Daftar</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>