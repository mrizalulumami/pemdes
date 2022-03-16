<!-- modal -->
<div id="demo-modal" class="modal">
	<div class="modal__content">
		<!-- <div class="d-flex">
                    <img src="<?= base_url('assets/'); ?>images/logo.png" width="20%" class="img-responsive mr-auto">
                </div> -->

		<div class="mt-1">

			<?= form_open_multipart('pelanggan/tambah_pelanggan'); ?>
			<div class="form-group tb-point">
				<label for="exampleInputEmail1"><b>Id Pelanggan</b></label>
				<input type="text" name="id_pelanggan" value="<?= $kodeunik; ?>" class="form-control" id="id_pelanggan" aria-describedby="emailHelp" readonly>
				<?= form_error('nama_pelanggan', '<small class="text-danger pl-3">,</small>'); ?>
			</div>
			<div class="form-group tb-point">
				<label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
				<input type="text" name="nama_pelanggan" placeholder="Tulis nama lengkap pelanggan" class="form-control" id="nama_pelanggan" aria-describedby="emailHelp">
			</div>
			<div class="form-group tb-point">
				<label for="exampleInputEmail1"><b>Jenis Kelamin</b></label>
				<div class="input-group mb-3">
					<select class="custom-select" name="j_kelamin" id="j_kelamin">
						<option selected>Pilih Jenis Kelamin</option>
						<option value="L">Laki- Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group tb-point">
				<label for="exampleInputEmail1"><b>Desa</b></label>
				<div class="input-group mb-3">
					<select class="custom-select" name="desa" id="desa">
						<option selected>Pilih Desa</option>
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
						<option selected>Kecamatan</option>
						<option value="Kecamatan Pringgasela">Pringgasela</option>
					</select>
				</div>
			</div>
			<div class="d-flex">
				<div class="form-group tb-point">
					<label><b>RT</b></label>
					<input type="number" name="rt" placeholder="Tulis RT tempat tinggal pelanggan" class="form-control" id="rt" aria-describedby="emailHelp">
				</div>
				<div class="form-group tb-point ml-auto">
					<label><b>RW</b></label>
					<input type="number" name="rw" placeholder="Tulis RW tempat tinggal pelanggan" class="form-control" id="rw" aria-describedby="emailHelp">
				</div>
				<div class="form-group tb-point ml-auto">
					<label><b>Kategori</b></label>
					<div class="input-group mb-3">
						<select class="custom-select" name="kategori" id="kategori">
							<option selected>Pilih Kategori</option>
							<option value="std">Standar</option>
							<option value="kms">Keluarga Miskin</option>
							<option value="ins">Dinas/Instansi</option>
							<option value="msj">Mushola/Masjid</option>
						</select>
					</div>
				</div>
				<div class="form-group tb-point ml-auto">
					<label><b>Meter Pertama</b></label>
					<input type="text" name="meter_pertama" placeholder="Tulis Meter pertama" class="form-control" id="meter_pertama" aria-describedby="emailHelp">
				</div>
			</div>
			<div class="form-group tb-point ml-auto">
				<label><b>Pilih Tanggal</b></label>
				<input type="date" name="tggl_pemasangan" class="form-control" id='datepicker' placeholder='Pilih Tanggal' style='width: 100%;'>
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
<!-- end Modal -->
