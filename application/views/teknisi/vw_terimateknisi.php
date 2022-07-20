<style type="text/css">
	select[readonly] {
		background-color: white !important;
		pointer-events: none;
		touch-action: none;
		outline: 0px;
		border: 0px;
	}

</style>
<div class="container">
	<div class="row">
		<div class="col-2 mt-4">
			<img src="<?=base_url('assets/img/') . $teknisi['profil']; ?>" class="rounded" width="150px" />
		</div>
		<div class="col-10 mt-4">
			<div class="row">
				<div class="col-1">
					<h6>ID</h6>
				</div>
				<div class="col-2 ms-2">
					<h6><?= $teknisi['id_teknisi']; ?></h6>
				</div>
			</div>
			<div class="row">
				<div class="col-1 mt-2">
					<h6>Nama</h6>
				</div>
				<div class="col-2 mt-2 ms-2">
					<h6><?= $teknisi['nama']; ?></h6>
				</div>
			</div>
			<div class="row">
				<div class="col-1 mt-2">
					<h6>No HP</h6>
				</div>
				<div class="col-2 mt-2 ms-2">
					<h6><?= $teknisi['no_hp']; ?></h6>
				</div>
			</div>
			<div class="row">
				<div class="col-1 mt-2">
					<h6>Email</h6>
				</div>
				<div class="col-2 mt-2 ms-2">
					<h6><?= $teknisi['email']; ?></h6>
				</div>
			</div>
			<div class="row">
				<div class="col-1 mt-2">
					<h6>Jasa</h6>
				</div>
				<div class="col-2 me-2">
					<h6>
						<select name="id_jasa" id="id_jasa" class="form-control" readonly="readonly">
							<?php foreach ($jasa as $j): ?>
							<option value="<?= $j['id_jasa']; ?>" <?php if ($teknisi['id_jasa'] == $j['id_jasa']) {
	                                        echo "selected";
	                                    } ?>><?= $j['nama_jasa']; ?></option>
							<?php endforeach; ?>
						</select>
					</h6>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach($pesanan as $a){ ?>
	
			<div class="col">
				<div class="card mt-4 ms-2 me-5" style="width:25rem;">
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<p class="card-text">Nama Lengkap</p>
							</div>
							<div class="col-6">
								<?php foreach(($this->User_model->getbyid($a['id_pengguna']))as $user){ ?>
								<p class="card-text"><?php echo $user['nama']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mt-1">
								<p class="card-text">No HP</p>
							</div>
							<div class="col-6 mt-1">
							<?php foreach(($this->User_model->getbyid($a['id_pengguna']))as $user){ ?>
								<p class="card-text"><?php echo $user['no_hp']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<p class="card-text">Email</p>
							</div>
							<div class="col-6">
							<?php foreach(($this->User_model->getbyid($a['id_pengguna']))as $user){ ?>
								<p class="card-text"><?php echo $user['email']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mt-1">
								<p class="card-text">ID Pesanan</p>
							</div>
							<div class="col-6 mt-1">
								<p class="card-text"><?php echo $a['id_pesanan']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<p class="card-text">Jasa</p>
							</div>
							<div class="col-6 mt-1">
							<?php foreach(($this->Jasa_model->getbyid($a['id_jasa']))as $user){ ?>
								<p class="card-text"><?php echo $user['nama_jasa']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mt-1">
								<p class="card-text">Jenis Jasa</p>
							</div>
							<div class="col-6 mt-1">
							<?php foreach(($this->Jenis_model->getByIdjenis($a['id_jenis']))as $user){ ?>
								<p class="card-text"><?php echo $user['jenis_jasa']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<p class="card-text">Tanggal</p>
							</div>
							<div class="col-6">
								<p class="card-text"><?php echo $a['tanggal']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mt-1">
								<p class="card-text">Waktu</p>
							</div>
							<div class="col-6 mt-1">
								<p class="card-text"><?php echo $a['waktu']; ?></p>
							</div>
						</div>
						<p class="card-text mt-1">Keterangan</p>
						<p class="form-control">
							<?php echo $a['keterangan']; ?>
						</p>
						<div class="col text-center">
							<a href="<?php echo base_url('Teknisi/tolakpesan/').$a['id_pesanan']; ?>" class="btn text-light px-5 mt-1 me-2" style="background-color:#536D5A">Tolak</a>
							<a href="<?php echo base_url('Teknisi/terimapesan/').$a['id_pesanan']; ?>" class="btn text-light px-5 mt-1 ms-2"
								style="background-color:#CBD5B2">Terima</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		
		</div>
	</div>
</div>
