<?php

foreach ($pelanggan->result_array() as $a) {
	// $id_pelanggan = $a['id_pelanggan'];
	// $nama_pelanggan = $a['nama_pelanggan'];
	// $j_kelamin = $a['j_kelamin'];
	// $desa = $a['desa'];
	// $kecamatan = $a['kecamatan'];
	// $rt = $a['rt'];
	// $rw = $a['rw'];
	// $kategori = $a['kategori'];
	// $meter_pertama = $a['meter_pertama'];
	// $tggl_pemasangan = $a['tggl_pemasangan'];
?>
	<!-- modal -->
	<div id="edit-modal<?= $a['id_pelanggan']; ?>" class="modal">
		<div class="modal__content">
			<!-- <div class="d-flex">
                    <img src="<?= base_url('assets/'); ?>images/logo.png" width="20%" class="img-responsive mr-auto">
                </div> -->

			<div class="mt-1">

				<?= form_open_multipart('pelanggan/edit_pelanggan'); ?>
				<div class="form-group tb-point">
					<label for="exampleInputEmail1"><b>Id Pelanggan</b></label>
					<input readonly type="text" name="id_pelanggan" value="<?= $a['id_pelanggan'] ?>" class="form-control" id="id_pelanggan" aria-describedby="emailHelp" readonly>
					<?= form_error('nama_pelanggan', '<small class="text-danger pl-3">,</small>'); ?>
				</div>
				<div class="form-group tb-point">
					<label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
					<input type="text" name="nama_pelanggan" value="<?= $a['nama_pelanggan'] ?>" class="form-control" id="nama_pelanggan" aria-describedby="emailHelp">
				</div>
				<div class="form-group tb-point">
					<label for="exampleInputEmail1"><b>Jenis Kelamin</b></label>
					<input readonly type="text" name="j_kelamin" value="<?= $a['j_kelamin'] ?>" class="form-control" id="j_kelamin" aria-describedby="emailHelp">
				</div>
				<div class="form-group tb-point">
					<label for="exampleInputEmail1"><b>Desa</b></label>
					<div class="input-group mb-3">
						<select class="custom-select" name="desa" id="desa">
							<option selected><?= $a['desa'] ?></option>
							<option value="Aik Dewa">Aik Dewa</option>
							<option value="Pringgasela">Pringgasela</option>
							<option value="Pringgasela Selatan">Pringgasela Selatana</option>
						</select>
					</div>
				</div>
				<div class="form-group tb-point">
					<label for="exampleInputEmail1"><b>Kecamatan</b></label>
					<div class="input-group mb-3">
						<select class="custom-select" name="kecamatan" id="kecamatan">
							<option selected><?= $a['kecamatan'] ?></option>
							<option value="Pringgasela">Pringgasela</option>
						</select>
					</div>
				</div>
				<div class="d-flex">
					<div class="form-group tb-point">
						<label><b>RT</b></label>
						<input type="number" name="rt" value="<?= $a['rt'] ?>" class="form-control" id="rt" aria-describedby="emailHelp">
					</div>
					<div class="form-group tb-point ml-auto">
						<label><b>RW</b></label>
						<input type="number" name="rw" value="<?= $a['rw'] ?>" class="form-control" id="rw" aria-describedby="emailHelp">
					</div>
					<div class="form-group tb-point ml-auto">
						<label><b>Kategori</b></label>
						<input readonly type="text" name="kategori" value="<?php if ($a['kategori'] == 'std') {
																				echo 'Standar';
																			} elseif ($a['kategori'] == 'kms') {
																				echo 'Keluarga Miskin';
																			} elseif ($a['kategori'] == 'ins') {
																				echo 'Dinas / Instansi';
																			} elseif ($a['kategori'] == 'msj') {
																				echo 'Mushola / Masjid';
																			} ?>" class="form-control" id="kategori" aria-describedby="emailHelp">
					</div>
					<div class="form-group tb-point ml-auto">
						<label><b>Meter Pertama</b></label>
						<input type="text" name="meter_pertama" value="<?= $a['meter_pertama'] ?>" class="form-control" id="meter_pertama" aria-describedby="emailHelp">
					</div>
				</div>
				<div class="form-group tb-point ml-auto">
					<label><b>Pilih Tanggal Pemasangan</b></label>
					<input type="date" name="tggl_pemasangan" value="<?= $a['tggl_pemasangan'] ?>" class="form-control" id='datepicker' placeholder='Pilih Tanggal' style='width: 100%;'>
				</div>
				<div class="d-flex">
					<div class="ml-auto">
						<button type="submit" class="btn btn-info">Simpan</button>
					</div>
				</div>
				</form>

			</div>
			<a href="#" class="modal__close">&times;</a>
		</div>
	</div>
<?php } ?>
<!-- end Modal -->
