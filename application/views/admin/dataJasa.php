<div class=" m-5">
	<h1><?php echo $judul; ?></h1>
	<table class="table mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Nama Jasa</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($jasa as $d) : ?>
				<tr>
					<td> <?= $i; ?>.</td>
					<td><?= $d['id_jasa']; ?></td>
					<td><?= $d['nama_jasa']; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
