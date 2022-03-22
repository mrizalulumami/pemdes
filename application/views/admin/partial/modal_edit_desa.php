<?php

foreach ($menu_desa as $a) {
?>
<!-- modal -->
<div id="edit-modal-desa<?= $a['id']?>" class="modal">
    <div class="modal__content-bayar">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data Desa</h5>
        </div>

        <div class="mt-3">

        <?= form_open_multipart('menu/edit_desa'); ?>
                <div class="form-group tb-point">
                    <label for="exampleInputEmail1"><b>Nama Desa</b></label>
                    <input type="hidden" name="id" value="<?= $a['id']?>" class="form-control" id="id">
                    <input type="text" name="desa" value="<?= $a['desa']?>" class="form-control" id="desa">
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