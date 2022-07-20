<style type="text/css">
	select[readonly] {
	  background: #FFFFFF;
	  pointer-events: none;
	  touch-action: none;
	}
</style>
<div class="m-5">
	<h1><?php echo $judul; ?></h1>
	<div class="row mt-4">
		<div class="col">
			<div class="mb-3">
				<label for="nik" class="form-label">NIK</label>
				<input type="text" class="form-control" name="nik" value="<?=$teknisi['nik'];?>">
			</div>
			<div class="mb-3">
				<label for="nama" class="form-label">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" value="<?=$teknisi['nama'];?>">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" name="email" value="<?=$teknisi['email'];?>">
			</div>
			<div class="mb-3">
				<label for="hp" class="form-label">No HP</label>
				<input type="text" class="form-control" name="no_hp" value="<?=$teknisi['no_hp'];?>">
			</div>
		</div>
		<div class="col">
			<div class="mb-3">
				<label for="id_jasa" class="form-label">Jasa</label>
                <select name="id_jasa" id="id_jasa" class="form-control" readonly="readonly">
	                <?php foreach ($jasa as $j): ?>
	                    <option value="<?= $j['id_jasa']; ?>" <?php if ($teknisi['id_jasa'] == $j['id_jasa']) {
	                                        echo "selected";
	                                    } ?>><?= $j['nama_jasa']; ?></option>
	                <?php endforeach; ?>
	            </select>
			</div>
            <div class="mb-3">
				<label for="hp" class="form-label">Foto Profil</label>
				<div>
					<img src="<?=base_url('assets/img/') . $teknisi['profil']; ?>" style="width: 125px;" class="img-thumbnail">
				</div>
			</div>
			<div class="mb-3">
				<label for="rating" class="form-label">Rating</label>
				<input type="text" class="form-control" name="rating" value="<?=$teknisi['rating'];?>">
			</div>
		</div>
	</div>
</div>
