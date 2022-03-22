<main class="app-content">
	<div class="row mb-2">
		<div class="col-md-12">
			<h4>Cari Data Pelanggan</h4>
		</div>
		<div class="col-md-9">

			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Temukan nomor atau nama pelanggan" aria-label="Temukan nomor atau nama pelanggan" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-suci pl-3 pr-3" type="submit" id="button-addon2">Cari
							Data</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3">
			<a href="#demo-modal" class="btn btn-suci"><i class="fa fa-plus"></i> Tambah Data</a>
			<!-- <a href="#" class="btn btn-suci"><i class="fa-solid fa-pencil"></i> Ubah Data</a> -->
		</div>
	</div>
	<div class="row">
		<?= $this->session->flashData('message'); ?>
		<div class="col-md-12">
			<h4>Rincian Data Pelanggan</h4>
		</div>
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body">
					<div class="table-responsive tb-point">
						<table class="table table-hover table-bordered" id="sampleTable">
							<thead>
								<tr>
									<th>Nomor Pelanggan</th>
									<th>Nama Pelanggan</th>
									<th>RW</th>
									<th>Desa</th>
									<th>Kecamatan</th>
									<th>Kategori</th>
									<th>Tgl Daftar</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php

								foreach ($pelanggan->result_array() as $a) :
								?>
									<tr>
										<td><?php echo $a['id_pelanggan']; ?></td>
										<td><?php echo $a['nama_pelanggan']; ?></td>
										<td><?= $a['rw']; ?></td>
										<td><?= $a['desa']; ?></td>
										<td><?= $a['kecamatan']; ?></td>
										<td><?= $a['kategori']; ?></td>
										<td><?= $a['tggl_pemasangan']; ?></td>
										<td>
											<center>
												<a href="#edit-modal<?= $a['id_pelanggan']; ?>" type="button"><i class="fas fa-edit"></i></a>
												|
												<a href="#modal-delete<?= $a['id_pelanggan']; ?>" type="button"><i class="fas fa-trash-alt" style="color: red"></i></a>
											</center>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
