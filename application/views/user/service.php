<?php 	
	$counter = 0;
	$harga = 0;
 ?>

 <style type="text/css">
 	input[name="radioServis"] {
 		opacity: 0;
 		position: fixed;
 		width: 0;
 	}

 	input[name="radioServis"]:checked + label .carded {
 		background-color: #DCDCDC;
 		opacity: 95%;
 	}
 	
 </style>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="d-flex flex-row">
			<?php foreach($title as $judul){ 
				$img;
				$cardJasa;
				if($judul['nama_jasa'] == 'Servis AC'){
					$img = "ac_service.png";
					$cardJasa ='Servis AC';
				}
				else if($judul['nama_jasa'] == 'Servis Elektronik'){
					$img = "elektronik.png";
					$cardJasa ='Servis Elektronik';
				}
				else if($judul['nama_jasa'] == 'Servis Listrik'){
					$img = "electric.png";
					$cardJasa ='Servis Listrik';
				}
				else if($judul['nama_jasa'] == 'Perbaikan Pipa'){
					$img = "kran.png";
					$cardJasa ='Perbaikan Pipa';
				}
				
				?>
				<img src="<?php echo base_url('assets')?>/img/<?php echo $img?>" width="100px" />
			
				<h1 class="fw-bold mx-3 mt-3"><?php echo $judul['nama_jasa'] ?></h1>
				<?php } ?>
			</div>
		</div>
	</div>
	<form action="<?php echo base_url('user/pembelianJasa')?>" method="post">
		<div class="row mt-5 mx-3">
			<div class="col">
				<h4 class="">Jenis Jasa</h4>
				<?php foreach($user as $id){ ?>
					<input name="id_pengguna" value="<?php echo $id['id_pengguna']?>" type="hidden"/>
				<?php } ?>
				<?php foreach($service as $jenisjasa){ ?>
				<div class="form-check">
					<input class="form-check-input" name="jenisjasa" type="radio" value="<?=$jenisjasa['jenis_jasa'];?>" id="<?=$jenisjasa['harga'];?>" onclick="test(<?=$jenisjasa['harga'];?>)">
					<label class="form-check-label" for="<?=$jenisjasa['harga'];?>">
						<?=$jenisjasa['jenis_jasa'];?> <span class="text-secondary  fw-italic" style>(Rp. <?=$jenisjasa['harga'];?>)</span>
						<input name="id_jenis" value="<?php echo $jenisjasa['id_jenis']?>" type="hidden"/>
						<input name="id_jasa" value="<?php echo $jenisjasa['id_jasa']?>" type="hidden"/>
						<input name="harga" value="<?php echo $jenisjasa['harga']?>" type="hidden"/>
					
					</label>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="row mt-5 mx-3">
			<div class="col">
				<h4 class="">Keterangan</h4>
				<div class="form-floating">
					<textarea class="form-control" placeholder="Tuliskan Keterangan Masalah Anda"
						id="floatingTextarea" height="" name="ket"></textarea>
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
							<input type="date" class="form-control" id="tanggal" name="tanggal">
						</div>

					</div>
					<div class="col">
						<div class="mb-3">
							<label for="tanggal" class="form-label">Waktu</label>
							<select name="waktu" class="form-select" aria-label="Default select example">
								<option selected>Waktu Tersedia</option>
								<option value="Pagi">Pagi (07.00 - 10.00 WIB)</option>
								<option value="Siang">Siang (13.00 - 15.00 WIB)</option>
								<option value="Sore">Sore (16.30 - 17.30 WIB)</option>
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
					<?php
					$flagcard = null;
					foreach($teknisi as $card) {
						$flagcard = "Tersedia";
						?>
					<input type="radio" name="radioServis" id="radio<?php echo "$counter"?>">
					<label for="radio<?php echo "$counter"?>">
						<div class="card d-flex flex-lg-row p-3 carded me-5" style="width: 15rem;">
							<img src="<?php echo base_url('assets')?>/img/<?php echo $card['profil']; ?>" class=" rounded" width="100px">
							<input type="hidden" name="id_teknisi" value="<?php echo $card['id_teknisi'];?>"/>
							<div class="card-body">	
								<p class="card-text fw-bold"><?php echo $card['nama']; ?></p>
								<p class="card-text"><?php echo $cardJasa ?></p>
							</div>
						</div>
					</label>
					<?php $counter++;?>
					<?php } ?>
					<?php if ($flagcard == null){
						echo "<h3 class='d-flex justify-content-center text-secondary'>Teknisi Tidak Tersedia</h3>";
					} ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="text-center mt-5">
        		<h5>Total Bayar : </h5>
        		<h5 id="prosesPemesanan" class="text-center"></h5>
        		<h6 style="opacity: 50%;">*Pembayaran dilakukan di tempat</h6>
        	</div>
            <div class="col d-flex justify-content-center">
                <button class="btn mt-5 btn-lg text-light" style="background-color:#536D5A;width:200px">Total Bayar</button>
            </div>
        </div>
	</form>
</div>

<script type="text/javascript">
	let test = (harga) => {
		document.getElementById("prosesPemesanan").innerHTML = "Rp. " + harga
	}
</script>