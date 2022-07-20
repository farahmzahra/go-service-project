<style type="text/css">
	select[readonly] {
		background-color: white !important;
		pointer-events: none;
		touch-action: none;
		outline: 0px;
		border: 0px;
	}

</style>
<div class="container ">

	<div class="row">
		<?php foreach($wait as $a){ ?>
		<div class="col">
			<div class="card mt-4 ms-2 " style="width:25rem;">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							<p class="card-text">Nama Lengkap</p>
						</div>
						<div class="col-6">
                            <?php foreach($pengguna as $user){ ?>
							<p class="card-text"><?php echo $user['nama']; ?></p>
                            <?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-6 mt-1">
							<p class="card-text">Tanggal pesanan</p>
						</div>
						<div class="col-6 mt-1">
							<p class="card-text"><?php echo $a['tanggal'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<p class="card-text">waktu pesanan</p>
						</div>
						<div class="col-6">
							<p class="card-text"><?php echo $a['waktu'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-6 mt-1">
							<p class="card-text">Biaya Pesanan</p>
						</div>
						<div class="col-6 mt-1">
							<p class="card-text"><?php echo $a['harga'] ?></p>
						</div>
					</div>
		
				
					<div class="col text-center">
						<a href="#" class="btn text-light px-5 mt-3 me-2" style="background-color:#536D5A"><?php echo $a['status'] ?></a>
					
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

</div>
