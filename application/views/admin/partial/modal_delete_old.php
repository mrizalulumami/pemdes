<?php

foreach ($pelanggan->result_array() as $a) {
?>
	<!-- modal -->
	<div class="modal" id="modal-delete<?= $a['id_pelanggan']; ?>">
		<div class="modal__content-del">
			<div class="mt-1">

				<div>
					<h4 class="text-center">Apakah anda yakin ingin menghapus data?</h4>
					<div class="mt-3 mb-3">
						<center>
							<a href="<?= base_url('pelanggan/delete_pelanggan/') . $a['id_pelanggan']; ?>" class="btn btn-warning btn-lg">Hapus</a>
							<a href="#" class=" ml-5 btn btn-info btn-lg">Batal</a>
						</center>
					</div>
				</div>

			</div>
		</div>
	</div>

	</div>
	<!-- end Modal -->
<?php } ?>
