<div class=" m-5">
	<h1><?php echo $judul; ?></h1>
	<table class="table mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Jenis Jasa</th>
				<th>ID Jasa</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($jenis as $jj) : ?>
				<tr>
					<td><?= $i; ?>.</td>
					<td><?= $jj['id_jenis']; ?></td>
					<td><?= $jj['jenis_jasa']; ?></td>
					<td><?= $jj['id_jasa']; ?></td>
					<td><?= $jj['harga']; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
