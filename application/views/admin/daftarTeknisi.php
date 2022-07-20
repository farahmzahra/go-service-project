<div class="m-5">
	<h1><?php echo $judul; ?></h1>
	<form action="<?=base_url('Admin/registrasi_teknisi'); ?>" method="post" enctype="multipart/form-data">
	<div class="row mt-4">
		<div class="col">
			<div class="mb-3">
				<label for="nik" class="form-label">NIK</label>
				<input type="text" class="form-control" name="nik" aria-describedby="wrong_user">
			</div>
			<div class="mb-3">
				<label for="nama" class="form-label">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" aria-describedby="wrong_user">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" name="email" aria-describedby="wrong_user">
			</div>
			<div class="mb-3">
				<label for="Password" class="form-label">Password</label>
				<input type="text" class="form-control" name="password" aria-describedby="wrong_user">
			</div>
		</div>
		<div class="col">
			<div class="mb-3">
				<label for="hp" class="form-label">No HP</label>
				<input type="text" class="form-control" name="no_hp" aria-describedby="wrong_user">
			</div>
			<div class="mb-3">
				<label for="id_jasa" class="form-label">Jasa</label>
                <select name="id_jasa" value="" id="id_jasa" class="form-control">
                    <option value="">Pilih Jasa</option>
                    <?php foreach ($jasa as $j) : ?>
                        <option value="<?= $j['id_jasa']; ?>"><?= $j['nama_jasa']; ?></option>
                    <?php endforeach; ?>
                </select>
			</div>
            <div class="mb-3 custom-file">
				<label for="profil" class="custom-file-label">Upload Foto</label>
				<input type="file" class="custom-file-input" name="profil" id="profil">
			</div>
			<div class="mb-3">
				<label for="rating" class="form-label">Rating</label>
				<input type="text" class="form-control" name="rating" aria-describedby="wrong_user">
			</div>
            <div class="mt-5 ">
                <button type="submit" class="btn btn-md w-25" style="background-color:#CBD5B2;color: white">Daftar</button>
			</div>
		</div>
	</div>
	</form>
</div>
