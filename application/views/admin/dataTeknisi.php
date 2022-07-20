<div class=" m-5">
	<h1><?php echo $judul; ?></h1>
	<table class="table mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Profil</th>
				<th>ID</th>
				<th>Nama</th>
				<th>Email</th>
				<th>No.Hp</th>
				<th>Jasa</th>
				<th>Rating</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($teknisi as $tech) : ?>
			<tr>
				<td> <?= $i; ?>.</td>
				<td>
					<img src="<?= base_url('assets/img/') . $tech['profil']; ?>" style="width: 100px;" class="img-thumbnail">
				</td>
				<td><?= $tech['id_teknisi']; ?></td>
				<td><?= $tech['nama']; ?></td>
				<td><?= $tech['email']; ?></td>
				<td><?= $tech['no_hp']; ?></td>
				<td><?= $tech['id_jasa']; ?></td>
				<td><?= $tech['rating']; ?></td>
				<td>
					<a href="<?= base_url('Admin/hapus/') . $tech['id_teknisi']; ?>" style="text-decoration: none; color: #000000">
						<i class="fa-solid fa-trash"></i>
					</a>
					<a href="<?= base_url('Admin/detail/') . $tech['id_teknisi']; ?>" style="text-decoration: none; color: #000000;">
	                    <i class="fa-solid fa-circle-info"></i>
					</a>
				</td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
