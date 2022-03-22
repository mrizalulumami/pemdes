<?php

foreach ($menu_kecamatan as $a) {
?>
<!-- modal -->
<div class="modal" id="modal-delete-kecamatan<?= $a['id']?>">
    <div class="modal__content-del">
        <div class="modal-header">
            <h5 class="modal-title">Hapus Data Kecamatan</h5>
        </div>
        <div class="mt-1">

            <div>
                <class="text-center">Apakah anda yakin ingin menghapus data?</class>
                    <div class="mt-3 mb-3">
                        <div class="modal-footer">
                            <a href="<?= base_url('menu/delete_kecamatan/') . $a['id']; ?>" class="btn btn-danger">Hapus</a>
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
<?php }?>