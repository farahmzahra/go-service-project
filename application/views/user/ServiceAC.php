<div class="container">
	<div class="row">
		<div class="col">
			<div class="d-flex flex-row">
				<img src="<?php echo base_url('assets')?>/img/ac_service.png" width="100px" />
				<h1 class="fw-bold mx-3 mt-3">Service AC</h1>
			</div>
		</div>
	</div>
	<form>
		<div class="row mt-5 mx-3">
			<div class="col">
				<h4 class="">Jenis Jasa</h4>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="service_ac" id="service_ac">
					<label class="form-check-label" for="service_ac">
						Service AC <span class="text-secondary  fw-italic" style>(Rp.100,000)</span>
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="bongkarPasangAc" id="bongkarPasangAc">
					<label class="form-check-label" for="bongkarPasangAc">
						Bongkar Pasang AC <span class="text-secondary  fw-italic" style>(Rp.100,000)</span>
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="reperasiAC" id="reperasiAC">
					<label class="form-check-label" for="reperasiAC">
						Reperasi AC <span class="text-secondary  fw-italic" style>(Rp.100,000)</span>
					</label>
				</div>
			</div>
		</div>
		<div class="row mt-5 mx-3">
			<div class="col">
				<h4 class="">Keterangan</h4>
				<div class="form-floating">
					<textarea class="form-control" placeholder="Tuliskan Keterangan Masalah Anda"
						id="floatingTextarea" height=""></textarea>
					<label for="floatingTextarea">Tuliskan Keterangan Masalah Anda</label>
				</div>
			</div>
		</div>
		<div class="row mt-5 mx-3">
			<div class="col">
				<h4 class="">Tanggal & Waktu Membutuhkan Layanan Ini</h4>
				<div class="row mt-3">
					<div class="col">
						<div class="mb-3">
							<label for="tanggal" class="form-label">Tanggal</label>
							<input type="date" class="form-control" id="tanggal">
						</div>

					</div>
					<div class="col">
						<div class="mb-3">
							<label for="tanggal" class="form-label">Waktu</label>
							<select class="form-select" aria-label="Default select example">
								<option selected>Waktu Tersedia</option>
								<option value="14.00 WIB">14.00 WIB</option>
								<option value="14.00 WIB">14.00 WIB</option>
								<option value="14.00 WIB">14.00 WIB</option>
							</select>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 mx-3">
			<div class="col mt-3">
				<h4 class="">Pilih Teknisi</h4>
				<div class="d-flex flex-lg-row mt-5">
					<div class="card d-flex flex-lg-row p-3 " style="width: 20rem;background-color:#CBD5B2">
						<img src="<?php echo base_url('assets')?>/img/user.png" class="p-2" width="90px" border="1">
						<div class="card-body">
							<p class="card-text fw-bold">Safruddin</p>
							<p class="card-text">Service AC</p>
						</div>

					</div>
                    <div class="card d-flex flex-lg-row p-3 mx-5 " style="width: 20rem;background-color:#CBD5B2">
						<img src="<?php echo base_url('assets')?>/img/user.png" class="p-2" width="90px" border="1">
						<div class="card-body">
							<p class="card-text fw-bold">Safruddin</p>
							<p class="card-text">Service AC</p>
						</div>

					</div>
					
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                <button class="btn mt-5  btn-lg btn-success" style="background-color:#CBD5B2;width:200px">Bayar</button>
            </div>
        </div>
	</form>

</div>
