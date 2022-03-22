<?php

foreach ($menu_kecamatan as $a) {
?>
<!-- modal -->
<div id="edit-modal-kecamatan<?= $a['id']?>" class="modal">
    <div class="modal__content-bayar">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data Kecamatan</h5>
        </div>

        <div class="mt-3">

        <?= form_open_multipart('menu/edit_kecamatan'); ?>
                <div class="form-group tb-point">
                    <label for="exampleInputEmail1"><b>Nama Kecamatan</b></label>
                    <input type="hidden" name="id" value="<?= $a['id']?>" class="form-control" id="id">
                    <input type="text" name="kecamatan" value="<?= $a['kecamatan']?>" class="form-control" id="kecamatan">
                </div>
        </div>
        <div class="d-flex">
            <div class="ml-auto mt-4">
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="#" class="ml-1 btn btn-warning">Batal</a>
            </div>
        </div>

    </div>

    </form>

</div>
<!-- end Modal -->
<?php }?>