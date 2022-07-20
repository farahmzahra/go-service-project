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
			<?php foreach($pesanan as $a){ ?>
			<div class="col">
				<div class="card mt-4 ms-2 me-5" style="width:25rem;">
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<p class="card-text">Nama Lengkap</p>
							</div>
							<div class="col-6">
								<?php foreach(($this->Teknisi_model->getbyidTeknisi($a['id_pengguna']))as $user){ ?>
								<p class="card-text"><?php echo $user['nama']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mt-1">
								<p class="card-text">No HP</p>
							</div>
							<div class="col-6 mt-1">
							<?php foreach(($this->Teknisi_model->getbyidTeknisi($a['id_pengguna']))as $user){ ?>
								<p class="card-text"><?php echo $user['no_hp']; ?></p>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<p class="card-text">Email</p>
							</div>
							<div class="col-6">
							<?php foreach(($this->Teknisi_model->getbyidTeknisi($a['id_pengguna']))as $user){ ?>
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
						<div class="row">
							<div class="col-6 mt-1">
								<p class="card-text">Status Pesanan</p>
							</div>
							<div class="col-6 mt-1">
								<b><p class="card-text"><?php echo $a['status']; ?></p><b>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>