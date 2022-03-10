<?php

foreach ($pelanggan->result_array() as $a) {
?>
<!-- modal -->
<div class="modal" id="modal-del_pembayaran<?= $a['id_pembayaran']; ?>">
    <div class="modal__content-del">
        <div class="modal-header">
            <h5 class="modal-title">Hapus Data Pelanggan</h5>
        </div>
        <div class="mt-1">

            <div>
                <class="text-center">Apakah anda yakin ingin menghapus data?</class>
                    <div class="mt-3 mb-3">
                        <div class="modal-footer">
                            <a href="<?= base_url('pelanggan/delete_pembayaran/') . $a['id_pembayaran']; ?>"
                                class="btn btn-danger">Hapus</a>
                            <a href="#" class="ml-1 btn btn-warning">Batal</a>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</div>

</div>
<!-- end M
odal -->






















<?php } ?>